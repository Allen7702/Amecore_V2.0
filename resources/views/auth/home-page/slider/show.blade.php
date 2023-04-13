@extends('layout.auth')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <h1>Slider Details</h1>
  
     <div class="col-12 grid-margin stretch-card">
       <div class="card">
        <div class="card-body">

        <div class="card">
            <div class="card-header">
                <h3><span class="text-red">{{ $slider->title_red }}</span> {{ $slider->title_white }} </h3>
            </div>
            <div class="card-body">
                <p>Description: {{ $slider->description }}</p>
                <p>Show Button: {{ $slider->show_button ? 'Yes' : 'No' }}</p>
                @if($slider->button_text)
                    <p>Button Text: {{ $slider->button_text }}</p>
                @endif
                <img src="{{ $slider->image }}" alt="{{ $slider->title_white }} {{ $slider->title_red }}" class="img-fluid">
            </div>
        </div>

        <a href="{{ route('slider.index') }}" class="btn btn-primary mt-3">Back to Slider List</a>
    </div>
</div>
</div>
</div>
</div>

@endsection