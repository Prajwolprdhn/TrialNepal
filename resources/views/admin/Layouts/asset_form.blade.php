@extends('admin.layouts.app')

@section('content')
<section class="dashboard">
    @include('admin.layouts.top')

    <form action="{{route('asset_store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="wrapper">
            <div class="title">
            New Asset Category
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>Name</label>
                    <input type="text" class="input" name="name" placeholder="Asset Name">
                </div>  
                    
                <div class="inputfield">
                    <label>Asset Image</label>
                    <input type="file" name="asset_img" id="actual-btn" >
                    {{-- <label class="imp" for="actual-btn">Select Image</label> --}}
                </div> 
                <div class="inputfield">
                    <input type="submit" class="btn1" value="Submit">
                    <a href="{{route('asset')}}">Cancel</a>
                </div>
                    
            </div>
        </div>	
    </form>
</section>
@endsection