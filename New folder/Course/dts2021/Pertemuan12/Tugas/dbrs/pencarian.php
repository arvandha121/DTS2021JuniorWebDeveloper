<?php 

    include'koneksi.php';
    $tgl=date('Y-m-d');
    session_start();
    if(isset($_SESSION['sesi'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencarian</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style/pencarian.css">
</head>
<body>
    <div id="container">
        <div id="header">

            <!-- Navbar -->
            <nav class="navbar navbar-expand-xl navbar-dark bg-primary shadow fixed-top">
                <div class="container">
                    <a class="navbar-brand" style="font-weight: bold" href="index.php">RS HUSADA MANDIRI</a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="pencarian.php">Pencarian</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
            <!-- Akhir Navbar -->

            <!-- Header Grid -->
            <div id="container-grid" class="text-center" style="background-color: grey">
                <div class="row">
                    <div class="col">
                        <h2 style="margin-top: 3rem">Pencarian Informasi Data Dokter</h2>
                    </div>
                </div>
            </div>
            <!-- Akhir Header Grid -->

            <!-- Isi -->
            <div class="text-center mt-3 mb-5" style="font-family: Segoe UI;" id="label-page">
                <h3>Tampil Data Anggota</h3>
            </div>
            <div id="content">
                <div class="row">
                    <div class="col">
                        <div style="margin-left: 18rem; margin-top: -1.34rem;;">
                            <p id="tombol-tambah-container">
                                <a href="pages/anggota-input.php" class="tombol">Tambah Anggota</a>  |  
                                <a target="_blank" href="pages/cetak.php">
                                    cetak
                                </a>
                            </p>
                        </div>
                        <FORM CLASS="form-inline" METHOD="POST">
                            <div align="right">
                                <form method=post>
                                    <input type="text" name="pencarian" placeholder="cari....">
                                    <input style="color:white" class="bg-primary" type="submit" name="search" value="search" class="tombol">
                                </form>
                        </FORM>
                        <table style="margin-left: 17rem; margin-bottom: 0rem" id="tabel-tampil" border="5" cellspacing="0" cellpadding="15" class="text-center mt-4">
                            <tr>
                                <th id="label-tampil-no">No</td>
                                <th>ID Anggota</th>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Spesialis</th>
                                <th id="label-opsi">Opsi</th>
                            </tr>
                            <?php
                        $batas = 5;
                        extract($_GET);
                        if(empty($hal)){
                            $posisi = 0;
                            $hal = 1;
                            $nomor = 1;
                        }
                        else {
                            $posisi = ($hal - 1) * $batas;
                            $nomor = $posisi+1;
                        }	
                        if($_SERVER['REQUEST_METHOD'] == "POST"){
                            $pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
                            if($pencarian != ""){
                                $sql = "SELECT * FROM tbanggota WHERE nama LIKE '%$pencarian%'
                                        OR idanggota LIKE '%$pencarian%'
                                        OR jeniskelamin LIKE '%$pencarian%'
                                        OR alamat LIKE '%$pencarian%'
                                        OR spesialis LIKE '%$pencarian%'";
                                
                                $query = $sql;
                                $queryJml = $sql;	
                                        
                            }
                            else {
                                $query = "SELECT * FROM tbanggota LIMIT $posisi, $batas";
                                $queryJml = "SELECT * FROM tbanggota";
                                $no = $posisi * 1;
                            }			
                        }
                        else {
                            $query = "SELECT * FROM tbanggota LIMIT $posisi, $batas";
                            $queryJml = "SELECT * FROM tbanggota";
                            $no = $posisi * 1;
                        }
                        
                        //$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";
                        $q_tampil_anggota = mysqli_query($db, $query);
                        if(mysqli_num_rows($q_tampil_anggota)>0)
                        {
                        while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
                            if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
                                $foto = "admin-no-photo.jpg";
                            else
                                $foto = $r_tampil_anggota['foto'];
                        ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $r_tampil_anggota['idanggota']; ?></td>
                            <td><?php echo $r_tampil_anggota['nama']; ?></td>
                            <td><img src="images/<?php echo $foto; ?>" width=70px height=70px></td>
                            <td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
                            <td><?php echo $r_tampil_anggota['alamat']; ?></td>
                            <td><?php echo $r_tampil_anggota['spesialis']; ?></td>
                            <td>
                                <div class="tombol-opsi-container">
                                    <button type="button" class="bg-primary">
                                        <a style="color: white; text-decoration: none" target="_blank" href="pages/cetak_kartu.php?id=<?php echo $r_tampil_anggota['idanggota'];?>" class="tombol">Cetak Kartu</a>
                                    </button>
                                </div>
                                <div class="tombol-opsi-container">
                                    <button type="button" class="bg-warning">
                                        <a style="color: white; text-decoration: none" href="pages/anggota-edit.php?id=<?php echo $r_tampil_anggota['idanggota'];?>" class="tombol">Edit</a>
                                    </button>
                                </div>
                                <div class="tombol-opsi-container">
                                    <button type="button" class="bg-danger">
                                        <a style="color: white; text-decoration: none" href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>" onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="tombol">Hapus</a>
                                    </button>
                                </div>
                            </td>			
                        </tr>
                        <?php $nomor++; } 
                        }
                        else {
                            echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
                        }?>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Akhir Isi -->
            
            <!-- Banyak Data -->
            <?php
                if(isset($_POST['pencarian'])){
                if($_POST['pencarian']!=''){
                    echo "<div style=\"float:left;\">";
                    $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
                    echo "Data Hasil Pencarian: <b>$jml</b>";
                    echo "</div>";
                }
                }
                else{ 
            ?>
            <div id="banyak-data" style="float: left; margin-left: 18rem;">		
                <?php
                    $jml = mysqli_num_rows(mysqli_query($db, $queryJml));
                    echo "Jumlah Data : <b>$jml</b>";
                ?>			
                </div>		
                <div id="halaman-data" class="pagination mb-5 mb-5" style="margin-left: 73rem; margin-botton: 15rem">		
                        <?php
                        $jml_hal = ceil($jml/$batas);
                        for($i=1; $i<=$jml_hal; $i++){
                            if($i != $hal){
                                echo "<a href=\"?p=anggota&hal=$i\">$i</a>";
                            }
                            else {
                                echo "<a class=\"active\">$i</a>";
                            }
                        }
                        ?>
                </div>
            <?php
            }
            ?>
            <!-- Akhir Banyak Data -->

            <!-- Header Grid Bawah -->
            <div id="container-grid" class="text-center" style="background-color: white">
            </div>
            <!-- Akhir Header Grid Bawah -->
            
            <!-- Footer -->
            <footer class="bg-primary text-white text-center mt-5 pb-5 fixed-bottom">
                <p>©Copyright Information 2021</p>
            </footer>
            <!-- Akhir Footer -->
            
        </div>
    </div>
</body>
</html>

<?php
}
else {
	echo "<script>
		alert('Anda Harus Login Dahulu!');
	</script>";
	header('location:login.php');
}
?>