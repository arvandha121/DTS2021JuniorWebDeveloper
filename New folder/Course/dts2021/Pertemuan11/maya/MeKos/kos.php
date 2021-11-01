<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            img{
                height: 400px;
            }
            .container{
                margin-top: 100px;
            }
            nav{
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 3;
            }
            .nav-right{
                z-index: 2;
                width: 30%;
                height: 60%;
                position: fixed;
                position: sticky; 
                float: right;
                margin-right: 3%;
                margin-top: 10%;
            }
            .nav-link:hover{
                border-bottom: 3px solid red;
            }
            #kategori, #favorit, #bagikan{
                border: 1px solid lightgray;
                padding: 7px;
                height: 40px;
                width: 110px;
                border-radius: 4px;
                margin-right: 1%;
            }
            .map-container{
                overflow:hidden;
                padding-bottom:56.25%;
                position:relative;
                height:0;
            }
            .map-container iframe{
                left:0;
                top:0;
                height:60%;
                width:60%;
                position:absolute;
            }
            #diskon{
                border-radius: 4px; 
                background-color: white; 
                display: block; 
                box-shadow: lightgray 1px 1px 3px 3px; 
                padding: 3%;
            }
            #sewa{
                border-radius: 4px; 
                background-color: white; 
                display: block; 
                box-shadow: lightgray 1px 1px 3px 3px; 
                padding: 5%;
            }
            #juduldiskon{
                font-weight: bold; 
                font-size: 20px; 
                padding: 3.7%; 
                border-radius: 4px;
            }
            #kirim{
                font-size: 16px; 
                padding: 3%; 
                border-radius: 4px;
                border: none;
                width: 100%;
            }
            hr #garis{
                margin-left: 100px;
            }
        </style>
    </head>
    <body>
        <!--NAVBAR-->
        <nav class="navbar navbar-expand-sm bg-light navbar-light" style="position: sticky;">
            <!-- Search Bar -->
            <a class="navbar-brand col-sm-7" href="#"> 
                <form class="form-inline" action="#">
                    <img src="images/logo.png" alt="logo" style="height: 7%; width: 7%; margin-right: 3%;">
                    <input class="form-control mr-sm-2 col-4" type="text" placeholder="Masukkan nama lokasi">
                    <button class="btn btn-danger" type="submit" style="padding-left: 3%; padding-right: 3%;">Cari</button>
                </form>
            </a>
            
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
                    <a class="nav-link" href="#">Favorit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifikasi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Lainnya
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Pusat Bantuan</a>
                        <a class="dropdown-item" href="#">Syarat dan Ketentuan</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" id="navbardrop" data-toggle="dropdown">
                        <img src="images/profil.png" style="margin-left: 10px; margin-top: 5px; height: 30px;" alt="profil">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Profil</a>
                        <a class="dropdown-item" href="#">Keluar</a>
                    </div>
                </li>
            </ul>
            <hr>
        </nav>

        <!--FOTO-->
        <div class="container">
            <div class="gambar">
                <div id="gambarKos" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#gambarKos" data-slide-to="0" class="active"></li>
                        <li data-target="#gambarKos" data-slide-to="1"></li>
                        <li data-target="#gambarKos" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active">
                            <img src="images/logo.png" class="col-9" alt="gambar kamar kos">
                        </div>
                        <div class="carousel-item">
                            <img src="images/login.png" class="col-9" alt="gambar kamar mandi">
                        </div>
                        <div class="carousel-item">
                            <img src="images/kos1.jpg" class="col-9" alt="gambar dapur">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#gambarKos" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#gambarKos" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!--PEMESANAN-->
        <nav class="nav-right" style="padding: 10px;">
            <!--diskon-->
            <div id="diskon">
                <p class="bg-danger text-white" id="juduldiskon">GEBYAR DISKON KEMERDEKAAN!
                </p>
                <p>Dapatkan diskon 10% dengan cara booking kos selama periode diskon berlangsung.<br> 03 Aug 2021 - 31 Aug 2021</p>
            </div>
            <br>
            <!--Ajukan sewa-->
            <div id="sewa">
                <p style="font-size: 20px;"><b>Rp 1.000.000</b> / Bulan</p>
                <hr class="bg-light">
                <form action="#" method="get">
                    <label for="tanggal_pesan">Pilih Tanggal Masuk</label><br>
                    <input style="padding: 10px; border-radius: 4x; border: 1px solid lightgray; width: 60%; height: 40%;" type="date" id="tanggal_pesan"><br>
                    <br>
                    <hr class="bg-light">
                    <input type="submit" class="bg-danger text-white" id="kirim" value="Ajukan Sewa Sekarang">
                </form>
            </div>
        </nav>

        <!--DETAIL-->
        <div class="container">
            <h1>Ini adalah Nama Kos</h1><br>
            <!--Keterangan Kos-->
            <div class="keterangan">
                <!--Kategori dan lokasi-->
                <p style="font-size: 20px;">
                    <span id="kategori">Katergori</span>
                    <span class="fa fa-map-marker">&nbsp;</span>
                    <span>Lokasi</span>
                </p>
                <br>
                <p class="d-flex">
                    <!--Jumlah Kamar-->
                    <span class="col-6" id="jmlkamar">Tersedia sebanyak 10 kamar</span>
                    <!--Favorit-->
                    <span id="favorit" class="text-center">
                        <span class="fa fa-heart-o">&nbsp;</span>
                        <span>Favorit</span>
                    </span>
                    <!--Bagikan-->
                    <span id="bagikan" class="text-center">
                        <span class="fa fa-share-alt">&nbsp;</span>
                        <span>Bagikan</span>
                    </span>
                </p>
            </div>
            <hr class="text-light text-left" style="width: 65%; float: left;">
        </div>

        <div class="container">
            <!--Fasilitas-->
            <h3>Fasilitas</h3>
            <br>
            <div class="d-flex" id="fasilitas">
                <div class="col-3" id="fasilitaskamar">
                    <h5>&nbsp; Fasilitas Kamar</h5>
                    <ul>
                        <li>Kamar 3x4 Meter</li>
                        <li>Meja dan Kursi</li>
                        <li>Lemari Baju</li>
                        <li>Kasur</li>
                        <li>Air Conditioner</li>
                    </ul>
                </div>
                <div class="col-3" id="fasilitaskos">
                    <h5>&nbsp;Fasilitas Kos</h5>
                    <ul>
                        <li>Listrik</li>
                        <li>Air Panas</li>
                        <li>Hotspot Area (WiFi)</li>
                        <li>Kamar Mandi Dalam</li>
                    </ul>
                </div>
                <div class="col-3" id="fasilitasutama">
                    <h5>&nbsp;Fasilitas Lain</h5>
                    <ul>
                        <li>Dapur Bersama</li>
                        <li>Ruang Tamu</li>
                        <li>Parkir Motor</li>
                        <li>Parkir Mobil</li>
                    </ul>
                </div>
            </div>
            <hr class="text-light text-left" style="width: 65%; float: left;">
        </div>

        <div class="container">
            <!--Peraturan-->
            <h3>Peraturan Selama Kos</h3>
            <br>
            <ol>
                <li>Akses 24 Jam</li>
                <li>Tidak Boleh Membawa tamu Lawan Jenis</li>
                <li>Menerapkan Protokol Kesehatan</li>
                <li>Menunjukkan Hasil Swab Negatif pada saat Check In</li>
            </ol>
            <br>
            <h3 style="margin: 0;">Ketentuan Pengajuan Sewa</h3>
            <br>
            <ol>
                <li>Waktu mulai ngekos terdekat: di hari H setelah pengajuan sewa</li>
                <li>Waktu mulai ngekos terjauh: 6 bulan setelah pengajuan sewa</li>
            </ol>
            <hr class="text-light text-left" style="width: 65%; float: left;">
        </div>

        <div class="container">
            <!--Lokasi-->
            <h3>Lokasi Kos</h3><br>
            <!--Google map-->
            <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                    style="border:0"></iframe>
            </div>
            <hr class="text-light text-left" style="width: 65%; float: left;">
        </div>

    </body>
</html>