<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/login-register.css')}}" />
    
    <title>SignIn/SignUp</title>
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="/users" method="POST" autocomplete="off">
          @csrf
          <h1>Sign Up</h1>
          <!-- <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div> -->
          <!-- <span>or use your email for registration</span> -->
          <input type="name" name="name" placeholder="Name"/>
          @if ($errors->has('name'))
              <p class="text-danger">{{$errors->first('name')}}</p>
          @endif
          <input type="email" name="email" placeholder="Email"/>
          @if ($errors->has('email'))
              <p class="text-danger">{{$errors->first('email')}}</p>
          @endif
          <input type="password" name="password" placeholder="Password"/>
          @if ($errors->has('password'))
              <p class="text-danger">{{$errors->first('password')}}</p>
          @endif
          <input type="password" name="password_confirmation" placeholder="Confirm Password"/>
          <button>Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="/users/authenticate" method="POST" autocomplete="off">
          @csrf
          <h1>Sign in</h1>
          <!-- <div class="social-container">
            <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
            <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <span>or use your account</span> -->
          <input type="email" name="email" placeholder="Email"/>
          @if ($errors->has('email'))
                    <p class="text-danger">{{$errors->first('email')}}</p>
                @endif
          <input type="password" name="password" placeholder="Password"/>
          @if ($errors->has('password'))
                    <p class="text-danger">{{$errors->first('password')}}</p>
                @endif
          <a href="#">Forgot your password?</a>
          <button>Sign In</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>Welcome Back!</h1>
            <p>
              To keep connected with us please login with your personal info
            </p>
            <button class="ghost" id="signIn">Sign In</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>Hello, Friend!</h1>
            <p>Enter your personal details and start journey with us</p>
            <button class="ghost" id="signUp">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
<script>
  const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");

signUpButton.addEventListener("click", () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener("click", () => {
  container.classList.remove("right-panel-active");
});

</script>





{{-- 
@extends('user.layouts.app')
@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="card form-holder">
          <div class="card-body">
            <h1>Login</h1>

            @if (Session::has('error'))
                <p class="text-danger">{{Session::get('error')}}</p>
            @endif
            @if (Session::has('sucess'))
                <p class="text-sucess">{{Session::get('sucess')}}</p>
            @endif

            <form action="/users/authenticate" method="POST">
              @csrf
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email"/>
                @if ($errors->has('email'))
                    <p class="text-danger">{{$errors->first('email')}}</p>
                @endif
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password"/>
                @if ($errors->has('password'))
                    <p class="text-danger">{{$errors->first('password')}}</p>
                @endif
              </div>
              <div class="row">
                <div class="col-8 text-left">
                  <a href="#" class="btn btn-link">Forgot Password</a>
                </div>
                <div class="col-4 text-right">
                  <input type="submit" class="btn btn-primary" value="Login">
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

@endsection --}}