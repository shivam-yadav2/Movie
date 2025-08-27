@extends('layout.admin')
@section('styles')
<style>
 .table thead th {
      font-weight: 700;
      background: #e9ecef;
      text-align: center;
    }

    .table tbody td {
      vertical-align: middle;
      text-align: center;
    }

    .action-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 35px;
      height: 35px;
      border-radius: 50%;
      color: #fff;
      font-size: 16px;
      border: none;
      transition: transform 0.2s, box-shadow 0.2s;
      cursor: pointer;
    }

    .action-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    .edit-btn { background-color: #28a745; }
    .delete-btn { background-color: #dc3545; }

    .add-btn {
      background-color: #0d6efd;
      color: #fff;
      padding: 0.5rem 1.2rem;
      border-radius: 0.5rem;
      font-weight: 600;
      transition: background-color 0.3s;
      margin-bottom: 1rem;
      display: inline-block;
    }
    .add-btn:hover { background-color: #0b5ed7; text-decoration: none; }

    img.short-image {
      border-radius: 8px;
      max-width: 100px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
  </style>
@endsection
@section('content')

<div class="container-fluid">
  <a href="{{ route('shorts.create') }}" class="add-btn"><i class="fas fa-plus"></i> Add Short</a>
  <div class="table-responsive">
    <table class="table table-bordered shadow-sm bg-white">
      <thead>
        <tr>
          <th>Heading</th>
          <th>Category</th>
          <th>URL</th>
          <th>Image</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($shorts as $short)
        <tr>
          <td>{{ $short->heading }}</td>
          <td>{{ $short->category }}</td>
          <td><a href="{{ $short->url }}" target="_blank">{{ $short->url }}</a></td>
          <td>
            @if($short->image)
              <img src="{{ asset($short->image) }}" alt="Short Image" class="short-image" width="50">
            @endif
          </td>
          <td>
            <a href="{{ route('shorts.edit', $short) }}" class="action-btn btn btn-primary btn-sm me-1" title="Edit">
              <i class="fas fa-edit"></i>
            </a>

            <!-- Delete button triggers modal -->
            <button type="button" class="action-btn delete-btn btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-form-id="delete-form-{{ $short->id }}" title="Delete">
              <i class="fas fa-trash"></i>
            </button>

            <!-- Hidden delete form -->
            <form id="delete-form-{{ $short->id }}" action="{{ route('shorts.destroy', $short) }}" method="POST" class="d-none">
              @csrf
              @method('DELETE')
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection
