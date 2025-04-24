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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

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
            background: url('https://i.pinimg.com/736x/cf/b0/69/cfb0691a080a0931ea3075212f4ebdf0.jpg') center center / cover no-repeat;
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
            text-align: center;
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

        .btn-signin {
            border-radius: 20px;
            padding: 6px 16px;
        }

        .our-services {
            background-color: #201f1f;
        }

        .our-services h2 {
            font-weight: bold;
            color: white;
        }

        .card {
            border: none;
            overflow: hidden;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            position: relative;
            text-align: left;
            background-color: black;
            padding: 20px;
        }

        .card-body .btn {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: white;
            color: black;
            border: none;
            border-radius: 12px;
            padding: 10px 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .card-body .btn:hover {
            background-color: #f0f0f0;
            transform: translateY(-2px);
        }

        .info-link {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .info-link:hover {
            color: #035f2b;
            text-decoration: underline;
        }

        .info-hover {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: default;
        }

        .info-hover:hover {
            color: #035f2b;
            text-decoration: underline;
        }

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
                        <a class="nav-link" href="About.php">About</a>
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
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Random Shot Billiard</h1>
            <p>Billiard. Tenis Meja. Cafe. Semua Ada di Sini!</p>
        </div>
    </section>

    <!-- Section Our Services -->
    <section class="our-services py-5">
        <div class="container">
            <h2 class="text-center mb-5">Our Services</h2>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="asset/Billiard table1.jpg" class="card-img-top" alt="Billiard Table">
                        <div class="card-body bg-dark text-white">
                            <h5 class="card-title">Billiard Table</h5>
                            <p class="card-text">Billiard table kualitas mantap</p>
                            <a href="Billiard.php" class="btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="asset/Ping Pong Table1.jpg" class="card-img-top" alt="Ping Pong Table">
                        <div class="card-body bg-dark text-white">
                            <h5 class="card-title">Ping Pong Table</h5>
                            <p class="card-text">Disini ada Ping Pong juga looh, ayo pesan sekarang</p>
                            <a href="PingPong.php" class="btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="asset/cafe1.jpg" class="card-img-top" alt="Cafe">
                        <div class="card-body bg-dark text-white">
                            <h5 class="card-title">Cafe</h5>
                            <p class="card-text">Check out our menus!</p>
                            <a href="cafe.php" class="btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background-color: #292929; color: white; font-family: 'Poppins', sans-serif; position: relative; overflow: hidden;">
        <div class="container py-5" style="min-height: 500px; position: relative; z-index: 2;">
            <div class="row">
                <!-- Text Side -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <h3 style="font-size: 1.5rem; font-weight: 500;">
                        Tempat nongkrong asik buat kamu yang suka main, santai, dan ngopi bareng temen.
                    </h3>
                    <p class="mt-3" style="font-size: 1.5rem; font-weight: 500;">
                        Entah mau healing sendiri, hangout ramean, atau cari spot seru buat ngisi waktu luang, Random Shot siap nemenin harimu.
                    </p>
                    <p class="mt-3" style="font-size: 1.5rem; font-weight: 500;">
                        Yuk, mampir dan jadi bagian dari vibes kita!
                    </p>

                    <div class="mt-5" style="font-size: 1rem;">
                        <p><i class="bi bi-clock"></i>
                            <span class="info-hover">Buka setiap hari pukul 09.00 s/d 22.00</span>
                        </p>
                        <p><i class="bi bi-geo-alt"></i>
                            <a href="https://maps.app.goo.gl/Vfi9keg7fqWNhDZW6" class="info-link">Perum Indogreen Blok D1 No. 1, Bogor</a>
                        </p>
                        <p><i class="bi bi-instagram"></i>
                            <a href="https://instagram.com/rspoolcafe.bgr" target="_blank" class="info-link">@rspoolcafe.bgr</a>
                        </p>
                        <p><i class="bi bi-tiktok"></i>
                            <a href="https://www.tiktok.com/@rspoolcafe.bgr?lang=en" target="_blank" class="info-link">@rspoolcafe.bgt</a>
                        </p>
                    </div>
                </div>

                <!-- Image Stack -->
                <div class="col-md-6 position-relative d-none d-md-block" style="min-height: 300px;">
                    <img src="https://i.pinimg.com/736x/51/cd/47/51cd47f07809509147fc3c523dca2efa.jpg" class="rounded shadow"
                        style="width: 300px; height: 300px; object-fit: cover; position: absolute; top: -20px; left: 70px; z-index: 1;">
                    <img src="https://i.pinimg.com/736x/33/09/f5/3309f5576155bf667feaac5d4ca2da96.jpg" class="rounded shadow"
                        style="width: 300px; height: 300px; object-fit: cover; position: absolute; top: 50px; right: 30px; z-index: 3;">
                    <img src="https://i.pinimg.com/736x/82/87/bf/8287bffa3f43d6a8d0acc965b7876237.jpg" class="rounded shadow"
                        style="width: 300px; height: 300px; object-fit: cover; position: absolute; top: 130px; left: 120px; z-index: 4;">
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