<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Kinara Laundry – Layanan Premium Laundry Anda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

    body {
      font-family: "Poppins", sans-serif;
      background: #f8fafc;
      color: #1e293b;
      scroll-behavior: smooth;
    }

    /* Navbar */
    .navbar {
      background: linear-gradient(90deg, #0f172a, #2563eb);
      box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }
    .navbar-brand {
      color: #fcd34d !important;
      font-weight: 700;
      letter-spacing: 0.5px;
    }
      /* --- Efek Zoom pada Tulisan Navbar --- */
    .nav-link {
      transition: transform 0.3s ease, color 0.3s ease;
      color: #2563eb
    }

    .nav-link:hover {
      transform: scale(1.08);
      color: #e0f2e0;
    }

    .nav-link:active {
      transform: scale(0.7);
      color: #e0f2e0
    }

    /* Header */
    header {
      background: linear-gradient(135deg, #1e3a8a, #2563eb);
      color: white;
      text-align: center;
      padding: 120px 0;
      position: relative;
      overflow: hidden;
    }
    header::after {
      content: "";
      position: absolute;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.15), transparent 70%);
      top: -50%;
      left: -50%;
      animation: moveGlow 10s infinite linear;
    }
    @keyframes moveGlow {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    header h1 {
      font-weight: 700;
      font-size: 3rem;
      color: #fcd34d;
      animation: fadeInDown 1.5s ease;
    }
    header p {
      font-size: 1.2rem;
      color: #e0f2fe;
      animation: fadeInUp 2s ease;
    }

    @keyframes fadeInDown {
      0% { opacity: 0; transform: translateY(-40px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(40px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    /* Section Title */
    h2.section-title {
      font-weight: 700;
      text-align: center;
      margin-bottom: 2rem;
      color: #1e3a8a;
      position: relative;
    }
    h2.section-title::after {
      content: "";
      display: block;
      width: 80px;
      height: 4px;
      background: #fcd34d;
      margin: 10px auto 0;
      border-radius: 2px;
    }

    /* Features */
    .feature {
      background: white;
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 6px 25px rgba(0,0,0,0.08);
      transition: all 0.3s ease;
      text-align: center;
      border-top: 4px solid #38bdf8;
    }
    .feature:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 35px rgba(0,0,0,0.15);
    }
    .feature i {
      font-size: 45px;
      color: #0ea5e9;
      margin-bottom: 15px;
    }

    /* Pricing Section */
    #pricing {
      background: linear-gradient(180deg, #e0f2fe, #f1f5f9);
      padding: 80px 0;
    }
    .card {
      border: none;
      border-radius: 20px;
      transition: all 0.3s ease;
      background: #ffffff;
    }
    .card:hover {
      transform: scale(1.03);
      box-shadow: 0 12px 30px rgba(0,0,0,0.2);
    }
    .price {
      font-size: 2rem;
      font-weight: 700;
      color: #2563eb;
    }
    .btn-order {
      border-radius: 12px;
      font-weight: 600;
      transition: all 0.3s ease;
    }
    .btn-order:hover {
      background: #fcd34d;
      border: none;
      color: #1e3a8a;
    }

    /* Kontak Section */
    #kontak {
      background: linear-gradient(180deg, #1e3a8a, #0f172a);
      color: white;
      padding: 100px 0;
    }
    .contact-box {
      background: rgba(255,255,255,0.1);
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
      transition: all 0.3s ease;
    }
    .contact-box:hover {
      background: rgba(255,255,255,0.2);
      transform: translateY(-5px);
    }
    .contact-box a {
      color: #fcd34d;
      text-decoration: none;
    }
     footer {
      background: #0f172a;
      color: #cbd5e1;
      text-align: center;
      padding: 20px;
      font-size: 0.9rem;
     }
     .slider-box {
  overflow: hidden;
  position: relative;
  padding-bottom: 40px; 
}

.slider-track {
  display: flex;
  gap: 20px;
  overflow-x: auto;
  scroll-behavior: smooth;
  padding: 10px 0;
}

.slide-card {
  min-width: 20px;     
  min-height: 100px;     
  background: #fff;
  border-radius: 15px;
  padding: 50px;
  text-align: center;
  border: 1px solid #ddd;
  flex-shrink: 0;
}

.arrow {
  position: absolute;
  bottom: 10px;
  border: none;
  background: #2563eb;
  color: white;
  padding: 10px 14px;
  border-radius: 50%;
  cursor: pointer;
  z-index: 10;
}

.arrow.left { left: 20%; }
.arrow.right { right: 20%; }

  </style>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark py-3">
  <div class="container px-5">
    <a class="navbar-brand fw-bold" href="#">Kinara Laundry</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbarResponsive" class="collapse navbar-collapse justify-content-end">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item"><a class="nav-link active" href="#home">Beranda</a></li>
        <li class="nav-item"><a class="nav-link active" href="#features">Layanan</a></li>
        <li class="nav-item"><a class="nav-link active" href="#pricing">Harga</a></li>
        <li class="nav-item"><a class="nav-link active" href="#kontak">Kontak</a></li>
      </ul>

      <!-- Tombol Login di kanan -->
      <a href="admin.php" class="btn btn-warning fw-bold ms-3 login-admin-btn">Login Admin</a>
    </div>
  </div>
</nav>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header id="home">
    <div class="container">
      <h1 data-aos="zoom-in">Kinara Laundry</h1>
      <p data-aos="fade-up">Kualitas premium, hasil rapi dan wangi – layanan laundry terpercaya Anda.</p>
    </div>
  </header>

  <!-- Features -->
  <section class="py-5" id="features">
    <div class="container">
      <h2 class="section-title" data-aos="fade-up">Layanan Unggulan</h2>
      <div class="row g-4">
        <div class="col-md-4" data-aos="zoom-in">
          <div class="feature">
            <i class="bi bi-basket2"></i>
            <h4>Cuci Kering</h4>
            <p>Bersih, cepat kering, dan tetap lembut. Solusi terbaik untuk hari sibuk Anda.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="feature">
            <i class="bi bi-droplet"></i>
            <h4>Cuci Setrika</h4>
            <p>Pakaian wangi, rapi, dan siap pakai – karena Anda pantas tampil sempurna.</p>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="feature">
            <i class="bi bi-truck"></i>
            <h4>Antar Jemput</h4>
            <p>Kami datang ke rumah Anda. Mudah, praktis, dan hemat waktu.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Pricing -->
  <?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "kinara_laundry");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data layanan dari tabel
$result = $conn->query("SELECT * FROM layanan"); // pastikan nama tabelnya benar
?>

<?php
include 'koneksi.php';

// ambil data layanan dari database
$result = $conn->query("SELECT * FROM layanan");
?>


  <!-- Bootstrap CDN -->
<section id="pricing" class="py-5" style="background:rgb(225,245,254);">
  <div class="container text-center">
      <h2 class="fw-bold mb-4">Harga Layanan</h2>
      

      <div id="carouselLayanan" class="carousel slide" data-bs-touch="true" data-bs-interval="false">
        <div class="carousel-inner">

          <?php 
          $active = true;
          $counter = 0;

          while ($row = $result->fetch_assoc()):
              if ($counter % 2 == 0): ?>
                <div class="carousel-item <?= $active ? 'active' : '' ?>">
                  <div class="d-flex justify-content-center gap-4 flex-wrap">
              <?php endif; ?>

                <!-- CARD -->
                <div class="card p-4 shadow-lg border-0" style="width: 25rem; border-radius:20px;">
                  <h4 class="fw-bold"><?= htmlspecialchars($row['nama_layanan']); ?></h4>
                  <p class="price text-primary fw-semibold fs-4">
                    Rp <?= number_format($row['harga_layanan'], 0, ',', '.'); ?>/kg
                  </p>
                  <p class="text-muted">
                    Layanan terbaik dari Kinara Laundry
                  </p>
                  <a href="formulir.php?layanan=<?= urlencode($row['nama_layanan']); ?>" 
                    class="btn btn-primary fw-semibold px-4 rounded-pill">
                    Pesan Sekarang
                  </a>
                </div>

              <?php 
              $counter++;
              if ($counter % 2 == 0): ?>
                  </div>
                </div>
                <?php $active = false; ?>
              <?php endif; ?>

          <?php endwhile; ?>

          <?php if ($counter % 2 != 0): ?>
              </div>
            </div>
          <?php endif; ?>

        </div>

        <!-- tombol prev -->
        <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#carouselLayanan" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>

        <!-- tombol next -->
        <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#carouselLayanan" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>

      </div>
  </div>
</section>

<style>
/* Tombol panah bulat */
.custom-arrow {
  width: 60px;
  height: 60px;
  background: #f8fcff;
  border-radius: 50%;
  padding: 10px;
  box-shadow: 0px 3px 10px rgba(0,0,0,0.25);
}

/* Posisi panah kiri kanan */
#carouselLayanan .carousel-control-prev,
#carouselLayanan .carousel-control-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
}

#carouselLayanan .carousel-control-prev { left: -55px; }
#carouselLayanan .carousel-control-next { right: -55px; }

/* Hover biru */
.custom-arrow:hover {
  background: #2563eb;
  transition: 0.3s;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
  filter: invert(1);
}

/* Animasi Card */
.card { transition: 0.3s; }
.card:hover { transform: scale(1.05); }

/* Responsive tombol slider untuk HP */
@media (max-width: 768px) {
  #carouselLayanan .carousel-control-prev { left: -10px; }
  #carouselLayanan .carousel-control-next { right: -10px; }
}
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>





  <section id="kontak">
    <div class="container text-center">
      <h2 class="section-title text-white" data-aos="fade-up">Hubungi Kami</h2>
      <div class="row g-4 mb-5">
        <div class="col-md-4" data-aos="fade-right">
          <div class="contact-box">
            <i class="bi bi-geo-alt-fill fs-1 text-warning"></i>
            <h5 class="fw-bold mt-3">Lokasi</h5>
            <a href="https://maps.app.goo.gl/rCiRkHjMwRLXDqT58" target="_blank">Kinara Laundry</a>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-up">
          <div class="contact-box">
            <i class="bi bi-whatsapp fs-1 text-success"></i>
            <h5 class="fw-bold mt-3">WhatsApp</h5>
            <a href="https://wa.me/6281357297909" target="_blank">+62 813-5729-7909</a>
          </div>
        </div>
        <div class="col-md-4" data-aos="fade-left">
          <div class="contact-box">
            <i class="bi bi-envelope-fill fs-1 text-info"></i>
            <h5 class="fw-bold mt-3">Email</h5>
            <a href="mailto:kinaralaundry777@gmail.com">kinaralaundry777@gmail.com</a>
          </div>
        </div>
      </div>

     
  </section>

  



  <!-- Footer -->
  <footer>
    © 2025 Kinara Laundry. All rights reserved.
  </footer>
<!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1200, once: true });

    document.querySelectorAll(".btn-order").forEach(btn => {
      btn.addEventListener("click", function(e) {
        e.preventDefault();
        const layanan = this.getAttribute("data-layanan");
        document.getElementById("layanan").value = layanan;
        document.getElementById("pesan").value = "Saya ingin memesan layanan " + layanan + ".";
        document.getElementById("contactForm").scrollIntoView({ behavior: "smooth", block: "center" });
      });
    });

  </script>
  <script>
  // Animasi & auto isi form dari tombol "Pesan Sekarang"
  AOS.init({ duration: 1200, once: true });

  document.querySelectorAll(".btn-order").forEach(btn => {
    btn.addEventListener("click", function(e) {
      e.preventDefault();
      const layanan = this.getAttribute("data-layanan");
      document.getElementById("layanan").value = layanan;
      document.getElementById("pesan").value = "Saya ingin memesan layanan " + layanan + ".";
      document.getElementById("contactForm").scrollIntoView({ behavior: "smooth", block: "center" });
    });
  });

  // Tampilkan QRIS jika metode pembayaran dipilih
  document.getElementById("metode_pembayaran").addEventListener("change", function() {
    const qrisBox = document.getElementById("qris-container");
    if (this.value === "QRIS") {
      qrisBox.style.display = "block";
    } else {
      qrisBox.style.display = "none";
    }
  });
  
</script>
<script>
const slider = document.getElementById("sliderTrack");

function slideLeft() {
  slider.scrollBy({ left: -320, behavior: 'smooth' });
}

function slideRight() {
  slider.scrollBy({ left: 320, behavior: 'smooth' });
}
</script>

 
</body>
</html>
