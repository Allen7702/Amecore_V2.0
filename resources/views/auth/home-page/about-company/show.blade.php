@extends('layout.auth')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <h1>About Section Details</h1>
  
     <div class="col-12 grid-margin stretch-card">
       <div class="card">
        <div class="card-body">

        <div class="card">
            <div class="card-header">
                <h3> {{ $aboutSection->title_primary }} <span class="text-red">{{ $aboutSection->title_sec}}</span> </h3>
            </div>
            <div class="card-body">
                <p>Description:{{ $aboutSection->description }}</p>
               
                <img src="{{ asset('website/img/' . $aboutSection->image) }}" alt="{{ $aboutSection->title_primary}} {{ $aboutSection->title_secondary}}" class="img-fluid">
            </div>
        </div>

        <a href="{{ route('aboutSection.index') }}" class="btn btn-primary mt-3">Back to aboutSection List</a>
    </div>
</div>
</div>
</div>
</div>

@endsection