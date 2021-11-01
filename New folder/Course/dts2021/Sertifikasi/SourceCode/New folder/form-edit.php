<?php 

include("koneksi.php");

//-- Jika tidak ada string id didalam query
if(!isset($_GET['id'])){
    header('Location: list.php');
}

//-- Ambil id dari query string
$id = $_GET['id'];

//-- Buat query ambil dari database
$sql = "SELECT * FROM calon_peserta WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

//-- Jika data yang diedit tidak ditemukan
if(mysqli_num_rows($query) < 1){
    die("data tidak ditemukan.....");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
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
                            <a class="nav-link active disabled" href="list.php">Calon Peserta</a>
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

    <!-- Form Edit -->
    <div class="container" style="margin-top: 5rem; margin-bottom: 4rem">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 69.1rem;">
                    <div class="card-body">
                        <header>
                            <h3 style="margin-bottom: 1rem"><strong>Formulir Edit Peserta</strong></h3>
                        </header>
                        <form action="proses-edit.php" method="POST">
                            <fieldset>
                                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
                                <p>
                                    <label for="nama"> Nama : </label>
                                    <input class="form-control" type="text" name="nama" value="<?php echo $siswa['nama'] ?>">
                                </p>
                                <p>
                                    <label for="alamat"> Alamat : </label>
                                    <textarea class="form-control" name="alamat" id="alamat" cols="15" rows="3"><?php echo $siswa['alamat'] ?></textarea>
                                </p>
                                <p>
                                    <label for="jenis_kelamin">Jenis Kelamin : </label>
                                    <?php $jk = $siswa['jenis_kelamin']; ?>
                                    <label for=""> <input type="radio" name="jenis_kelamin" value="Pria" <?php echo($jk == 'Pria') ? "checked" : ""?> > Pria </label>
                                    <label for=""> <input type="radio" name="jenis_kelamin" value="Wanita" <?php echo($jk == 'Wanita') ? "checked" : ""?> > Wanita </label>
                                </p>
                                <p>
                                    <label for="agama"> Agama : </label>
                                    <?php $agama = $siswa['agama']; ?>
                                    <select class="form-control" name="agama" id="agama">
                                        <option <?php echo($agama == 'islam') ? "selected": "" ?> > Islam</option>
                                        <option <?php echo($agama == 'Kristen') ? "selected": "" ?>  > Kristen</option>
                                        <option <?php echo($agama == 'Katolik') ? "selected": "" ?>  > Katolik</option>
                                        <option <?php echo($agama == 'Hindu') ? "selected": "" ?>  > Hindu</option>
                                        <option <?php echo($agama == 'Budha') ? "selected": "" ?>  > Budha</option>
                                        <option <?php echo($agama == 'Atheis') ? "selected": "" ?>  > Atheis</option>
                                    </select>
                                </p>
                                <p>
                                    <label for="sekolah_asal"> Asal Sekolah : </label>
                                    <input class="form-control" type="text" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal'] ?>">
                                </p>
                                <div class="mb-3" style="margin-left: 55.5rem">
                                <input class="btn btn-primary" type="submit" value="Simpan" name="simpan">
                                        <a style="color: white; text-decoration: none;" href="list.php"><button type="button" class="btn btn-success ml-1">Kembali</button></a>
                                    </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Form Edit -->

    <!-- Footer -->
    <footer class="bg-secondary text-white text-center fixed-bottom">
        <p><b>©Copyright Information 2021</b></p>
    </footer>
    <!-- Akhir Footer -->
</body>
</html>