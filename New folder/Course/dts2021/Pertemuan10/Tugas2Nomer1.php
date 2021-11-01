<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tugas2</title>
</head>
<body>
	<p>==================================</p>
	<h2>MENU KEDAI ARVANDHA</h2>
	<p>==================================</p>
	<?php 

	// Nomer1
	// Membuat program berbasis web dengan minimal 8 menu

	echo "---------------------------------------------</br>";
	echo "Silahkan pilih menu dibawah ini : </br>";
	echo "---------------------------------------------</br>";
	echo "1. Nasi Goreng </br>";
	echo "2. Mie Goreng </br>";
	echo "3. Mie Kuah </br>";
	echo "4. Mie Bihun Goreng</br>";
	echo "5. Capcay </br>";
	echo "6. Oseng sayur </br>";
	echo "7. Telur Dadar </br>";
	echo "8. Ampela Ati </br>";
	echo "---------------------------------------------</br>";
	echo "Pilihan menu : ".$pilih = 6;

	if ($pilih == 1) {
		echo "</br> Nasi Goreng </br>";
	}else if ($pilih == 2) {
		echo "</br> Mie Goreng </br>";
	}else if($pilih == 3){
		echo "</br> Mie Kuah</br>";
	}else if($pilih == 4){
		echo "</br> Mie Bihun Goreng</br>";
	}else if($pilih == 5){
		echo "</br> Capcay</br>";
	}else if($pilih == 6){
		echo "</br> Oseng sayur</br>";
	}else if($pilih == 7){
		echo "</br> Telur Dadar</br>";
	}else if($pilih == 8){
		echo "</br> Ampela Ati</br>";
	}


	//Nomer2
	//Membuat program perulangan dengan jeda

	// for ($i=1; $i<10 ; $i+=2) { 
	// 	echo $i.",";
	// }

	// echo "</br>";

	// $i = 1;
	// while ($i <= 10) {
	// 	echo $i.",";
	// 	$i+=3;
	// }

	 ?>
</body>
</html>
