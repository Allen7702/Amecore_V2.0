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
        <h4 class="card-title">Create a Service</h4>

        <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title_red">Title (Red)</label>
                <input type="text" name="title_red" id="title_red" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="title_white">Title (White)</label>
                <input type="text" name="title_white" id="title_white" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="summernote" class="form-control" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" required>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" name="show_button" id="show_button" class="form-check-input" value="1">
                <label for="show_button" class="form-check-label">Show Button</label>
            </div>

            <div class="form-group">
                <label for="button_text">Button Text</label>
                <input type="text" name="button_text" id="button_text" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Save Slider</button>
            <a href="{{ route('slider.index') }}" class="btn btn-secondary">Cancel</a>
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