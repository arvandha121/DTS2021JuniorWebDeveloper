<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Penyewa Kos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 3;
        }

        .nav-link:hover {
            border-bottom: 3px solid red;
        }

        .pictpromo {
            border-radius: 5px;
        }

        .linkpromo {
            color: black;
        }

        .linkpromo:hover {
            text-decoration: none;
            color: black;
        }

        #kospromo .col-3 {
            border-radius: 5px;
            padding-top: 10px;
        }

        #kospromo .col-3:hover {
            background-color: rgba(177, 2, 2, 0.5);
        }

        .pictrec {
            border-radius: 5px;
        }

        .linkrec {
            color: black;
        }

        .linkrec:hover {
            text-decoration: none;
            color: black;
        }

        #kosrec .col-3 {
            border-radius: 5px;
            padding-top: 10px;
        }

        #kosrec .col-3:hover {
            background-color: rgba(177, 2, 2, 0.5);
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
        <!-- Brand -->
        <a class="navbar-brand col-sm-7" href="#"> <img src="images/logo.png" alt="logo" width="7%">MeKos</a>
        <!-- Links -->
        <ul class="navbar-nav" style="margin-left: 5%;">
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Cari Kos
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Kos Putri</a>
                    <a class="dropdown-item" href="#">Kos Putra</a>
                    <a class="dropdown-item" href="#">Kos Campur</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kontak Kami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Syarat dan Ketentuan</a>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#login">Masuk</button>
            </li>
        </ul>
        <hr>
    </nav>
    <br>

    <!--LOGIN-->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Masuk</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="cek_login.php">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-danger" style="width: 100%;" name="submit">Masuk</button>
                    </form>
                    <br>
                    <div class="text-center">Belum punya akun MeKos?
                        <a href="registrasi.html">
                            <span class="text-danger">Daftar Sekarang</span>
                        </a>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    </div>


    <!--SEARCHING BAR-->
    <div class="container" id="cari"><br>
        <h3>Ingin Cari Kos?</h3>
        <p>Dapatkan Info Kos Terbaru di MeKos.</p>
        <form class="form-inline" action="#">
            <input class="form-control mr-sm-2 col-3" type="text" placeholder="Masukkan nama lokasi">
            <button class="btn btn-danger" type="submit" style="padding-left: 3%; padding-right: 3%;">Cari</button>
        </form>
    </div>
    <br><br>
    <hr class="garis"><br>


    <!--PROMO KOS-->
    <div class="container" id="promo">
        <h4>Promo MeKos Minggu Ini</h4>
        <div class="nav-item dropdown" style="margin-left: 1%; margin-right: 2%;">
            <a class="nav-link dropdown-toggle text-danger" href="#" id="navbardrop" data-toggle="dropdown">
                Pilih Lokasi
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item text-danger" href="#">Bogor</a>
                <a class="dropdown-item text-danger" href="#">Bekasi</a>
                <a class="dropdown-item text-danger" href="#">Jakarta</a>
                <a class="dropdown-item text-danger" href="#">Malang</a>
                <a class="dropdown-item text-danger" href="#">Semarang</a>
                <a class="dropdown-item text-danger" href="#">Surabaya</a>
                <a class="dropdown-item text-danger" href="#">Tangerang</a>
            </div>
        </div>
    </div>
    <div class="container" id="kospromo">
        <div class="d-flex p-4">
            <div class="col-3">
                <a href="http://google.com" class="linkpromo">
                    <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictpromo">
                    <p>
                        <!--nama-->
                        <span><b>Ini adalah nama kos</b></span><br>
                        <!--lokasi-->
                        <span>Ini adalah lokasi kos</span><br>
                        <!--fasilitas-->
                        <span class="small">Ini adalah fasilitas kos</span><br>
                        <!--harga normal-->
                        <span><del>Rp 1.999.999</del></span>
                        <span class="text-danger font-weight-bold"> 10%</span><br>
                        <!--harga promo-->
                        <span><strong>Rp 1.000.000</strong></span>
                    </p>
                </a>
            </div>
            <div class="col-3">
                <a href="http://google.com" class="linkpromo">
                    <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictpromo">
                    <p>
                        <!--nama-->
                        <span><b>Ini adalah nama kos</b></span><br>
                        <!--lokasi-->
                        <span>Ini adalah lokasi kos</span><br>
                        <!--fasilitas-->
                        <span class="small">Ini adalah fasilitas kos</span><br>
                        <!--harga normal-->
                        <span><del>Rp 1.999.999</del></span>
                        <span class="text-danger font-weight-bold"> 10%</span><br>
                        <!--harga promo-->
                        <span><strong>Rp 1.000.000</strong></span>
                    </p>
                </a>
            </div>
            <div class="col-3">
                <a href="http://google.com" class="linkpromo">
                    <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictpromo">
                    <p>
                        <!--nama-->
                        <span><b>Ini adalah nama kos</b></span><br>
                        <!--lokasi-->
                        <span>Ini adalah lokasi kos</span><br>
                        <!--fasilitas-->
                        <span class="small">Ini adalah fasilitas kos</span><br>
                        <!--harga normal-->
                        <span><del>Rp 1.999.999</del></span>
                        <span class="text-danger font-weight-bold"> 10%</span><br>
                        <!--harga promo-->
                        <span><strong>Rp 1.000.000</strong></span>
                    </p>
                </a>
            </div>
            <div class="col-3">
                <a href="http://google.com" class="linkpromo">
                    <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictpromo">
                    <p>
                        <!--nama-->
                        <span><b>Ini adalah nama kos</b></span><br>
                        <!--lokasi-->
                        <span>Ini adalah lokasi kos</span><br>
                        <!--fasilitas-->
                        <span class="small">Ini adalah fasilitas kos</span><br>
                        <!--harga normal-->
                        <span><del>Rp 1.999.999</del></span>
                        <span class="text-danger font-weight-bold"> 10%</span><br>
                        <!--harga promo-->
                        <span><strong>Rp 1.000.000</strong></span>
                    </p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="#">
                    <button class="btn btn-danger" style="width: 15%;">Lihat Semua</button>
                </a>
            </div>
        </div>
    </div>
    <br><br>
    <hr class="garis"><br>

    <!--REKOMENDASI KOS-->
    <div class="container" id="rec">
        <h4>Rekomendasi MeKos</h4>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-danger" href="#" id="navbardrop" data-toggle="dropdown">
                Pilih Lokasi
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item text-danger" href="#">Bogor</a>
                <a class="dropdown-item text-danger" href="#">Bekasi</a>
                <a class="dropdown-item text-danger" href="#">Jakarta</a>
                <a class="dropdown-item text-danger" href="#">Malang</a>
                <a class="dropdown-item text-danger" href="#">Semarang</a>
                <a class="dropdown-item text-danger" href="#">Surabaya</a>
                <a class="dropdown-item text-danger" href="#">Tangerang</a>
            </div>
        </div>
    </div>
    <div class="container" id="kosrec">
        <div class="d-flex p-4">
            <div class="col-3">
                <a href="http://google.com" class="linkrec">
                    <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictrec">
                    <p>
                        <!--nama-->
                        <span><b>Ini adalah nama kos</b></span><br>
                        <!--lokasi-->
                        <span>Ini adalah lokasi kos</span><br>
                        <!--fasilitas-->
                        <span class="small">Ini adalah fasilitas kos</span><br>
                        <!--harga normal-->
                        <span><del>Rp 1.999.999</del></span>
                        <span class="text-danger font-weight-bold"> 10%</span><br>
                        <!--harga promo-->
                        <span><strong>Rp 1.000.000</strong></span>
                    </p>
                </a>
            </div>
            <div class="col-3">
                <a href="http://google.com" class="linkrec">
                    <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictrec">
                    <p>
                        <!--nama-->
                        <span><b>Ini adalah nama kos</b></span><br>
                        <!--lokasi-->
                        <span>Ini adalah lokasi kos</span><br>
                        <!--fasilitas-->
                        <span class="small">Ini adalah fasilitas kos</span><br>
                        <!--harga normal-->
                        <span><del>Rp 1.999.999</del></span>
                        <span class="text-danger font-weight-bold"> 10%</span><br>
                        <!--harga promo-->
                        <span><strong>Rp 1.000.000</strong></span>
                    </p>
                </a>
            </div>
            <div class="col-3">
                <a href="http://google.com" class="linkrec">
                    <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictrec">
                    <p>
                        <!--nama-->
                        <span><b>Ini adalah nama kos</b></span><br>
                        <!--lokasi-->
                        <span>Ini adalah lokasi kos</span><br>
                        <!--fasilitas-->
                        <span class="small">Ini adalah fasilitas kos</span><br>
                        <!--harga normal-->
                        <span><del>Rp 1.999.999</del></span>
                        <span class="text-danger font-weight-bold"> 10%</span><br>
                        <!--harga promo-->
                        <span><strong>Rp 1.000.000</strong></span>
                    </p>
                </a>
            </div>
            <div class="col-3">
                <a href="http://google.com" class="linkrec">
                    <img src="images/kos1.jpg" alt="gambar1" width="100%" class="pictrec">
                    <p>
                        <!--nama-->
                        <span><b>Ini adalah nama kos</b></span><br>
                        <!--lokasi-->
                        <span>Ini adalah lokasi kos</span><br>
                        <!--fasilitas-->
                        <span class="small">Ini adalah fasilitas kos</span><br>
                        <!--harga normal-->
                        <span><del>Rp 1.999.999</del></span>
                        <span class="text-danger font-weight-bold"> 10%</span><br>
                        <!--harga promo-->
                        <span><strong>Rp 1.000.000</strong></span>
                    </p>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="#">
                    <button class="btn btn-danger" style="width: 15%;">Lihat Semua</button>
                </a>
            </div>
        </div>
    </div>
    <br><br><br>

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