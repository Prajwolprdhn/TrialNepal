@extends('admin.layouts.app')

@section('content')
<section class="dashboard">
    @include('admin.layouts.top')

    <div class="dash-content">
      <div class="overview">
        <div class="title">
          <i class="uil uil-tachometer-fast-alt"></i>
          <span class="text"><strong>Dashboard</strong></span>
        </div>

        <div class="boxes">
            @if (auth()->check() && auth()->user()->role == 'admin')
                <div class="box box1" style="margin-bottom: 20px;">
                    <i class="uil uil-user-plus"></i>
                    <span class="text">Total Owners</span>
                    <span class="number">50,120</span>
                </div>
                <div class="box box2"style="margin-bottom: 20px;">
                    <i class="uil uil-users-alt"></i>
                    <span class="text">Total Users</span>
                    <span class="number">50,120</span>
                </div>
                <div class="box box3" style="margin-bottom: 20px;">
                    <i class="uil uil-football"></i>
                    <span class="text">Total Futsals</span>
                    <span class="number">50,120</span>
                </div>
                <div class="box box1" style="margin-bottom: 20px;">
                    <i class="uil uil-football"></i>
                    <span class="text">Total Basketball Courts</span>
                    <span class="number">50,120</span>
                </div>
            @endif
          
            @if (auth()->check() && auth()->user()->role == 'owner')
                
             @endif
        </div>
      </div>
    </div>
  </section>
@endsection
