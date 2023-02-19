@extends('admin.layouts.app')

@section('content')
<section class="dashboard">
    @include('admin.layouts.top')

    <div class="dash-content">
      <div class="activity">
        <div class="title">
          <i class="uil uil-user"></i>
          <span class="text"><strong>
            @foreach ($clickValue as $asset)
            {{$asset->category}} Management
            @endforeach
        </strong></span>
        </div>

        <div class="headlings2">
          <button class="btn" onclick="location.href='{{ route('addasset') }}'"><i class="uil uil-plus">Add New</i></button> 
        </div>

        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Contact</th>
              <th>Location</th>
              <th>Image</th>
              <th colspan="2" style="text-align: center">Action</th>
            </tr>
          </thead>
          <tbody>
            
            @foreach ($clickValue as $asset)
            <tr>
              <td>{{ $asset->id }}</td>
              <td>{{ $asset->name }}</td>
              <td>{{ $asset->contact }}</td>
              <td>{{ $asset->location }}</td>
              <td><img src="{{url('/uploads/assets/specific_assets/'. $asset->asset_img)}}"></td>
              <form action="/admin/form/edit/{{$asset->id}}" method="get">
                @csrf
              <td><button id="green">Edit</button></td>
              </form>
              <form action="/admin/form/{{$asset->id}}" method="post">
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

      </div>
    </div>
    
  </section>
@endsection
