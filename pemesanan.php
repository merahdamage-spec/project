<?php
session_start();
if (!isset($_SESSION['admin_logged'])) {
    header('Location: admin.php');
    exit;
}

$conn = new mysqli("localhost", "root", "", "kinara_laundry");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM pemesanan ORDER BY id DESC");
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Data Pemesanan - Kinara Laundry</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { font-family: Poppins, sans-serif; background: #f8fafc; }
.navbar { background: #1e3a8a; color: white; }
.card { border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.1); }
.table thead { background: #1e3a8a; color: white; }
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark px-3 d-flex justify-content-between align-items-center">
  <div>
    <span class="navbar-brand mb-0 h1">Dashboard Admin</span>
  </div>
  <div>
    <a href="dashboard.php" class="btn btn-light btn-sm me-2">Layanan</a>
    <a href="pemesanan.php" class="btn btn-light btn-sm me-2">Pemesanan</a>
    <a href="logout.php" class="btn btn-warning btn-sm">Logout</a>
  </div>
</nav>

<div class="container my-4">
  <h3 class="mb-4">Data Pemesanan Pelanggan</h3>

  <div class="card p-4">
    <table class="table table-bordered table-striped text-center align-middle">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>No. Telepon</th>
          <th>Layanan</th>
          <th>Pesan</th>
          <th>Metode Pembayaran</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($result->num_rows > 0): ?>
          <?php while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= $row['id']; ?></td>
            <td><?= htmlspecialchars($row['nama']); ?></td>
            <td><?= htmlspecialchars($row['alamat']); ?></td>
            <td><?= htmlspecialchars($row['no_telepon']); ?></td>
            <td><?= htmlspecialchars($row['layanan']); ?></td>
            <td><?= htmlspecialchars($row['pesan']); ?></td>
            <td><?= htmlspecialchars($row['metode_pembayaran']); ?></td>
          </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr><td colspan="7">Belum ada data pemesanan.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</div>
</body>
</html>
