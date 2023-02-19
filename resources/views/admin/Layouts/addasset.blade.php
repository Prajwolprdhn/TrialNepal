@extends('admin.layouts.app')

@section('content')
<section class="dashboard">
    @include('admin.layouts.top')

    <form action="{{route('storeasset')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="wrapper">
            <div class="title">
            Add New Asset
            </div>
            <div class="form">
                <div class="inputfield">
                    <label>Name</label>
                    <input type="text" class="input" name="name" placeholder="Asset Name">
                </div>  
                <div class="inputfield">
                    <label>Contact</label>
                    <input type="text" class="input" name="contact" placeholder="Contact No">
                </div>  
                <div class="inputfield">
                    <label>Location</label>
                    <input type="text" class="input" name="location" placeholder="Location">
                </div>  
                <div class="inputfield">
                    <label>Category</label>
                    <div class="custom_select">
                        <select name="options">
                            @foreach ($options as $option)
                                <option value="{{ $option }}">{{ $option }}</option>
                            @endforeach
                        </select>
                    </div>
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