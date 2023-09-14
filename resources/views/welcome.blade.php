<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Luminous PhotoStudio</title>

    <!-- Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    />

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">Luminous <span>PhotoStudio</span>.</a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Produk</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#menu" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>Mari Berfoto</h1>
        <p>
          Berfoto adalah gambar yang dihasilkan terbentuk dengan rekaman melalui alat yang disebut kamera. Berfoto adalah suatu aktivitas yang sangat digemari semua orang terutama oleh kalangan wanita. So marilah berfoto di Luminous PhotoStudio, capture semua moment anda bersama pasangan maupun keluarga. 
        </p>
        <a href="#" class="cta">Pesan Sekarang</a>
      </main>
    </section>
    <!-- Hero Section end -->

    <!-- About Section start -->
    <section id="about" class="about">
      <h2>Tentang Kami</h2>

      <div class="row">
        <div class="about-img">
          <img src="img/tentangkami2.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Kenapa memilih Photo Studio kami?</h3>
          <p>
            Luminous Photo Studio adalah usaha yang dibangun dari sistem yang mengintegrasikan semua produk lensa, kamera, bingkai foto, hasil kualitas foto. Proses bisnis ini yang dibutuhkan oleh karyawan untuk menjalankan bisnisnya mulai dari perencanaan penjualan, pemasaran, keuangan dan lain-lain.
          </p>
        </div>
      </div>
    </section>
    <!-- About Section end -->

    <!-- Menu Section start -->
    <section id="menu" class="menu">
      <h2>Produk kami</h2>
      <p>
        Luminous PhotoStudio menyediakan beberapa kategori produk.
      </p>

      <div class="row">
        <div class="menu-card">
          <img
            src="img/graduation.jpg"
            alt="Wedding Photo"
            class="menu-card-img"
          />
          <h3 class="menu-title">- Graduation -</h3>
          <p class="menu-card-price">IDR 1.000.000</p>
        </div>
        <div class="menu-card">
          <img
            src="img/family.jpeg"
            alt="Wedding Photo"
            class="menu-card-img"
          />
          <h3 class="menu-title">- Family -</h3>
          <p class="menu-card-price">IDR 1.500.000</p>
        </div>
        <div class="menu-card">
          <img
            src="img/wedding.jpg"
            alt="Wedding Photo"
            class="menu-card-img"
          />
          <h3 class="menu-title">- Wedding -</h3>
          <p class="menu-card-price">IDR 3.000.000</p>
        </div>
        <div class="menu-card">
          <img
            src="img/sweetcouple.jpg"
            alt="Wedding Photo"
            class="menu-card-img"
          />
          <h3 class="menu-title">- Sweet Couple -</h3>
          <p class="menu-card-price">IDR 700.000</p>
        </div>
        <div class="menu-card">
          <img
            src="img/group.jpg"
            alt="Wedding Photo"
            class="menu-card-img"
          />
          <h3 class="menu-title">- Group -</h3>
          <p class="menu-card-price">IDR 1.300.000</p>
        </div>
        <div class="menu-card">
          <img
          src="img/hunting.jpg"
          alt="Wedding Photo"
          class="menu-card-img"
          />
          <h3 class="menu-title">- Hunting -</h3>
          <p class="menu-card-price">IDR 400.000</p>
        </div>
      </div>
      
    </section>
    <!-- Menu Section end -->

    <!-- Contact Section start -->
    <section id="contact" class="contact">
      <h2>Kontak kami</h2>
      <p>
        Jika anda tertarik, hubungi kontak kami dibawah ini !
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.949563136003!2d98.64796167477664!3d3.5990306502228657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e22eecfb21d%3A0x8558d5d0c8bf042f!2sJl.%20Sampul%2C%20Sei%20Putih%20Bar.%2C%20Kec.%20Medan%20Petisah%2C%20Kota%20Medan%2C%20Sumatera%20Utara%2020118!5e0!3m2!1sid!2sid!4v1693287561555!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp" />
          </div>
          <button type="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>

    <!-- Contact Section end -->

    <!-- Footer start -->
    <footer>
      <div class="socials">
        <a href="https://www.instagram.com/l.p.s.___/"
          ><i data-feather="instagram"></i
        ></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>

      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
      </div>

      <div class="credit">
        <p>Created by <a href="">Michael Siahaan</a> | &copy; 2023</p>
      </div>
    </footer>
    <!-- Footer end -->

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>

    <!-- My Javascript -->
    <script src="js/script.js"></script>
  </body>
</html>
