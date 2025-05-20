<nav class="navbar navbar-expand-lg navbar-dark fixed-top px-4">
        <div class="container-fluid">   
            <a class="navbar-brand fw-bold" href="<?= base_url('homepage') ?>">Random Shot</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav text-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('homepage') ?>">Home</a>
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
                        <a class="nav-link" href="<?= base_url('homepage/about') ?>">About</a>
                    </li>
                </ul>
            </div>
            <div class="d-block mt-3 mt-lg-0">
                <?php if (!$this->session->userdata('username')): ?>
                    <a href="<?= base_url('auth') ?>" class="btn btn-light btn-signin ms-auto">
                        <i class="bi bi-person"></i> Login
                    </a>
                <?php else: ?>
                    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user fa-fw"></i> <?= $this->session->userdata('username') ?>
                                <img src="<?= base_url('assets/images/default.jpeg')?>" id="fotoProfil">
                            </a>
                            <?php if ($this->session->userdata('role_id') == 1): ?>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="<?= base_url('admin')?>">Dashboard</a></li>
                                    <li><hr class="dropdown-divider" /></li>
                                    <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a></li>
                                </ul>
                            <?php else: ?>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= base_url('homepage/profilePage')?>">Profile Page</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('homepage/booking')?>">Booking</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a></li>
                            </ul>
                            <?php endif; ?>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</body>
</html>