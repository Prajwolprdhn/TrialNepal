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
            <div class="headlings4">
                <button class="btn" onclick="location.href='{{ url('/admin/asset_form') }}'"><i class="uil uil-plus"> Add Category</i></button>
            </div>
        
        <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th colspan="2" style="text-align: center">Action</th>
              </tr>
            </thead>
            <tbody>
              
              @foreach ($assets as $asset)
              <tr>
                <td>{{ $asset->id }}</td>
                <td>{{ $asset->name }}</td>
                <td><img src="{{url('/uploads/assets/'. $asset->asset_img)}}"></td>
                <form action="/admin/asset_management/{{$asset->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <td>
                    <button class="w3-button w3-border-red w3-hover-red">
                      Delete
                    </button>
                  </td>
                </form>
              </tr>
              @endforeach
            </tbody>
          </table>

        {{-- <div class="wrapper1">
            @foreach ($assets as $asset)
            <div class="card" onclick="location.href='{{ route('allasset',['category'=>$asset->name])}}'"> 
                <img src="{{url('/uploads/assets/'. $asset->asset_img)}}">
                <div class="info" >
                    <h1>{{ $asset->name }}</h1>
                </div>
            </div>
            @endforeach
        </div> --}}
      </div>
    </div>
  </section>
@endsection
