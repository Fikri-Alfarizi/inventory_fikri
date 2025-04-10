

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tambah Barang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f6f9;
    }
    .navbar-custom {
      background: linear-gradient(45deg, #007bff, #6f42c1);
    }
    .card-custom {
      background-color: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    }
    .btn-purple {
      background-color: #6f42c1;
      border-color: #6f42c1;
      color: white;
    }
    .btn-purple:hover {
      background-color: #5a34a4;
      border-color: #5a34a4;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">✨ Inventory</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

<!-- Form Tambah Barang -->
<div class="container mt-5">
  <div class="card card-custom mx-auto" style="max-width: 600px;">
    <h3 class="mb-4 text-center text-dark">📝 Tambah Barang Baru</h3>
    <form action="proses_tambah.php" method="POST">
      <div class="mb-3">
        <label class="form-label">ID Barang</label>
        <input type="number" class="form-control" name="id_barang" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Nama Barang</label>
        <input type="text" class="form-control" name="nama_barang" required>
      </div>
      <div class="mb-3">
        <label class="form-label">ID Jenis</label>
        <input type="number" class="form-control" name="id_jenis" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="number" class="form-control" name="harga" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Stok</label>
        <input type="number" class="form-control" name="stok" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-purple">💾 Simpan</button>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
