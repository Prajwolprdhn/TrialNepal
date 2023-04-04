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
        <div class="headless">
            <div class="headlings3">
                <button class="btn" onclick="location.href='{{ url('/admin/asset_management') }}'">Manage Category</button>
            </div>
            <div class="headlings1">
                <button class="btn" onclick="location.href='{{ url('/admin/asset_form') }}'"><i class="uil uil-plus"> Add Category</i></button>
            </div>
            
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
        </div>
      </div>
    </div>
  </section>
@endsection
