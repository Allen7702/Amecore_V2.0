@extends('layout.auth')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <h1>Booking Details</h1>
  
     <div class="col-12 grid-margin stretch-card">
       <div class="card">
        <div class="card-body">

        <div class="card">
            <div class="card-header">
                <h3>{{ $bookingSection->section_title }}</h3> 
                <h1> {{ $bookingSection->section_subtitle }}</h1>
            </div>
            <div class="card-body">
                <p>Description: {{ $bookingSection->section_description }}</p>
                <h3>Icon TItle: {{ $bookingSection->icon_title}}</h3>
                <p>Icon Description: {{ $bookingSection->icon_description}}</p>

             
                <img src="{{ asset('website/icons/' . $bookingSection->icon_path)}}" alt="{{ $bookingSection->icon_title }} " class="img-fluid">
            </div>
        </div>

        <a href="{{ route('bookingSection.index') }}" class="btn btn-primary mt-3">Back to Booking List</a>
    </div>
</div>
</div>
</div>
</div>

@endsection