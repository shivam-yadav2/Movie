@extends('layout.admin')
@section('content')

<div class="short-form-card">
   <div class= "mx-4 my-4 ">
    <h2 class="fw-bold"> Edit Short</h2>
  </div>
  <form action="{{ route('shorts.update', $short->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mx-4 my-4 col-6">
      <label for="heading" class="form-label fs-4 fw-normal">Heading</label>
      <input type="text" name="heading" id="heading" class="form-control" value="{{ old('heading', $short->heading) }}" required>
    </div>

    <div class="mx-4 my-4 col-6">
      <label for="category" class="form-label fs-4 fw-normal">Category</label>
      <input type="text" name="category" id="category" class="form-control" value="{{ old('category', $short->category) }}">
      <small class="text-muted">Separate multiple categories with commas.</small>
    </div>

    <div class="mx-4 my-4 col-6">
      <label for="url" class="form-label fs-4 fw-normal">YouTube URL</label>
      <input type="url" name="url" id="url" class="form-control" value="{{ old('url', $short->url) }}" required>
    </div>

    <div class="mx-4 my-4 col-6">
      <label for="image" class="form-label fs-4 fw-normal">Thumbnail Image</label>
      <input type="file" name="image" id="image" class="form-control">
      @if($short->image)
        <img src="{{ asset($short->image) }}" alt="Current Image" class="preview-image">
      @endif
    </div>
    
    <button type="submit" class="btn btn-success w-100"><i class="fas fa-save me-2"></i> Update Short</button>
  </form>
</div>

@endsection
