<?php
session_start();
if (!isset($_SESSION['admin_logged'])) { header('Location: login.php'); exit; }
require_once '../includes/db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM layanan WHERE id=$id");
$data = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD']==='POST') {
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $harga = $_POST['harga'];
  $stmt = $conn->prepare("UPDATE layanan SET nama=?, deskripsi=?, harga=? WHERE id=?");
  $stmt->bind_param("ssii", $nama, $deskripsi, $harga, $id);
  $stmt->execute();
  header("Location: index.php");
  exit;
}
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Edit Layanan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container">
  <h3 class="mb-3">Edit Layanan</h3>
  <form method="post">
    <input name="nama" value="<?= $data['nama'] ?>" class="form-control mb-2" required>
    <textarea name="deskripsi" class="form-control mb-2" required><?= $data['deskripsi'] ?></textarea>
    <input name="harga" type="number" value="<?= $data['harga'] ?>" class="form-control mb-3" required>
    <button class="btn btn-warning">Update</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>
