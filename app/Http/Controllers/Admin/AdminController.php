<?php

namespace App\Http\Controllers\Admin;

use DB;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function form(){
        return view('admin.layouts.form');
    }
    public function asset(){
        return view('admin.layouts.asset');
    }
    public function asset_form(){
        return view('admin.layouts.asset_form');
    }
    public function index(){
        $users = DB::select('select * from users');
        return view('admin.layouts.form',['users'=>$users]);
    }
    public function admin_detail(){
        $users = DB::select('select * from users where role = "admin"');
        return view('admin.layouts.form',['users'=>$users]);
    }
    public function owner_detail(){
        $users = DB::select('select * from users where role = "owner"');
        return view('admin.layouts.form',['users'=>$users]);
    }
    public function user_detail(){
        $users = DB::select('select * from users where role = "user"');
        return view('admin.layouts.form',['users'=>$users]);
    }
    public function addUser(){
        return view('admin.layouts.addUser');
    }

    public function store(Request $request){

        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required','email', Rule::unique('users','email')],
            'contact' => 'required',
            'role' => 'required',
            'password' => 'required|min:5',
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        
        $user = User::create($formFields);

        return redirect('admin/form');
    }
    public function edit(User $user){
        return view('admin.layouts.edit',['user' => $user]);
    }

    public function update(Request $request, User $user){

        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required','email'],
            'contact' => 'required',
            'role' => 'required',
            'password' => 'required|min:5',
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        
        $user->update($formFields);

        return redirect('admin/form');
    }
    
}
