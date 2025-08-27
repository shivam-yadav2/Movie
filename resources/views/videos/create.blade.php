<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add YouTube Video</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    body {
      background: #f0f2f5;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .video-form-card {
      background: #ffffff;
      padding: 2rem;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      width: 100%;
      max-width: 500px;
    }
    .video-form-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }
    .video-form-card h2 {
      margin-bottom: 1.5rem;
      text-align: center;
      font-weight: 700;
      color: #0d6efd;
    }
    .form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.2rem rgba(13,110,253,0.25);
    }
    .btn-primary:hover { background-color: #0b5ed7; }
  </style>
</head>
<body>

<div class="video-form-card">
  <h2>Add Videos</h2>
  <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="heading" class="form-label fw-bold">Heading</label>
      <input type="text" name="heading" id="heading" class="form-control" placeholder="Enter heading" required>
    </div>
    <div class="mb-3">
      <label for="category" class="form-label fw-bold">Category</label>
      <input type="text" name="category" id="category" class="form-control" placeholder="Enter category">
    </div>
    <div class="mb-3">
      <label for="embed_code" class="form-label fw-bold">Embed Code</label>
      <input type="text" name="embed_code" id="embed_code" class="form-control" placeholder="Enter embed_code">
    </div>
    <div class="mb-3">
      <label for="url" class="form-label fw-bold">YouTube URL</label>
      <input type="url" name="url" id="url" class="form-control" placeholder="https://www.youtube.com/..." required>
    </div>
    <div class="mb-4">
      <label for="image" class="form-label fw-bold">Thumbnail Image</label>
      <input type="file" name="image" id="image" class="form-control" accept="image/*">
    </div>
    <div class="d-grid">
      <button type="submit" class="btn btn-primary btn-lg shadow-sm">Save Video</button>
    </div>
  </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
