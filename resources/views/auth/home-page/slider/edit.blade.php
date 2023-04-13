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
        <h4 class="card-title">Edit Slider</h4>


        <form action="{{ route('slider.update', $slider->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
            <div class="form-group">
                <label for="title_white">Title White</label>
                <input type="text" class="form-control" id="title_white" name="title_white" value="{{ $slider->title_white }}" required>
            </div>
    
            <div class="form-group">
                <label for="title_red">Title Red</label>
                <input type="text" class="form-control" id="title_red" name="title_red" value="{{ $slider->title_red }}" required>
            </div>
    
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="summernote" name="description" rows="4" required>{{ $slider->description }}</textarea>
            </div>
    
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                <small>Current image: {{ $slider->image }}</small>
            </div>
    
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="show_button" name="show_button" {{ $slider->show_button ? 'checked' : '' }}>
                <label class="form-check-label" for="show_button">Show Button</label>
            </div>
    
            <div class="form-group">
                <label for="button_text">Button Text</label>
                <input type="text" class="form-control" id="button_text" name="button_text" value="{{ $slider->button_text }}">
            </div>
    
            <button type="submit" class="btn btn-primary">Update Slider</button>
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