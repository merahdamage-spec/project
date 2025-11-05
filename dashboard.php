<?php
session_start();
if (!isset($_SESSION['admin_logged'])) {
    header('Location: admin.php');
    exit;
}

$conn = new mysqli("localhost", "root", "", "kinara_laundry");

// Tambah layanan baru
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama_layanan'];
    $harga = $_POST['harga_layanan'];
    $conn->query("INSERT INTO layanan (nama_layanan, harga_layanan) VALUES ('$nama', '$harga')");
    header('Location: dashboard.php');
    exit;
}

// Update harga layanan
if (isset($_POST['update'])) {
    $id = $_POST['id_layanan'];
    $harga = $_POST['harga_layanan'];
    $conn->query("UPDATE layanan SET harga_layanan='$harga' WHERE id_layanan='$id'");
    header('Location: dashboard.php');
    exit;
}

// Hapus layanan
if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $conn->query("DELETE FROM layanan WHERE id_layanan='$id'");
    header('Location: dashboard.php');
    exit;
}

$result = $conn->query("SELECT * FROM layanan ORDER BY id_layanan ASC");
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard Admin - Kinara Laundry</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { font-family: Poppins, sans-serif; background: #f8fafc; }
.navbar { background: #1e3a8a; color: white; }
.card { border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.1); }
.table thead { background: #1e3a8a; color: white; }
</style>
</head>
<body>
<nav class="navbar navbar-dark px-3 d-flex justify-content-between align-items-center">
  <div>
    <span class="navbar-brand mb-0 h1">Dashboard Admin</span>
  </div>
  <div>
    <a href="pemesanan.php" class="btn btn-light btn-sm me-2">Pemesanan</a>
    <a href="logout.php" class="btn btn-warning btn-sm">Logout</a>
  </div>
</nav>


<div class="container my-4">
  <h3 class="mb-4">Kelola Layanan & Harga</h3>

  <!-- TABEL LAYANAN -->
  <div class="card p-4 mb-4">
    <table class="table table-bordered align-middle text-center">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama Layanan</th>
          <th>Harga (Rp)</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?= $row['id_layanan']; ?></td>
          <td><?= htmlspecialchars($row['nama_layanan']); ?></td>
          <td>
            <form method="post" class="d-flex justify-content-center align-items-center gap-2">
              <input type="hidden" name="id_layanan" value="<?= $row['id_layanan']; ?>">
              <input type="number" name="harga_layanan" value="<?= $row['harga_layanan']; ?>" class="form-control w-50">
              <button type="submit" name="update" class="btn btn-primary btn-sm">💾 Simpan</button>
            </form>
          </td>
          <td>
            <a href="dashboard.php?hapus=<?= $row['id_layanan']; ?>" class="btn btn-danger btn-sm"
               onclick="return confirm('Yakin ingin menghapus layanan ini?')">🗑️ Hapus</a>
          </td>
        </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

  <!-- FORM TAMBAH LAYANAN -->
  <div class="card p-4">
    <h5 class="mb-3">Tambah Layanan Baru</h5>
    <form method="post" class="row g-3">
      <div class="col-md-5">
        <input type="text" name="nama_layanan" class="form-control" placeholder="Nama Layanan" required>
      </div>
      <div class="col-md-5">
        <input type="number" name="harga_layanan" class="form-control" placeholder="Harga (Rp)" required>
      </div>
      <div class="col-md-2">
        <button type="submit" name="tambah" class="btn btn-success w-100">➕ Tambah</button>
      </div>
    </form>
  </div>
</div>
</body>
</html>
