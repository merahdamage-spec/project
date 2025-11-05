<?php
session_start();
if (isset($_SESSION['admin_logged']) && $_SESSION['admin_logged'] === true) {
    header('Location: dashboard.php');
    exit;
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = $_POST['username'];
    $p = $_POST['password'];
    if ($u === 'admin' && $p === '12345') {
        $_SESSION['admin_logged'] = true;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = "❌ Username atau password salah.";
    }
}
?>
<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Admin - Kinara Laundry</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
  font-family: Poppins, sans-serif;
  background: linear-gradient(135deg, #1e3a8a, #2563eb);
  height: 100vh; display: flex; justify-content: center; align-items: center;
  color: #fff;
}
.card {
  background: rgba(255,255,255,0.1);
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
  width: 350px;
}
.btn-login {
  background: #fcd34d;
  color: #0f172a;
  font-weight: 600;
}
</style>
</head>
<body>
<div class="card p-4">
  <h4 class="text-center mb-3">Login Admin Kinara</h4>
  <?php if($error): ?>
    <div class="alert alert-danger text-center"><?= $error ?></div>
  <?php endif; ?>
  <form method="post">
    <div class="mb-3">
      <input name="username" class="form-control" placeholder="Username" required>
    </div>
    <div class="mb-3">
      <input name="password" type="password" class="form-control" placeholder="Password" required>
    </div>
    <button class="btn btn-login w-100">Masuk</button>
  </form>
  <div class="text-center mt-3">
    <a href="forgot_password.php" class="text-decoration-none">Lupa Password?</a>
  </div>
</div>
</div>
</body>
</html>
