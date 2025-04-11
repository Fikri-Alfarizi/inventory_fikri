<?php
include '../../config/koneksi.php';

$id_jenis = $_POST['id_jenis'];
$nama_jenis = $_POST['nama_jenis'];

$query = mysqli_query($conn, "UPDATE jenis SET nama_jenis='$nama_jenis' WHERE id_jenis='$id_jenis'");

if ($query) {
    echo "<script>alert('Data berhasil diperbarui');</script>";
    echo "<script>window.location.href='index.php';</script>";
} else {
    echo "<script>alert('Gagal memperbarui data');</script>";
    echo "<script>window.location.href='edit_jenis.php?id=$id_jenis';</script>";
}
?>
