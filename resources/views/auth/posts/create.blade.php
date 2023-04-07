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
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>
        <form method="post" action="{{route('post.store')}}" class="forms-sample" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <label for="exampleInputName1">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Name" value="{{old('title')}}">
          </div>
        
          <div class="mb-3">
            <label class="form-label">Published</label>
            <select name="is_publish" class="form-control">
                <option selected disabled>Choose Status</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        
          <div class="form-group">
            <label for="exampleSelectGender">Category
            </label>
            <select class="form-control" name="category" id="exampleSelectGender">
              @if(count($categories)>0)
              @foreach($categories as $category)
                <option @selected(old('category') == $category->id ) value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              @endif
            </select>
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image"  class="form-control-file" required>
        </div>
          
          <div class="form-group">
            <label for="exampleTextarea1">Description</label>
            <textarea class="form-control" id="summernote" name="description" rows="4" cols="36"> {{old('description')}}</textarea>
          </div>
          <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
          <button class="btn btn-light">Cancel</button>
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