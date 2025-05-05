<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Random Shot Billiard</title>

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/css/css_pingpong.css') ?>">
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center" style="height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Teks di sebelah kiri -->
                <div class="col-md-6 text-white">
                    <h1 class="display-4 fw-bold">Dua Raket, Satu Meja<br>Ribuan tawa</h1>
                    <hr class="my-4" style="border-top: 2px solid #fff; width: 50px;">
                    <p class="mb-4">
                        Ping pong bukan cuma soal cepat tangan, tapi juga cepat pikiran. Di Random Shot, kamu bisa adu rally seru bareng teman, latihan teknik smash, atau sekadar healing dengan suara pantulan bola yang satisfying.
                        Nggak perlu jago, yang penting enjoy.
                    </p>
                    <a href="#harga" class="btn custom-white px-4 py-2 mt-3">Lihat Harga</a>
                </div>


                <!-- Image Stack -->
                <div class="col-md-6 position-relative d-none d-md-block" style="min-height: 300px;">
                    <img src="<?= base_url('assets/images/ping pong1.jpg') ?>" class="rounded shadow"
                        style="width: 300px; height: 300px; object-fit: cover; position: absolute; top: -20px; left: 70px; z-index: 1;">
                    <img src="<?= base_url('assets/images/ping pong3.jpg') ?>" class="rounded shadow"
                        style="width: 300px; height: 300px; object-fit: cover; position: absolute; top: 50px; right: 30px; z-index: 3;">
                    <img src="<?= base_url('assets/images/ping pong2.jpg') ?>" class="rounded shadow"
                        style="width: 300px; height: 300px; object-fit: cover; position: absolute; top: 130px; left: 120px; z-index: 4;">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION BOOKING -->
    <section id="harga" class="booking-section">
        <div class="booking-container">
            <div class="booking-left">
                <h2>Booking Meja Ping Pong</h2>
                <p class="subheading">Mau main tapi nggak mau antri? Booking dulu aja!</p>
                <p class="description">
                    Pengen main ping pong tanpa keluarin uang? Di <strong>Random Shot</strong>, kamu bisa booking meja ping pong secara GRATIS!
                    Santai bareng temen, latihan refleks, atau sekadar having fun, tanpa bayar sepeser pun.
                    Pilih waktunya, dan langsung kita amankan buat kamu. Kapan lagi bisa gratisan begini?
                </p>
                <div class="price-list">
                    <h4>Harga Sewa:</h4>
                    <ul>
                        <li>• Gratis, Setiap Hari, Sepuasnya (dengan booking dulu ya!)</li>
                    </ul>
                </div>
            </div>
            <div class="booking-right">
                <div class="booking-card">
                    <p>Yuk, booking sekarang dan nikmatin main ping pong gratis tanpa nunggu giliran!</p>
                    <a href="<?= base_url('booking/pingpong') ?>" class="btn-booking">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>