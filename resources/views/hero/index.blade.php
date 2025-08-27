@extends('layout.admin')

@section('content')

<div class = "container-fluid">
    <a href="{{ route('heroes.create') }}" class="btn btn-primary fw-semibold mb-3 d-inline-block px-4 py-2 rounded"><i class="fas fa-plus"></i>Add Hero</a>
  <div class="table-responsive">
    <table class="table table-bordered shadow-sm bg-white">
      <thead>
        <tr class = "fs-4 text-center">
          <th>Heading</th>
          <th>Subheading</th>
          <th>Image</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($heroes as $hero)
        <tr class = "fs-5 text-center">
          <td>{{ $hero->heading }}</td>
          <td>{{ $hero->subheading }}</td>
          <td>
            @if($hero->image)
              <img src="{{ asset($hero->image) }}" alt="Hero Image" width ="50">
            @endif
          </td>
          <td>
           <div class="d-flex gap-1 justify-content-center">
             <a href="{{ route('heroes.edit', $hero) }}" class="btn btn-success d-flex align-items-center justify-content-center rounded-circle p-0 me-1" title="Edit" style="width: 35px; height: 35px; font-size: 16px; transition: transform 0.2s, box-shadow 0.2s;">
              <i class="fas fa-edit"></i>
            </a>
            <!-- Delete button triggers modal -->
            <button type="button" class="btn btn-danger d-flex align-items-center justify-content-center rounded-circle p-0" data-bs-toggle="modal" data-bs-target="#deleteModal" data-form-id="delete-form-{{ $hero->id }}" title="Delete" style="width: 35px; height: 35px; font-size: 16px; transition: transform 0.2s, box-shadow 0.2s;">
              <i class="fas fa-trash"></i>
            </button>

            <!-- Hidden delete form -->
            <form id="delete-form-{{ $hero->id }}" action="{{ route('heroes.destroy', $hero) }}" method="POST" class="d-none">
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