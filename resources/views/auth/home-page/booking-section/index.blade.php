@extends('layout.auth')


@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h1 class="page-title"> Booking Section</h1>
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
       


        <table class="table table-striped" id="posts-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Section Title</th>
                    <th>Section Subtitle</th>
                    <th>Section Description</th>
                    <th>Icon Image</th>
                    <th>Icon Title</th>
                    <th>Icon Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody >
                @foreach ($bookingSections as $bookingSection)
                    <tr>
                        <td>{{ $bookingSection->id }}</td>
                        <td>{{ $bookingSection->section_title }}</td>
                        <td>{{ $bookingSection->section_subtitle }}</td>
                        <td> {{ Str::limit( $bookingSection->section_description, 50, '...') }}</td>
                        @if($bookingSection->icon_path)
                        <td><img src="{{ asset('website/icons/' . $bookingSection->icon_path) }}" alt="Slider Image" style="height:70px;width:70px" ></td>
                       @else
                       <td style="height:70px;width:70px"></td>
                       @endif
                        <td>{{ $bookingSection->icon_title  }}</td>
                        <td>{{ $bookingSection->icon_description }}</td>
                        <td>
                            <a href="{{ route('bookingSection.show', $bookingSection->id) }}" class="btn btn-sm btn-success inner">View</a>

                            <a href="{{ route('bookingSection.edit', $bookingSection->id) }}" class="btn btn-sm btn-primary inner">Edit</a>
                            <form action="{{ route('bookingSection.destroy', $bookingSection->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
        <a class="nav-link" href="{{route('bookingSection.create')}}">

        <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add New</button>
        </a>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
