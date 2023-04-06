@extends('layout.auth')


@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Post </h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Post</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Post</li>
          </ol>
        </nav>
      </div>
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
       
        {{-- <p class="card-description"> Add class <code>.table-striped</code>  </p>--}}
        @if(count($posts)>0)
        <h4 class="card-title">Posts</h4>
        <table class="table table-striped" id="posts-table">
            <thead>
              <tr>
                <th> Image </th>
                <th> Title </th>
                <th> Description </th>
                <th> category </th>
                <th>status </th>
                <th> Action </th>
              </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
              <tr>
                <td class="py-1">
                  <img src=" {{ $post->gallery->image}}"  alt="image" />
                </td>
                <td>{{$post->title}}</td>
                <td>
                    {{Str::limit($post->description, 30, '...')}}
                </td>
                <td>{{$post->category->name}} </td>
                <td>{{$post->is_published== 1 ? 'published' : 'Draft' }} </td>
                <td> 
                    <a href="" class="btn btn-sm btn-success"> <i class="fas fa-eye"></i> </a>
                    <a href="" class="btn btn-sm btn-info"> <i class="fas fa-edit"></i></a>
                    <a href="" class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i></a>

                    {{-- <a href="{{route('post.edit', $post->id)}}" class="btn btn-gradient-primary btn-rounded btn-icon"> --}}
                        {{-- <i class="ti-pencil-alt"></i> --}}
                      {{-- </a> --}}
                      {{-- <form action="{{route('post.destroy', $post->id)}}" method="post" class="d-inline-block"> --}}
                        {{-- @csrf --}}
                        {{-- @method('DELETE') --}}
                        {{-- <button type="submit" class="btn btn-gradient-danger btn-rounded btn-icon"> --}}
                          {{-- <i class="ti-trash"></i> --}}
                        </button>
                      </form>
                </td>
              </tr>   
              @endforeach   
            </tbody>

        @else
        <h3 class="text-center text-danger">No posts found </h3>
        @endif

        </table>
      </div>
    </div>
  </div>
</div>
</div>


@endsection

