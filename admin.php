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
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<style>
body {
  font-family: 'Poppins', sans-serif;
  background: linear-gradient(135deg, #1e3a8a, #3b82f6, #60a5fa);
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background-attachment: fixed;
}
.card {
  background: rgba(255,255,255,0.15);
  backdrop-filter: blur(12px);
  border-radius: 20px;
  box-shadow: 0 8px 40px rgba(0,0,0,0.3);
  width: 380px;
  border: 1px solid rgba(255,255,255,0.3);
}
h4 {
  color: #fff;
  font-weight: 600;
}
.form-control {
  background: rgba(255,255,255,0.9);
  border: none;
  border-radius: 10px;
  padding: 12px 15px;
  font-size: 15px;
}
.form-control:focus {
  box-shadow: 0 0 8px #fcd34d;
}
.btn-login {
  background: #fcd34d;
  color: #1e293b;
  font-weight: 600;
  border-radius: 10px;
  transition: 0.3s;
}
.btn-login:hover {
  background: #fde68a;
  transform: scale(1.03);
}
a {
  color: #fcd34d;
  transition: 0.3s;
}
a:hover {
  color: #fff;
  text-decoration: underline;
}
.icon-box {
  background: #fcd34d;
  color: #1e293b;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 28px;
  margin: 0 auto 10px;
}
.alert {
  border-radius: 10px;
}
</style>
</head>
<body>
<div class="card p-4 text-center">
  <div class="icon-box mb-2"><i class="bi bi-person-lock"></i></div>
  <h4 class="mb-3">Login Admin Kinara</h4>
  <?php if($error): ?>
    <div class="alert alert-danger text-center py-2"><?= $error ?></div>
  <?php endif; ?>
  <form method="post">
    <div class="mb-3">
      <input name="username" class="form-control" placeholder="Username" required>
    </div>
    <div class="mb-3">
      <input name="password" type="password" class="form-control" placeholder="Password" required>
    </div>
    <button class="btn btn-login w-100 py-2">Masuk</button>
  </form>
  <div class="text-center mt-3">
    <a href="forgot_password.php" class="text-decoration-none"><i class="bi bi-question-circle"></i> Lupa Password?</a>
  </div>
</div>
</body>
</html>
