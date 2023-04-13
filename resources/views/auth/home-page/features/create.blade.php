@extends('layout.auth')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
          
     <div class="col-12 grid-margin stretch-card">
       <div class="card">
        <div class="card-body">
          <h4 class="card-title">Update Feature</h4>
          <p class="card-description"> Basic form elements </p>
        <h1>Add New Feature Section</h1>
        <form action="{{ route('featureSection.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="main_image">Main Image</label>
                <input type="file" name="main_image" id="main_image" class="form-control">
            </div>
            <div class="form-group">
                <label for="second_image">Second Image</label>
                <input type="file" name="second_image" id="second_image" class="form-control">
            </div>
            <div class="form-group">
                <label for="heading">Heading</label>
                <input type="text" name="heading" id="heading" class="form-control">
            </div>
            <div class="form-group">
                <label for="subheading">Subheading</label>
                <input type="text" name="subheading" id="subheading" class="form-control">
            </div>
            <div class="form-group">
                <label for="icon">Icon</label>
                <input type="file" name="icon" id="icon" class="form-control">
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add Feature Section</button>
        </form>
    </div>
</div>
</div>
</div>
</div>
@endsection
