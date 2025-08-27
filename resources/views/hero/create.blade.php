<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Hero Slide</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #e0eafc, #cfdef3);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .hero-form-card {
      background: #ffffff;
      padding: 2.5rem 2rem;
      border-radius: 16px;
      box-shadow: 0 12px 28px rgba(0,0,0,0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      width: 100%;
      max-width: 500px;
    }

    .hero-form-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 18px 40px rgba(0,0,0,0.25);
    }

    .hero-form-card h2 {
      margin-bottom: 2rem;
      text-align: center;
      font-weight: 800;
      color: #0d6efd;
      letter-spacing: 1px;
    }

    label.form-label {
      font-weight: 600;
      font-size: 1.1rem;
      color: #333;
    }

    .form-control {
      border-radius: 0.6rem;
      padding: 0.75rem 1rem;
      box-shadow: inset 0 2px 4px rgba(0,0,0,0.05);
      transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-control:focus {
      border-color: #0d6efd;
      box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }

    .btn-primary {
      border-radius: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.5px;
      transition: transform 0.2s, box-shadow 0.2s;
    }

    .btn-primary:hover {
      background-color: #0b5ed7;
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }
  </style>
</head>
<body>
  <div class="hero-form-card">
    <h2>Add Hero Slide</h2>
    <form action="{{ route('heroes.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-4">
        <label for="heading" class="form-label">Heading</label>
        <input type="text" name="heading" id="heading" class="form-control" placeholder="Enter heading" required>
      </div>
      <div class="mb-4">
        <label for="subheading" class="form-label">Subheading</label>
        <input type="text" name="subheading" id="subheading" class="form-control" placeholder="Enter subheading">
      </div>
      <div class="mb-5">
        <label for="image" class="form-label">Hero Image</label>
        <input type="file" name="image" id="image" class="form-control" accept="image/*">
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg shadow-sm">Save Hero Slide</button>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
