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
        <form class="forms-sample">
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
          </div>
          <div class="form-group">
            <label for="exampleSelectGender">Category
            </label>
            <select class="form-control" name="category" id="exampleSelectGender">
              @if(count($categories)>0)
              @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              @endif
            </select>
          </div>
          <div class="form-group">
            <label>File upload </label>
            <input type="file" name="file" class="form-control ">
          </div>
          
          <div class="form-group">
            <label for="exampleInputCity1">City</label>
            <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
          </div>
          <div class="form-group">
            <label for="exampleTextarea1">Description</label>
            <textarea class="form-control" id="summernote" name="description" rows="4" cols="36"></textarea>
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