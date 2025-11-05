<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lupa Password – Kinara Laundry</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="card shadow p-4" style="width: 350px;">
  <h3 class="text-center mb-4">Lupa Password</h3>

  <form action="proses_forgot.php" method="post">
    <div class="mb-3">
      <label class="form-label">Masukkan Email Anda</label>
      <input type="email" name="email" class="form-control" placeholder="contoh@email.com" required>
    </div>
    <button type="submit" class="btn btn-warning w-100">Kirim Permintaan Reset</button>
  </form>

  <div class="text-center mt-3">
    <a href="login.php" class="text-decoration-none">Kembali ke Login</a>
  </div>
</div>

</body>
</html>
