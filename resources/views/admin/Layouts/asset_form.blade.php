@extends('admin.layouts.app')

@section('content')
<section class="dashboard">
    @include('admin.layouts.top')

    <div class="dash-content">
      <div class="activity">
        <div class="title">
          <i class="uil uil-user"></i>
          <span class="text"><strong>Manage Users</strong></span>
        </div>
  
        {{-- <div class="activity-data">
          <div class="data id">
            <span class="data-title">S.N</span>
            @foreach ($users as $user)
            <span class="data-list">{{ $user->id }}</span>
            @endforeach
            
          </div>
          <div class="data names">
            <span class="data-title">Name</span>
            @foreach ($users as $user)
            <span class="data-list">{{ $user->name }}</span>
            @endforeach
            
          </div>
          <div class="data email">
            <span class="data-title">Email</span>
            @foreach ($users as $user)
            <span class="data-list">{{ $user->email }}</span>
            @endforeach
          </div>
          <div class="data joined">
            <span class="data-title">Status</span>
            @foreach ($users as $user)
            <span class="data-list">{{ $user->status }}</span>
            @endforeach
          </div>
          <div class="data type">
            <span class="data-title">Roles</span>
            @foreach ($users as $user)
            <span class="data-list">{{ $user->role }}</span>
            @endforeach
          </div>
        </div> --}}

        <div class="headlings">
          <a href="{{route('admin_detail')}}"> Admin </a>
          <a href="{{route('owner_detail')}}"> Owners </a>
          <a href="{{route('user_detail')}}"> Users </a>
          <button class="btn" onclick="location.href='{{ url('/admin/addUser') }}'"><i class="uil uil-plus">Add User</i></button>
          
        </div>

        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Contact</th>
              <th>Roles</th>
              <th colspan="2" style="text-align: center">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->contact }}</td>
              <td>{{ $user->role }}</td>
              <form action="/admin/form/edit/{{$user->id}}" method="get">
                @csrf
              <td><button id="green">Edit</button></td>
              </form>
              <form action="/admin/form/{{$user->id}}" method="post">
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
            
            <!-- <tr >
              <td>05</td>
              <td>Salina</td>
              <td>Coding</td>
              <td>03-24-22</td>
              <td>9:00AM</td>
              <td>4:00PM</td>
              <td><button>Edit</button></td>
            </tr>
            <tr >
              <td>06</td>
              <td>Tara Smith</td>
              <td>Testing</td>
              <td>03-24-22</td>
              <td>9:00AM</td>
              <td>4:00PM</td>
              <td><button>Edit</button></td>
            </tr> -->
          </tbody>
        </table>

      </div>
    </div>
    
  </section>
@endsection
