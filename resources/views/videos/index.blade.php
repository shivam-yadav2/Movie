@extends('layout.admin')
@section('content')

<div class="container-fluid">
  <a href="{{ route('videos.create') }}" class="add-btn"><i class="fas fa-plus"></i> Add Video</a>

  <div class="table-responsive">
    <table class="table table-bordered shadow-sm bg-white">
      <thead>
        <tr class = "fs-4 text-center">
          <th>Heading</th>
          <th>Category</th>
          <th>Embed Code</th>
          <th>URL</th>
          <th>Image</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($videos as $video)
        <tr class="fs-5 text-center">
          <td>{{ $video->heading }}</td>
          <td>{{ $video->category }}</td>
          <td>{{ $video->embed_code }}</td>
          <td><a href="{{$video->url }}" target="_blank">{{ $video->url }}</a></td>
          <td>
            @if($video->image)
              <img src="{{ asset($video->image) }}" alt="Video Image" class="video-image">
            @endif
          </td>
          <td>
            <div class="d-flex gap-1 justify-content-center">
              <a href="{{ route('videos.edit', $video) }}" class=" btn btn-success d-flex align-items-center justify-content-center rounded-circle p-0 me-1" title="Edit" style="width: 35px; height: 35px; font-size: 16px; transition: transform 0.2s, box-shadow 0.2s;">
                <i class="fas fa-edit"></i>
              </a>

              <!-- Delete button triggers modal -->
              <button type="button" class="btn btn-danger d-flex align-items-center justify-content-center rounded-circle p-0" data-bs-toggle="modal" data-bs-target="#deleteModal" data-form-id="delete-form-{{ $video->id }}" title="Delete" style="width: 35px; height: 35px; font-size: 16px; transition: transform 0.2s, box-shadow 0.2s;">
                <i class="fas fa-trash"></i>
              </button>

             <!-- Hidden delete form -->
              <form id="delete-form-{{ $video->id }}" action="{{ route('videos.destroy', $video) }}" method="POST" class="d-none">
                @csrf
                @method('DELETE')
               </form>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>


@endsection
