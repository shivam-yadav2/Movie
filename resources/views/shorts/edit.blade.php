<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit YouTube Short</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background: #f0f2f5;
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 2rem 0;
    }
    .short-form-card {
      background: #ffffff;
      padding: 2rem 1.5rem;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 450px;
    }
    .short-form-card h2 {
      margin-bottom: 1.5rem;
      text-align: center;
      font-weight: 700;
      color: #198754;
      font-size: 1.8rem;
    }
    .form-control:focus {
      border-color: #198754;
      box-shadow: 0 0 0 0.2rem rgba(25,135,84,0.25);
    }
    .btn-success:hover { background-color: #146c43; }
    img.preview-image {
      max-width: 150px;
      border-radius: 8px;
      display: block;
      margin-top: 10px;
    }
    .form-label {
      font-weight: 500;
    }
  </style>
</head>
<body>

<div class="short-form-card">
  <h2>Edit Short</h2>
  <form action="{{ route('shorts.update', $short->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="heading" class="form-label">Heading</label>
      <input type="text" name="heading" id="heading" class="form-control" value="{{ old('heading', $short->heading) }}" required>
    </div>

    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <input type="text" name="category" id="category" class="form-control" value="{{ old('category', $short->category) }}">
      <small class="text-muted">Separate multiple categories with commas.</small>
    </div>

    <div class="mb-3">
      <label for="url" class="form-label">YouTube URL</label>
      <input type="url" name="url" id="url" class="form-control" value="{{ old('url', $short->url) }}" required>
    </div>

    <div class="mb-3">
      <label for="image" class="form-label">Thumbnail Image</label>
      <input type="file" name="image" id="image" class="form-control">
      @if($short->image)
        <img src="{{ asset($short->image) }}" alt="Current Image" class="preview-image">
      @endif
    </div>

    <button type="submit" class="btn btn-success w-100"><i class="fas fa-save me-2"></i> Update Short</button>
  </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
