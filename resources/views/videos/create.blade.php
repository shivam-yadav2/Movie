@extends('layout.admin')

@section('content')

<div class="card">
    <div class= "mx-4 my-4 ">
      <h2>Add Videos</h2>
    </div>
  <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mx-4 my-4 col-6">
      <label for="heading" class="form-label fs-4 fw-normal">Heading</label>
      <input type="text" name="heading" id="heading" class="form-control fs-5" placeholder="Enter heading" required>
    </div>
    <div class="mx-4 my-4 col-6">
      <label for="category" class="form-label fs-4 fw-normal">Category</label>
      <input type="text" name="category" id="category" class="form-control fs-5" placeholder="Enter category">
    </div>
    <div class="mx-4 my-4 col-6">
      <label for="embed_code" class="form-label fs-4 fw-normal">Embed Code</label>
      <input type="text" name="embed_code" id="embed_code" class="form-control fs-5" placeholder="Enter embed_code">
    </div>
    <div class="mx-4 my-4 col-6">
      <label for="url" class="form-label fs-4 fw-normal">YouTube URL</label>
      <input type="url" name="url" id="url" class="form-control fs-5" placeholder="https://www.youtube.com/..." required>
    </div>
    <div class="mx-4 my-4 col-6">
      <label for="image" class="form-label fs-4 fw-normal">Thumbnail Image</label>
      <input type="file" name="image" id="image" class="form-control" accept="image/*">
    </div>
    <div class="d-grid mx-4 my-4">
      <button type="submit" class="btn btn-primary shadow-sm waves-effect waves-light w-40" style="width:150px; heigth:150px">Save Video</button>
    </div>
  </form>
</div>

@endsection
