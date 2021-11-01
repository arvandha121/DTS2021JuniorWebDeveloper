<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pendaftaran</title>
    <link rel="stylesheet" href="css/bootstrap.css">
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
                            <a class="nav-link active" href="#">Calon Peserta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true" href="daftar.php" tabindex="-1">Daftar</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Akhir Navbar -->

    <!-- tabel -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="margin-top: 5rem; margin-bottom: 1rem; font-family: Times New Roman"><strong>Peserta yang sudah mendaftar :</strong></h1>
                <br>
                <div class="mb-3">
                    <nav>
                        <a style="color: ; text-decoration: none; : none;" href="daftar.php?tambah-daftar-baru">
                            <button type="button" class="btn btn-primary">Tambah Baru</button>
                        </a>
                    </nav>
                </div>
                <div class="mb-3">
                <div class="card" style="width: 69.1rem;">
                    <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr class="bg-secondary">
                                <th scope="col" style="color: white">No.</th>
                                <th scope="col" style="color: white">Nama</th>
                                <th scope="col" style="color: white">Alamat</th>
                                <th scope="col" style="color: white">Jenis Kelamin</th>
                                <th scope="col" style="color: white">Agama</th>
                                <th scope="col" style="color: white">Sekolah Asal</th>
                                <th scope="col" style="color: white" class="ml-1">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                                $sql = "SELECT * FROM calon_peserta";
                                $query = mysqli_query($db, $sql);
                                $nomor = 1;

                                while($siswa = mysqli_fetch_array($query)){
                                    echo "<tr>";

                                    echo "<td>" . $nomor . "</td>";
                                    echo "<td>" . $siswa['nama'] . "</td>";
                                    echo "<td>" . $siswa['alamat'] . "</td>";
                                    echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                                    echo "<td>" . $siswa['agama'] . "</td>";
                                    echo "<td>" . $siswa['sekolah_asal'] . "</td>";

                                    echo "<td>";
                                    echo "<a style='text-decoration: none;' href=' detail.php?id=" .$siswa['id']. " '><button type='button' class='btn btn-info ml-1'>Print</button></?a>";
                                    echo "<a style='text-decoration: none; : none;' href=' form-edit.php?id=" .$siswa['id']. " '><button type='button' class='btn btn-warning ml-1'>Edit</button></?a>";?>
                                    <a style="pointer-events:;" href="hapus.php?id=<?php echo $siswa['id']; ?>" onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')"><button type="button" class="btn btn-danger">Hapus</button></a>
                                    <?php echo "</td>";

                                    echo "</tr>";?><?php $nomor++;
                                }
                            
                            ?>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
                <div>
                    <p style="margin-bottom: 5rem">
                        Total: <?php echo mysqli_num_rows($query) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir tabel -->

    <!-- Footer -->
    <footer class="bg-secondary text-white text-center fixed-bottom">
        <p><b>©Copyright Information 2021</b></p>
    </footer>
    <!-- Akhir Footer -->
</body>
</html>