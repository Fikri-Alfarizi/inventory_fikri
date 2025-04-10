<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Inventory Colorful</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f2f4f8;
    }
    .navbar-custom {
      background: linear-gradient(45deg, #007bff, #6f42c1);
    }
    .card-custom {
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 0 15px rgba(0,0,0,0.05);
    }
    .btn-purple {
      background-color: #6f42c1;
      border-color: #6f42c1;
      color: #fff;
    }
    .btn-purple:hover {
      background-color: #5a34a4;
      border-color: #5a34a4;
    }
    .table-hover tbody tr:hover {
      background-color: #e9ecef;
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
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto fw-semibold">
        <li class="nav-item">
          <a class="nav-link active" href="#">Jenis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../barang/index.php">Barang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Konten -->
<div class="container my-5">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark">📦 Data Barang</h2>
    <a href="view_tambah.php" class="btn btn-purple">+ Tambah Barang</a>
  </div>

  <div class="card card-custom p-3">
    <div class="table-responsive">
      <table class="table table-hover align-middle">
          <thead class="table-primary text-center">
            <tr>
              <th>ID Jenis</th>
              <th>Nama Jenis</th>
              <th>Aksi</th>
            </tr>
          </thead>
        <tbody class="text-center">
        <?php
                include "../../config/koneksi.php";
                $query = mysqli_query($conn, "SELECT * FROM jenis");
                $no = 1;

                if (mysqli_num_rows($query) > 0) {
                    while ($result = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                            <td><?php echo $result['id_jenis']; ?></td>
                            <td><?php echo $result['nama_jenis']; ?></td>
                            <td>
                                <a href="view_hapus.php?id=<?php echo $result['id_jenis']; ?>" onclick="return confirm('Yakin?')"
                                 class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>Data siswa tidak ditemukan</td></tr>";
                }
                ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
