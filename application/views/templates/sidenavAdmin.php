<body class="sb-nav-fixed">
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="<?= base_url('admin') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Booking
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="<?= base_url('admin/listBooking') ?>">List Booking</a>
                                <a class="nav-link" href="<?= base_url('admin/history') ?>">History Booking</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="<?= base_url('admin/report') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></i></div>
                            Report
                        </a>
                        <a class="nav-link" href="<?= base_url('homepage') ?>">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-house"></i></div>
                            Homepage
                        </a>
                        <div class="sb-sidenav-menu-heading"></div>
                        <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-right-from-bracket"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Administrator
                </div>
            </nav>
        </div>
    </div>
</body>