@extends('admin.layouts.app')

@section('content')
<section class="dashboard">
    @include('admin.layouts.top')

    <form action="{{route('store')}}" method="post">
        @csrf
        <div class="wrapper">
            <div class="title">
            New User
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>Name</label>
                    <input type="text" class="input" name="name" placeholder="username">
                </div>  
                    
                <div class="inputfield">
                    <label>Email Address</label>
                    <input type="text" class="input" autocomplete="off" name="email" placeholder="example@example.com">
                </div> 
                <div class="inputfield">
                    <label>Password</label>
                    <input type="password" class="input" autocomplete="off" name="password" placeholder="password">
                </div>  
                <div class="inputfield">
                    <label>Contact No.</label>
                    <input type="text" class="input" name="contact" placeholder="98-XXXXXXXX">
                </div> 
                    <div class="inputfield">
                    <label>Role</label>
                    <div class="custom_select">
                        <select name="role">
                        <option value="">Select</option>
                        <option value="admin" name="admin">Admin</option>
                        <option value="owner" name="owner">Owner</option>
                        <option value="user" name="user">User</option>

                        </select>
                    </div>
                </div> 
                {{-- <div class="inputfield">
                    <label>Status</label>
                        <input type="radio" id="html" name="fav_language" value="HTML">
                      <label for="html">Active</label><br>
                      <input type="radio" id="css" name="fav_language" value="CSS">
                      <label for="css">Inactive</label><br>
                </div>  --}}
                {{-- <div class="inputfield">
                    <label>Upload Image</label>
                    <input type="file" id="actual-btn" hidden>
                    <label class="imp" for="actual-btn">Select Image</label>
                </div>   --}}
                
                <!--<div class="inputfield terms">
                    <label class="check">
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <p>Agreed to terms and conditions</p>
                </div> -->
                <div class="inputfield">
                    <input type="submit" class="btn1" value="Submit">
                    <a href="{{route('form')}}">Cancel</a>
                </div>
                    
                
                
            </div>
        </div>	
    </form>
</section>
@endsection