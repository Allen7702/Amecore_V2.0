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
        <h4 class="card-title">Booking Section</h4>

        <form action="{{ route('bookingSection.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="section_title">Section Title</label>
                <input type="text" name="section_title"  class="form-control" >
            </div>

            <div class="form-group">
                <label for="section_subtitle">Section Subtitle</label>
                <input type="text" name="section_subtitle"  class="form-control" >
            </div>

            <div class="form-group">
                <label for="section_description">Section Description</label>
                <textarea name="section_description" id="summernote" class="form-control" rows="3" ></textarea>
            </div>

            <div class="form-group">
                <label for="icon_path">Icon Image</label>
                <input type="file" name="icon_path" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="icon_title">Icon Title</label>
                <input type="text" name="icon_title"  class="form-control" >
            </div>

            <div class="form-group">
                <label for="icon_description">Icon Description</label>
                <input type="text" name="icon_description"  id="summernote" class="form-control" >
            </div>

            <button type="submit" class="btn btn-primary">Save Section</button>
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