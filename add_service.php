<?php
session_start();
if (!isset($_SESSION['admin_logged'])) { header('Location: login.php'); exit; }
require_once '../includes/db.php';

if ($_SERVER['REQUEST_METHOD']==='POST') {
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $harga = $_POST['harga'];
  $stmt = $conn->prepare("INSERT INTO layanan (nama, deskripsi, harga) VALUES (?,?,?)");
  $stmt->bind_param("ssi", $nama, $deskripsi, $harga);
  $stmt->execute();
  header("Location: index.php");
  exit;
}
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Tambah Layanan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container">
  <h3 class="mb-3">Tambah Layanan</h3>
  <form method="post">
    <input name="nama" class="form-control mb-2" placeholder="Nama Layanan" required>
    <textarea name="deskripsi" class="form-control mb-2" placeholder="Deskripsi" required></textarea>
    <input name="harga" type="number" class="form-control mb-3" placeholder="Harga (Rp)" required>
    <button class="btn btn-success">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>
