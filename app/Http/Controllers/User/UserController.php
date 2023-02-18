<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.login');
    }

    public function dashboard(){
        return view('user.dashboard');
    }
    // public function dashboard(){
    //     return view('dashboard');
    // }

    public function store(Request $request){

        //Creating new user
        $formFields = $request->validate([
            'name' => ['required','min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:5',
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // auth()->login($user);
        
        return redirect('login');
    }

    //loggingout
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    //Authenticating User
    public function authenticate(Request $request){
        // $formFields = $request->validate([
        //     'name' => ['required','email'],
        //     'password' => 'required',
        // ]);

        // if (auth()->attempt($formFields)){
        //     // $request->session()->regenerate();
        //     if ($user->role == 'admin') {
                
        //         return redirect()->route('admin.dashboard'); 
        //     }
        //     elseif ($user->role == 'owner') {
                
        //         return redirect()->route('owner.dashboard'); 
        //     }else{
                
        //         return redirect()->route('dashboard'); 
        //     }
        // }

        $user = Auth::attempt( [
            'email' => $request->email,
            'password' => $request->password,
        ]);      

        if ($user) {
            if (Auth::user()->role == 'admin') {
                return redirect('/admin/dashboard');
            }
            elseif (Auth::user()->role == 'owner') {
                return redirect('/owner/dashboard'); 
            }else{
                return redirect('/user/dashboard'); 
            }
        }
        return redirect('login')->withErrors(['password' => 'Username or password error'])->onlyInput('email');

    }

    public function deletion(User $user){
        $user->delete();
        return redirect('/admin/form')->with('flash_message', 'User deleted!'); 
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $users = User::where('name', 'like', "%$query%")->get();

        return view('admin.layouts.form', ['users' => $users]);
    }

}
