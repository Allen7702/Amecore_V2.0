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
        <h4 class="card-title">Edit About Section</h4>


        <form action="{{ route('aboutSection.update', $aboutSection->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
            <div class="form-group">
                <label for="title_white">Title Primary</label>
                <input type="text" class="form-control" id="title_primary" name="title_primary" value="{{ $aboutSection->title_primary}}" >
            </div>
    
            <div class="form-group">
                <label for="title_red">Title secondary</label>
                <input type="text" class="form-control" id="title_sec" name="title_sec" value="{{ $aboutSection->title_sec }}" >
            </div>
    
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="summernote" name="description" rows="4" required>{{ $aboutSection->description }}</textarea>
            </div>
    
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                <small>Current image: {{ $aboutSection->image }}</small>
            </div>
    
           
    
            <button type="submit" class="btn btn-primary">Update Section</button>
            <a href="{{ route('aboutSection.index') }}" class="btn btn-secondary">Cancel</a>

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