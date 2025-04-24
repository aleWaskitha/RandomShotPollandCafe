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

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background: rgba(0, 0, 0, 0.6);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .hero-section {
            height: 100vh;
            background: url('asset/billiard\ table2.jpg') center center / cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: left;
            color: white;
        }

        .hero-content h1 {
            font-weight: 700;
            font-size: 3rem;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-top: 10px;
        }

        .custom-white {
            background-color: #FFFFFF;
            color: black;
            border: none;
        }

        .custom-white:hover {
            background-color: rgb(75, 170, 76);
            /* warna saat hover */
        }

        .booking-section {
            padding: 60px 20px;
            background-color: #201f1f;
            font-family: 'Arial', sans-serif;
        }

        .booking-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 1100px;
            margin: 0 auto;
            gap: 40px;
        }

        .booking-left {
            flex: 1 1 50%;
            min-width: 300px;
        }

        .booking-left h2 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #fff;
        }

        .subheading {
            font-size: 16px;
            margin-bottom: 16px;
            color: #fff;
        }

        .description {
            font-size: 16px;
            margin-bottom: 20px;
            color: #fff;
        }

        .price-list h4 {
            font-size: 18px;
            color: #fff;
            margin-bottom: 10px;
        }

        .price-list ul {
            list-style: none;
            padding: 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
        }

        .price-list li {
            margin-bottom: 5px;
        }

        .booking-right {
            flex: 1 1 35%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .booking-card {
            border: 1px solid #333;
            padding: 40px 30px;
            text-align: center;
            width: 100%;
            max-width: 300px;
            background-color: #fff;
        }

        .booking-card p {
            margin-bottom: 30px;
            font-size: 16px;
            color: #333;
        }

        .btn-booking {
            display: inline-block;
            padding: 14px 30px;
            background-color: #2e2e2e;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            transition: background-color 0.3s;
        }

        .btn-booking:hover {
            background-color: #1a1a1a;
        }

        /* bagian footer */
        .footer {
            display: flex;
            background-color: #353535;
            color: #fff;
            padding: 40px 20px;
            flex-wrap: wrap;
        }

        .footer-brand {
            background-color: #035f2b;
            color: #fff;
            padding: 20px;
            flex: 1 1 250px;
        }

        .footer-main {
            display: flex;
            flex: 3 1 600px;
            justify-content: space-between;
            padding-left: 30px;
            gap: 30px;
            border-left: 2px solid #333;
        }

        .footer-column {
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 0 20px;
            border-left: 1px solid #333;
        }

        .footer-column:first-child {
            border-left: none;
        }

        .footer-column h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #035f2b;
        }

        .footer-column ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-column ul li {
            padding: 0.5rem 0;
            border-bottom: 1px solid #444;
            font-size: 14px;
        }

        .footer-column ul li:last-child {
            border-bottom: none;
        }

        .footer-column ul li a {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        .footer-column ul li a:hover {
            text-decoration: underline;
            color: #035f2b;
        }

        .footer-bottom {
            text-align: center;
            padding: 10px 0;
            background-color: #292929;
            color: #fff;
            font-size: 14px;
        }

        .footer-column a {
            text-decoration: none;
            color: inherit;
            transition: all 0.2s ease-in-out;
        }

        .footer-column a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top px-4">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="HomePage.php">Random Shot</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="HomePage.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu text-center" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="Billiard.php">Billiard Table</a></li>
                            <li><a class="dropdown-item" href="PingPong.php">Table Tennis</a></li>
                            <li><a class="dropdown-item" href="cafe.php">Cafe</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="d-none d-lg-block">
                <button class="btn btn-light btn-signin ms-auto"><i class="bi bi-person"></i> Sign In</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section d-flex align-items-center" style="height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Teks di sebelah kiri -->
                <div class="col-md-6 text-white">
                    <h1 class="display-4 fw-bold">Satu Meja, Banyak Cerita<br>biar skill yang bicara</h1>
                    <hr class="my-4" style="border-top: 2px solid #fff; width: 50px;">
                    <p class="mb-4">
                        Main billiard nggak cuma soal akurasi, tapi juga soal rasa. Tiap pukulan, tiap strategi, punya alurnya sendiri. Datang, ambil stikmu, dan tunjukkan caramu bercerita lewat permainan. Satu meja banyak cerita, biar skill yang bicara.
                    </p>
                    <a href="#harga" class="btn custom-white px-4 py-2 mt-3">Lihat Harga</a>
                </div>


                <!-- Image Stack -->
                <div class="col-md-6 position-relative d-none d-md-block" style="min-height: 300px;">
                    <img src="asset/billiard game1.jpg" class="rounded shadow"
                        style="width: 300px; height: 300px; object-fit: cover; position: absolute; top: -20px; left: 70px; z-index: 1;">
                    <img src="asset/billiard game3.jpg" class="rounded shadow"
                        style="width: 300px; height: 300px; object-fit: cover; position: absolute; top: 50px; right: 30px; z-index: 3;">
                    <img src="asset/billiard game2.jpg" class="rounded shadow"
                        style="width: 300px; height: 300px; object-fit: cover; position: absolute; top: 130px; left: 120px; z-index: 4;">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION BOOKING -->
    <section id="harga" class="booking-section">
        <div class="booking-container">
            <div class="booking-left">
                <h2>Booking Meja Billiard</h2>
                <p class="subheading">Mau main tapi nggak mau antri? Booking dulu aja!</p>
                <p class="description">
                    Di <strong>Random Shot</strong>, kamu bisa langsung amankan meja favorit buat hangout bareng teman atau latihan sendiri.<br>
                    Pilih waktu yang pas, dan biar sisanya kami yang urus.
                </p>
                <div class="price-list">
                    <h4>Harga Sewa:</h4>
                    <ul>
                        <li>• Weekday – Rp 40.000 / jam</li>
                        <li>• Weekend – Rp 50.000 / jam</li>
                    </ul>
                </div>
            </div>
            <div class="booking-right">
                <div class="booking-card">
                    <p>Yuk, pesan sekarang dan dapetin meja favoritmu tanpa harus nunggu!</p>
                    <a href="booking.php" class="btn-booking">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-brand">
            <h2>RANDOM SHOT</h2>
            <p>Billiard, Ping Pong & Cafe dalam satu tempat. Tempat asik buat healing dan nongkrong bareng.</p>
        </div>
        <div class="footer-main">
            <div class="footer-column">
                <h3>QUICK LINKS</h3>
                <ul>
                    <li><a href="HomePage.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>KONTAK</h3>
                <ul>
                    <li><i class="bi bi-instagram"></i> <a href="https://instagram.com/rspoolcafe.bgr" target="_blank">@rspoolcafe.bgr</a></li>
                    <li><i class="bi bi-tiktok"></i> <a href="https://www.tiktok.com/@rspoolcafe.bgr?lang=en" target="_blank">@rspoolcafe.bgr</a></li>
                    <li><i class="bi bi-envelope"></i> <a href="mailto:randomshot@email.com">randomshot@email.com</a></li>
                    <li><i class="bi bi-whatsapp"></i> <a href="https://wa.me/6281234567890" target="_blank">+62 812-3456-7890</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>SERVICES</h3>
                <ul>
                    <li><a href="Billiard.php">Billiard Table</a></li>
                    <li><a href="PingPong.php">Table Tennis</a></li>
                    <li><a href="cafe.php">Cafe</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <div class="footer-bottom">
        &copy; 2025 Random Shot. All Rights Reserved.
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>