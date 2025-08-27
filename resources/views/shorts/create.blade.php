@extends('layout.admin')
@section('content')

<div class="card">
  <div class= "mx-4 my-4 ">
    <h2 class="fw-bold">Add YouTube Short</h2>
  </div>
  <form action="{{ route('shorts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mx-4 my-4 col-6">
      <label for="heading" class="form-label fs-4 fw-normal">Heading</label>
      <input type="text" name="heading" id="heading" class="form-control fs-5" placeholder="Enter heading" required>
    </div>
     <!-- <div>
        <label for="labelInput" class="form-label">Input with Label</label>
        <input type="password" class="form-control" id="labelInput">
      </div> -->
    <div class="mx-4 my-4 col-6">
      <label for="category" class="form-label fw-normal fs-4">Category</label>
      <input type="text" name="category" id="category" class="form-control fs-5" placeholder="Enter category">
    </div>
    <div class="mx-4 my-4 col-6">
      <label for="url" class="form-label fw-normal fs-4">YouTube URL</label>
      <input type="url" name="url" id="url" class="form-control fs-5" placeholder="https://www.youtube.com/..." required>
    </div>
    <div class="mx-4 my-4 col-6">
      <label for="image" class="form-label fw-normal fs-4">Thumbnail Image</label>
      <input type="file" name="image" id="image" class="form-control" accept="image/*">
    </div>
    <div class="d-grid mx-4 my-4 ">
      <!-- <button type="submit" class="btn btn-primary btn-lg shadow-sm">Save Short</button> -->
       <button type="submit" class="btn btn-secondary waves-effect waves-light shadow-sm fs-5" style="width:150px; heigth:150px">Save </button>
    </div>
  </form>
</div>
@endsection
