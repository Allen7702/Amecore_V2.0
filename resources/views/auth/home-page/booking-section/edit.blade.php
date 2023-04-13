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
        <h4 class="card-title">Edit Section</h4>


        <form action="{{ route('bookingSection.update', $bookingSection->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="section_title">Section Title</label>
                <input type="text" name="section_title" value="{{ $bookingSection->section_title }}" class="form-control" >
            </div>

            <div class="form-group">
                <label for="section_subtitle">Section Subtitle</label>
                <input type="text" name="section_subtitle" value="{{ $bookingSection->section_subtitle }}" class="form-control" >
            </div>

            <div class="form-group">
                <label for="section_description">Section Description</label>
                <textarea name="section_description" id="summernote"  class="form-control" rows="3" >{{ $bookingSection->section_description }}</textarea>
            </div>

            <div class="form-group">
                <label for="icon_path">Icon Image</label>
                <input type="file" name="icon_path"  class="form-control" value="sushi" >
                <small>Current image: {{ $bookingSection->icon_path }}</small>

            </div>

            <div class="form-group">
                <label for="icon_title">Icon Title</label>
                <input type="text" name="icon_title" value="{{ $bookingSection->icon_title }}" class="form-control" >
            </div>

            <div class="form-group">
                <label for="icon_description">Icon Description</label>
                <input type="text" name="icon_description" value="{{ $bookingSection->icon_description }}"  class="form-control" >
            </div>

            <button type="submit" class="btn btn-primary">Update Section</button>
            <a href="{{ route('bookingSection.index') }}" class="btn btn-secondary">Cancel</a>

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