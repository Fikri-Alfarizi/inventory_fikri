<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Inventory Ungu Imut</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #f8f0ff, #f3e5f5);
      font-family: 'Poppins', sans-serif;
      font-size: 16px;
      color: #4a148c;
    }

    .navbar-custom {
      background: linear-gradient(45deg, #a48bd4, #b388ff);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand,
    .nav-link {
      color: white !important;
      font-weight: 600;
      font-size: 18px;
    }

    .nav-link.active {
      color: #ffe0f0 !important;
    }

    .card-custom {
      background-color: #ffffff;
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(162, 125, 255, 0.2);
      border: none;
    }

    h2 {
      color: #6a1b9a;
      font-weight: 700;
      font-size: 26px;
    }

    .btn-purple {
      background-color: #a678f8;
      color: white;
      font-weight: 600;
      border-radius: 12px;
      border: none;
      transition: 0.3s ease;
    }

    .btn-purple:hover {
      background-color: #8e5ce1;
    }

    .btn-warning {
      background-color: #ffd54f;
      color: #4a148c;
      border-radius: 10px;
      border: none;
    }

    .btn-danger {
      background-color: #e57373;
      color: white;
      border-radius: 10px;
      border: none;
    }

    .btn-sm {
      font-size: 14px;
      padding: 5px 12px;
    }

    .table thead {
      background-color: #e1bee7;
      color: #4a148c;
      font-weight: 600;
    }

    .table-hover tbody tr:hover {
      background-color: #f3e5f5;
    }

    .footer {
      text-align: center;
      color: #a78bdc;
      font-size: 14px;
      margin-top: 50px;
    }

    .card-custom h3 {
  color: #6a1b9a;
  font-weight: 600;
  font-size: 22px;
}

.form-label {
  font-weight: 500;
  color: #6a1b9a;
}

.form-control {
  border-radius: 12px;
  border: 1px solid #d1c4e9;
  padding: 10px 14px;
  font-size: 15px;
}

.form-control:focus {
  border-color: #a678f8;
  box-shadow: 0 0 0 0.2rem rgba(166, 120, 248, 0.25);
}

.btn-purple {
  background-color: #a678f8;
  color: white;
  font-weight: 600;
  border-radius: 12px;
  padding: 10px;
  font-size: 16px;
}

.btn-purple:hover {
  background-color: #8e5ce1;
}

.card-custom {
  background-color: #ffffff;
  border-radius: 20px;
  padding: 30px;
  box-shadow: 0 8px 30px rgba(162, 125, 255, 0.2);
  border: none;
}

.card-custom h3 {
  font-weight: 700;
  color: #6a1b9a;
  font-size: 24px;
}

.form-label {
  font-weight: 600;
  color: #6a1b9a;
}

.form-control {
  border-radius: 12px;
  border: 2px solid #e1bee7;
  transition: all 0.3s ease;
  font-size: 15px;
}

.form-control:focus {
  border-color: #a678f8;
  box-shadow: 0 0 8px rgba(166, 120, 248, 0.3);
}

.btn-purple {
  background-color: #a678f8;
  color: white;
  font-weight: 600;
  font-size: 16px;
  border-radius: 12px;
  padding: 10px;
  transition: 0.3s ease;
  border: none;
}

.btn-purple:hover {
  background-color: #8e5ce1;
}


  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">✨ Inventory</a>
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
