@extends('admin.layouts.app')

@section('content')
<section class="dashboard">
    @include('admin.layouts.top')

    <form action="/admin/form/edit/{{$user->id}}" method="post">
        @csrf
        @method('put')
        <div class="wrapper">
            <div class="title">
            Edit User
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>Name</label>
                    <input type="text" class="input" name="name" value="{{$user->name}}">
                </div>  
                    
                <div class="inputfield">
                    <label>Email Address</label>
                    <input type="text" class="input" autocomplete="off" name="email" value="{{$user->email}}">
                </div> 
                {{-- <div class="inputfield">
                    <label>Password</label>
                    <input type="password" class="input" autocomplete="off" name="password" placeholder="password" value="{{$user->password}}">
                </div>   --}}
                <div class="inputfield">
                    <label>Contact No.</label>
                    <input type="text" class="input" name="contact" placeholder="98-XXXXXXXX" value="{{$user->contact}}">
                </div> 
                    <div class="inputfield">
                    <label>Role</label>
                    <div class="custom_select">
                        <select name="role" value="{{$user->role}}">
                            <option value="">Select</option>
                            <option value="admin" name="admin">Admin</option>
                            <option value="owner" name="owner">Owner</option>
                            <option value="user" name="user">User</option>
                        </select>
                    </div>
                </div> 
                <div class="inputfield">
                    <input type="submit" class="btn1" value="Update">
                    <a href="{{route('form')}}">Cancel</a>
                </div>

            </div>
        </div>	
    </form>
</section>
@endsection