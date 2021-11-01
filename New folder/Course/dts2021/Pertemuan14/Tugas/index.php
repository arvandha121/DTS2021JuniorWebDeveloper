<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    
    <!-- Navbar -->
    <div class="row-xxl-4">
        <div class="col-xxl-4">
            <nav class="navbar navbar-expand-xl navbar-dark bg-secondary shadow fixed-top">
                <div class="container">
                    <a class="navbar-brand" style="font-weight: bold" href="index.php">DIGITAL TALENT</a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <a class="nav-link active disabled" aria-disabled="true" aria-current="page" href="#" tabindex="-1">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="list.php">Calon Peserta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="daftar.php">Daftar</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Akhir Navbar -->

    <!-- Header Opening -->
    <div id="container-grid" style="background-color: lightgrey">
        <div class="row">
            <div class="col">
                <p style="font-size: 300%; margin-top:7rem; margin-left: 13.1rem; margin-bottom: 6rem"><b>Selamat Datang Calon Peserta Digital Talent</b></p>
            </div>
        </div>
    </div>
    <!-- Akhir Header Opening -->

    <!-- isi -->
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="mt-3" style="font-size: 130%">Silahkan klik tombol <b>[<a style="color: black; pointer-events: ;" href="daftar.php?daftar-perserta">Daftar</a>]</b> untuk melakukan pendaftaran</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
            <?php if(isset($_GET['simpan'])): ?>
                <p>
                    <?php 
                        if($_GET['simpan'] == 'sukses'){
                            echo "Pendaftaran siswa baru berhasil !";
                        }else{
                            echo "Pendaftaran gagal !";
                        }
                        ?>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Akhir isi -->

    <!-- Footer -->
    <footer class="bg-secondary text-white text-center fixed-bottom">
        <p><b>©Copyright Information 2021</b></p>
    </footer>
    <!-- Akhir Footer -->
</body>
</html>