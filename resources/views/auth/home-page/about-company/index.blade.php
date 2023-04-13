@extends('layout.auth')


@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> About Section </h3>
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
        <h4 class="card-title">Section</h4>


        <table class="table table-striped" id="posts-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title Primary</th>
                    <th>Title Secondary</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody >
                @foreach ($aboutSections as $aboutSection)
                    <tr>
                        <td>{{ $aboutSection->id }}</td>
                        <td>{{ $aboutSection->title_primary}}</td>
                        <td>{{ $aboutSection->title_sec }}</td>
                        <td> {!! Str::limit( $aboutSection->description, 50, '...') !!}</td>
                        <td><img src="{{ asset('website/img/' . $aboutSection->image) }}" alt="aboutSection Image" style="height:70px;width:70px" ></td>
                        
                        <td>
                            <a href="{{ route('aboutSection.show', $aboutSection->id) }}" class="btn btn-sm btn-success inner">View</a>

                            <a href="{{ route('aboutSection.edit', $aboutSection->id) }}" class="btn btn-sm btn-primary inner">Edit</a>
                            <form action="{{ route('aboutSection.destroy', $aboutSection->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>



        
       

        </table>
        <a class="nav-link" href="{{route('aboutSection.create')}}">

        <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add New</button>
        </a>
      </div>
    </div>
  </div>
</div>
</div>


@endsection
