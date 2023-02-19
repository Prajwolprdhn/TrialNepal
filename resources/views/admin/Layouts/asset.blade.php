@extends('admin.layouts.app')

@section('content')
<section class="dashboard">
    @include('admin.layouts.top')

    <div class="dash-content">
      <div class="overview">
        <div class="title">
          <i class="uil uil-building"></i>
          <span class="text"><strong>Assets Management</strong></span>
        </div>
        
        <div class="headlings1">
            <button class="btn" onclick="location.href='{{ url('/admin/asset_form') }}'"><i class="uil uil-plus">Add Category</i></button>
        </div>

        <div class="wrapper1">
            @foreach ($assets as $asset)
            <div class="card" onclick="location.href='{{ route('allasset',['category'=>$asset->name])}}'"> 
                <img src="{{url('/uploads/assets/'. $asset->asset_img)}}">
                <div class="info" >
                    <h1>{{ $asset->name }}</h1>
                </div>
            </div>
            @endforeach
            {{-- <div class="card" onclick="location.href='{{ url('/admin/asset_form') }}'"> 
                <img src="{{url('/images/futsal.jpg')}}">
                <div class="info" >
                    <h1>Futsals</h1>
                </div>
            </div> --}}
            {{-- <div class="card"> 
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
            </div> --}}
        </div>
      </div>
    </div>
  </section>
@endsection
