<?php
include "koneksi.php"; // koneksi ke database

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
$layanan = $_POST['layanan'];
$pesan = $_POST['pesan'];
$metode_pembayaran = $_POST['metode_pembayaran'];

$sql = "INSERT INTO pemesanan (nama, alamat, no_telepon, layanan, pesan, metode_pembayaran)
        VALUES ('$nama', '$alamat', '$no_telepon', '$layanan', '$pesan' , '$metode_pembayaran')";

if (mysqli_query($conn, $sql)) {
    echo "
    <script>
      alert('Terima kasih sudah memesan layanan di Kinara Laundry 💙');
      window.location.href = 'index.php'; // ganti ke nama landing page kamu
    </script>
    ";
} else {
    echo "
    <script>
      alert('Terjadi kesalahan saat menyimpan data 😢');
      window.history.back();
    </script>
    ";
}

mysqli_close($conn);
?>
