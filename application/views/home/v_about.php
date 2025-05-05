<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Random Shot Billiard</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?= base_url('assets/css/css_about.css') ?>">
</head>
<body>
  <!-- Header -->
  <header class="header-section d-flex align-items-center justify-content-center text-center text-white"
    style="background-image: url('https://i.pinimg.com/736x/cd/ec/21/cdec21f5a38c4e4c46e34a854078dcb1.jpg'); background-size: cover; background-position: center; height: 400px; position: relative;">
    <div class="overlay" style="position: absolute; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.5); z-index:1;"></div>
    <div style="position: relative; z-index: 2;">
      <h1 class="display-3 fw-bold">About Us</h1>
    </div>
  </header>

  <!-- Contact Info -->
  <section class="container my-5">
    <div class="row text-center g-4">
      <div class="col-md-4">
        <div class="contact-box">
          <div class="contact-icon"><i class="bi bi-envelope"></i></div>
          <h5 class="mt-3">Email</h5>
          <p>ptmindogreen@gmail.com</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-box">
          <div class="contact-icon"><i class="bi bi-geo-alt"></i></div>
          <h5 class="mt-3">Location</h5>
          <a href="https://maps.app.goo.gl/Vfi9keg7fqWNhDZW6" class="info-link">Perum Indogreen Blok D1 No. 1, Bogor</a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="contact-box">
          <div class="contact-icon"><i class="bi bi-alarm"></i></div>
          <h5 class="mt-3">Open Hours</h5>
          <p>09.00 - 22.00</p>
        </div>
      </div>
    </div>
  </section>

<!-- Contact Form Section -->
<section class="contact-section">
  <div class="container">
    <div class="row align-items-center">
      <!-- Kiri: Teks dan Sosmed -->
      <div class="col-md-6 mb-4 mb-md-0 text-center text-md-start">
        <h2>Don't Hesitate To Contact Us!</h2>
        <p>We'll be happy to hear from you..</p>
      </div>

      <!-- Kanan: Form -->
      <div class="col-md-6">
        <div class="d-flex justify-content-center justify-content-md-center gap-3 social-icons mt-3">
            <a href="https://instagram.com/rspoolcafe.bgr" target="_blank"><i class="bi bi-instagram fs-2"></i></a>
            <a href="https://tiktok.com/@rspoolcafe.bgr" target="_blank"><i class="bi bi-tiktok fs-2"></i></a>
            <a href="https://wa.me/6281315997402" target="_blank"><i class="bi bi-whatsapp fs-2"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Location Map Section -->
<section class="container my-5">
  <h2 class="text-center mb-4">Our Location</h2>
  <div class="ratio ratio-16x9 shadow rounded overflow-hidden" style="height: 300px;">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d247.7646603855183!2d106.9009699!3d-6.4919557!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c10029dbb1e1%3A0x6fb32a5ac5a27d5a!2sRandom%20Shot%20Pool%20And%20Cafe!5e0!3m2!1sen!2sid!4v1746042141870!5m2!1sen!2sid" 
      width="100%" 
      height="1000%" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>
  </div>
</section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>