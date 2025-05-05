<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>List Booking - Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="<?= base_url('assets/css/css_admin.css') ?>" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">List Booking</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                List Booking Today
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Booking</th>
                                            <th>Nama</th>
                                            <th>No Telepon</th>
                                            <th>Tanggal</th>
                                            <th>Waktu Booking</th>
                                            <th>Meja</th>
                                            <th>Catatan Tambahan</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Username</th>
                                            <th>Booking</th>
                                            <th>Nama</th>
                                            <th>No Telepon</th>
                                            <th>Tanggal</th>
                                            <th>Waktu Booking</th>
                                            <th>Meja</th>
                                            <th>Catatan Tambahan</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            foreach ($data_booking as $row) {
                                                echo "<tr>";
                                                echo "<td>" . $row["Username"] . "</td>";
                                                echo "<td>" . $row["Booking"] . "</td>";
                                                echo "<td>" . $row["Nama"] . "</td>";
                                                echo "<td>" . $row["No_Telepon"] . "</td>";
                                                echo "<td>" . $row["Tanggal"] . "</td>";
                                                echo "<td>" . $row["Waktu_Booking"] . "</td>";
                                                echo "<td>" . $row["Meja"] . "</td>";
                                                echo "<td>" . $row["Catatan_Tambahan"] . "</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Random Shot Pool and Cafe 2025</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/js/datatables-simple-demo.js') ?>"></script>
    </body>
</html>