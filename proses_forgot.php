<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Cek apakah email terdaftar
    // Misal: $result = $conn->query("SELECT * FROM users WHERE email='$email'");
    // kalau ada, kirim link reset (bisa ditambahkan PHPMailer nanti)

    echo "<script>
        alert('Permintaan reset password telah dikirim ke email Anda.');
        window.location.href='login.php';
    </script>";
}
?>
