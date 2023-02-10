@extends('admin.layouts.app')

@section('content')
<section class="dashboard">
    @include('admin.layouts.top')

    <div class="dash-content">
      <div class="overview">
        <div class="title">
          <i class="uil uil-tachometer-fast-alt"></i>
          <span class="text"><strong>Assets Management</strong></span>
        </div>

        <div class="wrapper1">
            <div class="card" onclick="location.href='{{ url('/admin/asset_form') }}'"> 
                <img src="{{url('/images/futsal.jpg')}}">
                <div class="info" >
                    <h1>Futsals</h1>
                </div>
            </div>
            <div class="card"> 
                <img src="{{url('/images/basketball.png')}}">
                <div class="info" >
                    <h1>Basketball</h1>
                </div>
            </div>
            <div class="card"> 
                <img src="{{url('/images/badminton.jpg')}}">
                <div class="info" >
                    <h1>Badminton</h1>
                </div>
            </div>
            <div class="card"> 
                <img src="{{url('/images/swimming.jpg')}}">
                <div class="info" >
                    <h1>Swimming</h1>
                </div>
            </div>
            <div class="card"> 
                <img src="{{url('/images/archery.jpg')}}">
                <div class="info" >
                    <h1>Archery</h1>
                </div>
            </div>
            <div class="card"> 
                <img src="{{url('/images/volleyball.jpg')}}">
                <div class="info" >
                    <h1>Volleyball</h1>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
@endsection
