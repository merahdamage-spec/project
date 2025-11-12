<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulir Kinara Laundry</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  body {
    background: linear-gradient(135deg, #f0f4f8, #cfd9e6);
    font-family: 'Poppins', sans-serif;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .form-container {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(20px);
    padding: 40px;
    border-radius: 25px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    width: 100%;
    max-width: 500px;
    animation: fadeInUp 1s ease;
  }

  .form-container h2 {
    text-align: center;
    color: #1e3a8a;
    margin-bottom: 25px;
    font-weight: 700;
  }

  .form-container label {
    font-weight: 600;
    color: #1e293b;
  }

  .form-container input,
  .form-container select,
  .form-container textarea {
    border: none;
    border-radius: 12px;
    padding: 12px;
    margin-bottom: 15px;
    width: 100%;
    font-size: 1rem;
    background: rgba(255,255,255,0.9);
    transition: all 0.3s ease;
  }

  .form-container input:focus,
  .form-container select:focus,
  .form-container textarea:focus {
    outline: none;
    box-shadow: 0 0 8px #fcd34d;
  }

  .form-container input[type="submit"] {
    background: #fcd34d;
    color: #1e3a8a;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .form-container input[type="submit"]:hover {
    background: #fde68a;
    transform: scale(1.03);
  }

  #qris-container {
    display: none;
    text-align: center;
    margin-top: 15px;
  }

  #qris-container img {
    max-width: 200px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
  }

  @keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(30px); }
    100% { opacity: 1; transform: translateY(0); }
  }

</style>
</head>
<body>

<div class="form-container">
  <h2>Formulir Pesanan</h2>
  <form id="contactForm" action="simpan.php" method="post">
    <label>Nama:</label>
    <input type="text" name="nama" required>

    <label>Alamat:</label>
    <input type="text" name="alamat" required>

    <label>No Telepon:</label>
<input type="text" name="no_telepon"
       pattern="[0-9]{10,15}"
       maxlength="15"
       required
       placeholder="081234567890">


    <label>Layanan:</label>
   <select id="layanan" name="layanan" required>
  <option value="">-- Pilih Layanan --</option>
  <?php
    $conn = new mysqli("localhost", "root", "", "kinara_laundry");
    $result = $conn->query("SELECT * FROM layanan ORDER BY id_layanan ASC");
    $layananDipilih = isset($_GET['layanan']) ? $_GET['layanan'] : '';

    while($row = $result->fetch_assoc()):
      $selected = ($layananDipilih == $row['nama_layanan']) ? 'selected' : '';
      echo "<option value='{$row['nama_layanan']}' $selected>{$row['nama_layanan']} - Rp " . number_format($row['harga_layanan'], 0, ',', '.') . "/kg</option>";
    endwhile;
  ?>
</select>



    <label>Pesan:</label>
    <input type="text" id="pesan" name="pesan" required>

    <label>Metode Pembayaran:</label>
    <select id="metode_pembayaran" name="metode_pembayaran" required>
      <option value="">-- Pilih Metode --</option>
      <option value="QRIS">QRIS</option>
      <option value="Tunai">Tunai</option>
    </select>
    <div id="qris-container">
      <p class="fw-bold text-dark">Scan QRIS untuk pembayaran:</p>
      <img src="qris.jpg" alt="QRIS Kinara Laundry">
    </div>
<br>
    <input type="submit" value="Simpan">
  </form>
</div>

<script>
  // Tampilkan QRIS saat metode pembayaran dipilih
  document.getElementById("metode_pembayaran").addEventListener("change", function() {
    const qrisBox = document.getElementById("qris-container");
    qrisBox.style.display = (this.value === "QRIS") ? "block" : "none";
  });
</script>
<script>
  
</script>

</body>
</html>
