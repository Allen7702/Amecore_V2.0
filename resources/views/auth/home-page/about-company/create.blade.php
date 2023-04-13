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
        <h4 class="card-title">About Sectio</h4>

        <form action="{{ route('aboutSection.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title_primary">Title Primary</label>
                <input type="text" name="title_primary" class="form-control" >
            </div>

            <div class="form-group">
                <label for="title_white">Title Secondary</label>
                <input type="text" name="title_secondary" id="title_white" class="form-control" >
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="summernote" class="form-control" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control" >
            </div>


            <button type="submit" class="btn btn-primary">Save Section</button>
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