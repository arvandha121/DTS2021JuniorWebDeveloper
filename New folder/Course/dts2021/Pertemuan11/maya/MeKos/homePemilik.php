<?php
include 'koneksi.php';
$tgl = date('Y-m-d');
session_start();
if (isset($_SESSION['sesi'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Halaman Pemilik Kos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .pagination {
                display: inline-block;
            }
            
            .pagination a {
                color: black;
                float: left;
                padding: 8px 16px;
                text-decoration: none;
            }

            .pagination a.active {
                background-color: #cc0000;
                color: white;
                border-radius: 5px;
            }

            .pagination a:hover:not(.active) {
                background-color: #ddd;
                border-radius: 5px;
            }

            nav {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 3;
            }

            .nav-link:hover {
                border-bottom: 3px solid red;
            }

            .kontak {
                font-family: verdana;
                font-size: 14px;
                color: black;
            }

            .kontak:hover {
                text-decoration: none;
            }

            .kebijakan {
                color: black;
            }

            .kebijakan:hover {
                text-decoration: none;
            }

            .garis {
                color: lightgray;
                width: 85%;
            }
        </style>
    </head>

    <body>
        <!--NAVBAR-->
        <nav class="navbar navbar-expand-sm bg-light navbar-light" style="position: sticky;">
            <img src="images/logo.png" alt="logo" style="height: 4%; width: 4%; margin-right: 1%; margin-left: 2%;">
            <div class="col-7" id="nama-user">
                <h4>Hai <?php echo $_SESSION['sesi']; ?></h4>
            </div>

            <!-- Links -->
            <ul class="navbar-nav">
                <!-- Dropdown -->
                <li class="nav-item">
                    <a class="nav-link" href="homePemilik.php?p=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifikasi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Kelola Kos
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Pengajuan Sewa</a>
                        <a class="dropdown-item" href="homePemilik.php?p=anggota">Daftar Penyewa</a>
                        <a class="dropdown-item" href="#">Daftar Kamar Kos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Transaksi
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Check In</a>
                        <a class="dropdown-item" href="#">Check Out</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" id="navbardrop" data-toggle="dropdown">
                        <img src="images/profil.png" style="margin-left: 10px; margin-top: 5px; height: 30px;" alt="profil">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Profil</a>
                        <a class="dropdown-item" href="logout.php">Keluar</a>
                    </div>
                </li>
            </ul>
            <hr>
        </nav>
        <br>

        <section class="container">
            <?php
            $pages_dir = 'pages';
            if (!empty($_GET['p'])) {
                $pages = scandir($pages_dir, 0);
                unset($pages[0], $pages[1]);
                $p = $_GET['p'];
                if (in_array($p . '.php', $pages)) {
                    include($pages_dir . '/' . $p . '.php');
                } else {
                    echo 'Halaman Tidak Ditemukan';
                }
            } else {
                include($pages_dir . '/home.php');
            }
            ?>
        </section>

        <!-- Footer -->
        <footer class="page-footer font-small bg-light">
            <!-- Footer Links -->
            <div class="container py-4 text-center text-md-left mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-6">
                        <!-- Content -->
                        <h6 class="text-uppercase font-weight-bold">MeKos</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>MeKos memanfaatkan teknologi untuk berkembang dari aplikasi cari kos menjadi aplikasi yang memudahkan calon anak kos
                            untuk booking properti kos dan juga melakukan pembayaran kos. Saat ini kami memiliki lebih dari 2 juta kamar kos yang
                            tersebar di lebih dari 140 kota di seluruh Indonesia.</p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-3">

                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Kebijakan</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <a href="#" class="kebijakan">Kebijakan Privasi</a>
                        </p>
                        <p>
                            <a href="#" class="kebijakan">Syarat dan Ketentuan Umum</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <div class="col-3" id="kontak">
                        <!-- Links -->
                        <h6 class="text-uppercase font-weight-bold">Kontak</h6>
                        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fa fa-facebook-square"><a href="#" class="kontak">&nbsp; &nbsp; &nbsp;MeKos Atmayanti</a></i>
                        </p>
                        <p>
                            <i class="fa fa-envelope-square"><a href="mailto:me.atmayanti@gmail.com" class="kontak">&nbsp; &nbsp; &nbsp;me.atmayanti@gmail.com</a></i>
                        </p>
                        <p>
                            <i class="fa fa-instagram"><a href="#" class="kontak">&nbsp; &nbsp; &nbsp;MeKos_Atmayanti</a></i>
                        </p>
                        <p>
                            <i class="fa fa-twitter-square"><a href="#" class="kontak">&nbsp; &nbsp; &nbsp;MeKos_Atmayanti</a></i>
                        </p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 bg-secondary text-white">© 2020 Copyright: Atmayanti</div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </body>

    </html>
<?php
} else {
    echo "<script>
		alert('Anda Harus Login Dahulu!');
	</script>";
    header('location:login.php');
}
?>