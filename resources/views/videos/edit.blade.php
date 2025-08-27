@extends('layout.admin')

@section('content')

<div class="card">
  <div class="mx-4 my-4">
    <h2>Edit Video</h2>
  </div>
  <form action="{{ route('videos.update', $video->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mx-4 my-4 col-6">
      <label for="heading" class="form-label fs-4 fw-normal">Heading</label>
      <input type="text" name="heading" id="heading" class="form-control fs-5" value="{{ old('heading', $video->heading) }}" required>
    </div>

    <div class="mx-4 my-4 col-6">
      <label for="category" class="form-label fs-4 fw-normal">Category</label>
      <input type="text" name="category" id="category" class="form-control fs-5" value="{{ old('category', $video->category) }}">
      <small class="text-muted">Separate multiple categories with commas.</small>
    </div>

    <div class="mx-4 my-4 col-6">
      <label for="embed_code" class="form-label fs-4 fw-normal">Embed Code</label>
      <input type="text" name="embed_code" id="embed_code" class="form-control fs-5" value="{{ old('embed_code', $video->embed_code) }}">
    </div>

    <div class="mx-4 my-4 col-6">
      <label for="url" class="form-label fs-4 fw-normal">YouTube URL</label>
      <input type="url" name="url" id="url" class="form-control fs-5" value="{{ old('url', $video->url) }}" required>
    </div>

    <div class="mx-4 my-4 col-6">
      <label for="image" class="form-label fs-4 fw-normal">Thumbnail Image</label>
      <input type="file" name="image" id="image" class="form-control fs-5">
      @if($video->image)
        <img src="{{ asset($video->image) }}" alt="Current Image" class="preview-image mt-3"  width="100">
      @endif
    </div>

    <button type="submit" class="btn btn-success w-40 text-center fs-5"><i class="fas fa-save me-2"></i> Update Video</button>
  </form>
</div>

@endsection