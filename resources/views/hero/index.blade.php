<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hero Slides</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background: #f0f2f5;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 2rem;
    }

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

    .edit-btn {
      background-color: #28a745; /* green */
    }

    .delete-btn {
      background-color: #dc3545; /* red */
    }

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

    .add-btn:hover {
      background-color: #0b5ed7;
      text-decoration: none;
    }

    img.hero-image {
      border-radius: 8px;
      max-width: 100px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <a href="{{ route('heroes.create') }}" class="add-btn">Add Hero</a>

  <div class="table-responsive">
    <table class="table table-bordered shadow-sm bg-white">
      <thead>
        <tr>
          <th>Heading</th>
          <th>Subheading</th>
          <th>Image</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($heroes as $hero)
        <tr>
          <td>{{ $hero->heading }}</td>
          <td>{{ $hero->subheading }}</td>
          <td>
            @if($hero->image)
              <img src="{{ asset($hero->image) }}" alt="Hero Image" class="hero-image">
            @endif
          </td>
          <td>
            <a href="{{ route('heroes.edit', $hero) }}" class="action-btn edit-btn me-1" title="Edit">
              <i class="fas fa-edit"></i>
            </a>
            <!-- Delete button triggers modal -->
            <button type="button" class="action-btn delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-form-id="delete-form-{{ $hero->id }}" title="Delete">
              <i class="fas fa-trash"></i>
            </button>

            <!-- Hidden delete form -->
            <form id="delete-form-{{ $hero->id }}" action="{{ route('heroes.destroy', $hero) }}" method="POST" class="d-none">
              @csrf
              @method('DELETE')
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Delete Confirmation Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete this hero slide?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" id="confirmDeleteBtn" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    let deleteFormId;

    // When delete button is clicked, store the form ID
    const deleteModal = document.getElementById('deleteModal');
    deleteModal.addEventListener('show.bs.modal', function (event) {
      const button = event.relatedTarget;
      deleteFormId = button.getAttribute('data-form-id');
    });

    // When confirm delete in modal is clicked, submit the correct form
    document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
      if(deleteFormId) {
        document.getElementById(deleteFormId).submit();
      }
    });
  </script>
</body>
</html>
