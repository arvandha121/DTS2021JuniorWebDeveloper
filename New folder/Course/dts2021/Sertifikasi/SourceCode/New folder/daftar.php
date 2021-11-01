<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body{
            /* background-color: lightgrey; */
            /* background-image: url("images/dts.jpg");
            background-size:cover; 
            background-attachment: fixed;
            background-repeat: no-repeat; */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="row-xxl-4">
        <div class="col-xxl-4">
            <nav class="navbar navbar-expand-xl navbar-dark bg-secondary shadow fixed-top">
                <div class="container">
                    <a class="navbar-brand" style="font-weight: bold" href="index.php">DIGITAL TALENT</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="list.php">Calon Peserta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active disabled" aria-disabled="true" href="#" tabindex="-1">Daftar</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Akhir Navbar -->

    <!-- Form -->
    <div class="container" style="margin-top: 5rem; margin-bottom: 5rem;">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 69.1rem;">
                    <div class="card-body">
                        <h3 class="mb-4"><strong>Tambah Data Peserta</strong></h3>
                        <form action="proses-pendaftaran.php" method="POST">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap : </label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat : </label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin : </label>
                                <label style="margin-left: 5px" for=""><input type="radio" name="jenis_kelamin" value="Pria"> Pria</label><br>
                                <label style="margin-left: 7rem" for=""><input type="radio" name="jenis_kelamin" value="Wanita"> Wanita</label>
                            </div>
                            <div class="mb-3">
                                <label for="agama">Agama : </label>
                                <select class="form-control" name="agama" id="agama">
                                    <option selected>Pilih salah satu</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Atheis">Atheis</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="sekolah_asal" class="form-label">Sekolah Asal : </label>
                                <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="">
                            </div>
                            <div class="mb-3" style="margin-left: 51.7rem" id="mysubmit">
                            <input class="btn btn-primary" type="submit" value="Simpan" name="simpan">
                                <a style="color: white; text-decoration: none" href="daftar.php?reset-form-daftar"><button type="button" class="btn btn-info">Reset</button></a>
                                <a style="color: white; text-decoration: none" href="index.php?kembali-beranda"><button type="button" class="btn btn-success">Kembali</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Form -->

    <!-- Footer -->
    <footer class="bg-secondary text-white text-center fixed-bottom">
        <p><b>©Copyright Information 2021</b></p>
    </footer>
    <!-- Akhir Footer -->
</body>
</html>