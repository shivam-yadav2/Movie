@extends('layout.admin')

@section('content')
  <div class="card">
   <div class="mx-4 my-4">
     <h2>Add Hero Slide</h2>
   </div>
    <form action="{{ route('heroes.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mx-4 my-4 col-6">
        <label for="heading" class="form-label fs-4 fw-normal">Heading</label>
        <input type="text" name="heading" id="heading" class="form-control fs-5" placeholder="Enter heading" required>
      </div>
      <div class="mx-4 my-4 col-6">
        <label for="subheading" class="form-label fs-4 fw-normal">Subheading</label>
        <input type="text" name="subheading" id="subheading" class="form-control fs-5" placeholder="Enter subheading">
      </div>
      <div class="mx-4 my-4 col-6">
        <label for="image" class="form-label fs-4 fw-normal">Hero Image</label>
        <input type="file" name="image" id="image" class="form-control fs-5" accept="image/*">
      </div>
      <div class="d-grid mx-4 my-4">
        <button type="submit" class="btn btn-primary waves-effect waves-light shadow-sm fs-5" style="width:150px; heigth:150px">Save </button>
      </div>
    </form>
  </div>
@endsection
