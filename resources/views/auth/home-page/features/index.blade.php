@extends('layout.auth')


@section('content')
<div class="container">
    <h1>Feature Sections</h1>
    <a href="{{ route('featureSection.create') }}" class="btn btn-primary">Add New Feature Section</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Main Image</th>
                <th>Second Image</th>
                <th>Heading</th>
                <th>Subheading</th>
                <th>Icon</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($featureSections as $featureSection)
                <tr>
                    <td>{{ $featureSection->id }}</td>
                    <td class="py-1">
                        <img src=" {{ asset ('website/img/'$featureSection->main_image)}}" style="height:70px;width:70px" alt="image" />
                      </td>
                      <td class="py-1">
                        <img src=" {{ $featureSection->second_image}}" style="height:70px;width:70px" alt="image" />
                      </td>
                    <td>{{ $featureSection->heading }}</td>
                    <td>{{ $featureSection->subheading }}</td>
                    <td class="py-1">
                        <img src=" {{ $featureSection->icon}}" style="height:70px;width:70px" alt="image" />
                      </td>
                    <td>{{ $featureSection->title }}</td>
                    <td>
                        <a href="{{ route('featureSection.edit', $featureSection->id) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route('featureSection.destroy', $featureSection->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

