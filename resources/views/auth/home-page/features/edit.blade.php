@extends('layout.auth')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
        
   <div class="col-12 grid-margin stretch-card">
     <div class="card">
      <div class="card-body">
        <h4 class="card-title">Update Feature</h4>
        <p class="card-description"> Basic form elements </p>
        <form method="post" action="{{route('featureSection.update')}}" class="forms-sample" enctype="multipart/form-data">
          @csrf
          @method('PUT')

                 <input type="hidden" name="featureSection_id" value="{{ $featureSection->id }}">
            <div class="form-group">
                <label for="main_image">Main Image</label>
                <input type="file" name="main_image" value="{{$featureSection->main_image}}" id="main_image" class="form-control">
            </div>
            <div class="form-group">
                <label for="second_image">Second Image</label>
                <input type="file" name="second_image" value="{{$featureSection->second_image}}" id="second_image" class="form-control">
            </div>
            <div class="form-group">
                <label for="heading">Heading</label>
                <input type="text" name="heading" value="{{$featureSection->heading}}" id="heading" class="form-control">
            </div>
            <div class="form-group">
                <label for="subheading">Subheading</label>
                <input type="text" name="subheading" value="{{$featureSection->subheading}}" id="subheading" class="form-control">
            </div>
            <div class="form-group">
                <label for="icon">Icon</label>
                <input type="file" name="icon" id="icon" value="{{$featureSection->icon}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{$featureSection->title}}" class="form-control">
            </div>
            <input type="hidden" name="user_id" value="1">

            <button type="submit" class="btn btn-primary">Update</button>     
           </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
  $('#summernote').summernote();
});
    </script>
@endsection