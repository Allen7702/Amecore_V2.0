@extends('layout.auth')


@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Services </h3>
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
        @if(count($services)>0)
        <h4 class="card-title">Posts</h4>
        <table class="table table-striped" id="posts-table">
            <thead>
              <tr>
                <th> Image </th>
                <th> Title </th>
                <th> Description </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
              <tr>
                <td class="py-1">
                  <img src=" {{ $service->image}}" style="height:70px;width:70px" alt="image" />
                </td>
                <td>{{$service->title}}</td>
                <td>
                    {{ Str::limit($service->description, 30, '...') }}
                </td>
                <td id="outer">
                  <a class="btn btn-sm btn-success inner" href="{{ route('service.show', $service->id) }}">
                      <i class="fas fa-eye"></i>
                  </a>
                  <a class="btn btn-sm btn-primary inner" href="{{ url('services', $service->id). '/edit' }}">
                      <i class="fas fa-edit"></i>
                  </a>

              <form method="POST" class="d-inline"   action="{{ route('service.destroy', $service->id) }}">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </button>
              </form>
            </td>
                
              </tr>   
              @endforeach   
            </tbody>

        @else
        <h3 class="text-center text-danger">No posts found </h3>
        @endif

        </table>
        <a class="nav-link" href="{{route('service.create')}}">

        <button class="btn btn-block btn-lg btn-gradient-primary mt-4">+ Add New</button>
        </a>
      </div>
    </div>
  </div>
</div>
</div>


@endsection

