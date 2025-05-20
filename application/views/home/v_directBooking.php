<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Book Now - Billiard</title>

  <!-- Google Font: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('assets/css/css_directBooking.css') ?>">
  <style>
    
  </style>
</head>
<body>

<!-- Header -->
<header class="hero-header">
  <h1>Book Now</h1>
</header>

<!-- Section: Billiard Table -->
<section class="section-block" style="background-image: url('https://i.pinimg.com/736x/a7/1b/c3/a71bc32f63f32de14f5c394f99fd055b.jpg');">
  <div class="section-content">
    <h2>Billiard Table</h2>
    <p>Main billiard nggak cuma soal akurasi, tapi juga soal rasa. Tiap pukulan, tiap strategi, punya alurnya sendiri. Datang, ambil stikmu, dan tunjukkan caramu bercerita lewat permainan. Satu meja banyak cerita, biar skill yang bicara.</p>
    <a href="<?= base_url('booking/billiard') ?>" class="btn-book">Book Here</a>
  </div>
</section>

<!-- Section: Table Tennis -->
<section class="section-block" style="background-image: url('https://i.pinimg.com/736x/cd/1e/02/cd1e02806dca1bac6c6b710bcacdc5a0.jpg');">
  <div class="section-content">
    <h2>Table Tennis</h2>
    <p>Ping pong bukan cuma soal cepat tangan, tapi juga cepat pikiran. Di Random Shot, kamu bisa adu rally seru bareng teman, latihan teknik smash, atau sekadar healing dengan suara pantulan bola yang satisfying. Nggak perlu jago, yang penting enjoy.</p>
    <a href="<?= base_url('booking/pingpong') ?>" class="btn-book">Book Here</a>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
