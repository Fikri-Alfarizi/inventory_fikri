

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tambah Jenis</title>
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
<div class="container">
        <h1>Tambah Data Parkir Fikri</h1>
                <form action="proses_tambah.php" method="POST">
            <div class="mb-3">
                <label class="form-label">ID Jenis</label>
                <input type="text" class="form-control" name="id_jenis" 
                    value="<?php echo isset($data['id_jenis']) ? $data['id_jenis'] : ''; ?>" id="exampleInputEmail">
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Jenis</label>
                <input type="text" class="form-control" name="nama_jenis" 
                    value="<?php echo isset($data['nama_jenis']) ? $data['nama_jenis'] : ''; ?>" id="exampleInputPassword">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
