@extends('admin.layouts.app')

@section('content')
<section class="dashboard">
    @include('admin.layouts.top')

    <form action="{{ route('assetupdate',['asset_id'=>$asset->id])}}" method="post">
        @csrf
        @method('put')
        <div class="wrapper">
            <div class="title">
            Edit User
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>Name</label>
                    <input type="text" class="input" name="name" value="{{$asset->name}}">
                </div>  
                    
                <div class="inputfield">
                    <label>Location</label>
                    <input type="text" class="input" autocomplete="off" name="location" value="{{$asset->location}}">
                </div> 
                <div class="inputfield">
                    <label>Contact No.</label>
                    <input type="text" class="input" name="contact" placeholder="98-XXXXXXXX" value="{{$asset->contact}}">
                </div> 
                </div> 
                <div class="inputfield">
                    <input type="submit" class="btn1" value="Update">
                    <a href="{{route('assetedit')}}">Cancel</a>
                </div>

            </div>
        </div>	
    </form>
</section>
@endsection

{{-- @dd($asset) --}}