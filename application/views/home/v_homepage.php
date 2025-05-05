<!DOCTYPE html>
<html lang="id">
<<<<<<< HEAD
=======

>>>>>>> da7376727574ff11c8e0edfc4337ce83fc570c8b
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

    <link rel="stylesheet" href="<?= base_url('assets/css/css_homepage.css') ?>">
</head>

<body>
<<<<<<< HEAD
=======

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top px-4">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="<?= base_url('homepage/index') ?>">Random Shot</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('homepage/index') ?>">Home</a>
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
                        <li><a class="dropdown-item" href="<?= base_url('homepage/billiard') ?>">Billiard Table</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('homepage/pingpong') ?>">Table Tennis</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('homepage/menu') ?>">Cafe</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= base_url('homepage/contact') ?>" target="_blank">Contact</a>
                </li>
            </ul>
        </div>
        <div class="d-none d-lg-block">
            <button class="btn btn-light btn-signin ms-auto"><i class="bi bi-person"></i> Sign In</button>
        </div>
    </div>
    </nav>

>>>>>>> da7376727574ff11c8e0edfc4337ce83fc570c8b
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Random Shot Billiard</h1>
            <p>Billiard. Tenis Meja. Cafe. Semua Ada di Sini!</p>
        </div>
    </section>

    <!-- Section Our Services -->
<<<<<<< HEAD
    <section id="ourServices" class="our-services py-5">
=======
    <section class="our-services py-5">
>>>>>>> da7376727574ff11c8e0edfc4337ce83fc570c8b
        <div class="container">
            <h2 class="text-center mb-5">Our Services</h2>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="<?= base_url('assets/images/Billiard table1.jpg') ?>" class="card-img-top" alt="Billiard Table">
                        <div class="card-body bg-dark text-white">
                            <h5 class="card-title">Billiard Table</h5>
                            <p class="card-text">Billiard table kualitas mantap</p>
                            <a href="<?= base_url('homepage/billiard') ?>" class="btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="<?= base_url('assets/images/Ping Pong Table1.jpg') ?>" class="card-img-top" alt="Ping Pong Table">
                        <div class="card-body bg-dark text-white">
                            <h5 class="card-title">Ping Pong Table</h5>
                            <p class="card-text">Disini ada Ping Pong juga looh, ayo pesan sekarang</p>
                            <a href="<?= base_url('homepage/pingpong') ?>" class="btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="<?= base_url('assets/images/cafe1.jpg') ?>" class="card-img-top" alt="Cafe">
                        <div class="card-body bg-dark text-white">
                            <h5 class="card-title">Cafe</h5>
                            <p class="card-text">Check out our menus!</p>
                            <a href="<?= base_url('homepage/menu') ?>" class="btn">
                                <i class="bi bi-arrow-up-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<<<<<<< HEAD
    <section style="background-color: #292929; color: white; font-family: 'Poppins', sans-serif; position: relative; overflow: hidden;">
=======
    <section style="background-color: #191919; color: white; font-family: 'Poppins', sans-serif; position: relative; overflow: hidden;">
>>>>>>> da7376727574ff11c8e0edfc4337ce83fc570c8b
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
<<<<<<< HEAD
=======

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
                    <li><a href="<?= base_url('homepage/index') ?>">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>FOLLOW US</h3>
                <ul>
                    <li><i class="bi bi-instagram"></i> <a href="https://instagram.com/rspoolcafe.bgr" target="_blank">@rspoolcafe.bgr</a></li>
                    <li><i class="bi bi-tiktok"></i> <a href="https://www.tiktok.com/@rspoolcafe.bgr?lang=en" target="_blank">@rspoolcafe.bgr</a></li>
            </div>
            <div class="footer-column">
                <h3>SERVICES</h3>
                <ul>
                    <li><a href="<?= base_url('homepage/billiard') ?>">Billiard Table</a></li>
                    <li><a href="<?= base_url('homepage/pingpong') ?>">Table Tennis</a></li>
                    <li><a href="<?= base_url('homepage/menu') ?>">Cafe</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <div class="footer-bottom">
        &copy; 2025 Random Shot. All Rights Reserved.
    </div>

>>>>>>> da7376727574ff11c8e0edfc4337ce83fc570c8b
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
