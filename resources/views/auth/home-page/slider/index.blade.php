@extends('layout.auth')


@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Sliders </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">View</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Views</li>
          </ol>
        </nav>
      </div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
       
        {{-- <p class="card-description"> Add class <code>.table-striped</code>  </p>--}}
        <h4 class="card-title">Sliders</h4>


        <table class="table table-striped" id="posts-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title (Red)</th>
                    <th>Title (White)</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Show Button</th>
                    <th>Button Text</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody >
                @foreach ($sliders as $slider)
                    <tr>
                        <td>{{ $slider->id }}</td>
                        <td>{{ $slider->title_red }}</td>
                        <td>{{ $slider->title_white }}</td>
                        <td> {{ Str::limit( $slider->description, 50, '...') }}</td>
                        <td><img src="{{ asset($slider->image) }}" alt="Slider Image" style="height:70px;width:70px" ></td>
                        <td>{{ $slider->show_button ? 'Yes' : 'No' }}</td>
                        <td>{{ $slider->button_text }}</td>
                        <td>
                            <a href="{{ route('slider.show', $slider->id) }}" class="btn btn-sm btn-success inner">View</a>

                            <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-sm btn-primary inner">Edit</a>
                            <form action="{{ route('slider.destroy', $slider->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>



        
       

        </table>
        <a class="nav-link" href="{{route('slider.create')}}">

        <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add New</button>
        </a>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
