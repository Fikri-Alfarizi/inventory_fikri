<?php 
include '../../config/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_jenis = isset($_POST['id_jenis']) ? intval($_POST['id_jenis']) : null;
    $nama_jenis = isset($_POST['nama_jenis']) ? trim($_POST['nama_jenis']) : '';

    if ($id_jenis && $nama_jenis) {
        $query = mysqli_query($conn, "INSERT INTO jenis VALUES ('$id_jenis', '$nama_jenis')");

        if ($query) {
            echo "<script>alert('Data Berhasil Disimpan'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Gagal menyimpan ke database!'); window.location.href='tambah.php';</script>"; 
        }
    } else {
        echo "<script>alert('ID dan Nama Jenis tidak boleh kosong!'); window.location.href='tambah.php';</script>";
    }
} else {
    echo "<script>alert('Akses tidak valid!'); window.location.href='index.php';</script>";
}
