<?php 

    include'koneksi.php';
    $tgl=date('Y-m-d');
    session_start();
    if(isset($_SESSION['sesi'])){

?>


<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Home</title>
     <!-- style tanpa bootstrap -->
     <link rel="stylesheet" href="style/style_index.css">

     <!-- Style dengan bootstrap -->
     <link rel="stylesheet" href="css/bootstrap.css">

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
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pencarian.php">Pencarian</a>
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

            <!-- Salam Pengguna -->
            <div class="ml-2" id="header2">
			    <div id="nama-user">Hai <?php echo$_SESSION['sesi']; ?>!</div>
		    </div>
            <!-- Akhir Salam Pengguna -->

            <!-- Selamat Datang -->
            <div class="text-center">
                <p style="font-size: 500%; margin-top:9rem">SELAMAT DATANG!</p>
            </div>
            <!-- Akhir Selamat Datang -->

            <!-- Footer -->
            <footer class="bg-primary text-white text-center pb-2 fixed-bottom">
                <p>©Copyright Information 2021</p>
                <p>
                    
                </p>
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