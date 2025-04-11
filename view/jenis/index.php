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

    .table {
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 6px 24px rgba(162, 125, 255, 0.15);
  background-color: white;
}

.table thead {
  background-color: #d1b3ff;
  color: #4a148c;
  font-weight: 700;
  font-size: 16px;
}

.table tbody tr {
  transition: all 0.2s ease;
}

.table tbody tr:hover {
  background-color: #f3e5f5;
}

.table td, .table th {
  vertical-align: middle;
  font-size: 15px;
  padding: 12px;
}

.btn-warning.btn-sm {
  background-color: #ffd54f;
  color: #6a1b9a;
  font-weight: 600;
  border-radius: 10px;
}

.btn-danger.btn-sm {
  background-color: #f48fb1;
  color: white;
  font-weight: 600;
  border-radius: 10px;
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
    <a href="view_tambah.php" class="btn btn-purple"><i class="fa-solid fa-plus"></i> Tambah Barang</a>
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
                            <a href="view_edit.php?id=<?php echo $result['id_jenis']; ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                <a href="proses_hapus.php?id=<?php echo $result['id_jenis']; ?>" onclick="return confirm('Yakin?')"
                                 class="btn btn-danger btn-sm"><i class="fa-solid fa-minus"></i> Hapus</a>
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
