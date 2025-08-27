@extends('layout.admin')

@section('content')
  <div class="card">
    <div class="mx-4 my-4">
       <h2>Edit Hero Slide</h2>
    </div>
    <form action="{{ route('heroes.update', $hero) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="mx-4 my-4 col-6">
        <label for="heading" class="form-label fs-4 fw-normal">Heading</label>
        <input type="text" name="heading" id="heading" value="{{ $hero->heading }}" class="form-control fs-5" required>
      </div>
      <div class="mx-4 my-4 col-6">
        <label for="subheading" class="form-label fs-4 fw-normal">Subheading</label>
        <input type="text" name="subheading" id="subheading" value="{{ $hero->subheading }}" class="form-control fs-5">
      </div>
      <div class="mx-4 my-4 col-6">
        <label for="image" class="form-label fs-4 fw-normal">Hero Image</label>
        <input type="file" name="image" id="image" class="form-control" accept="image/*">
        @if($hero->image)
          <img src="{{ asset($hero->image) }}" alt="Current Hero Image" width="100" class="current-image">
        @endif
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary  w-40 text-center fs-5">Update Hero Slide</button>
      </div>
    </form>
  </div>
@endsection
