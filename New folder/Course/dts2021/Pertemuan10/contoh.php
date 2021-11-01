<?php 
	echo "IF STATEMENT";
	echo "</br>";
	$usia = 30;
	if ($usia >= 29) {
		echo "Maaf... Anda tidak memenuhi syarat untuk pelatihan ini;
	}

	echo "</br>";
	echo "</br>";

	echo "IF - ELSE STATEMENT";
	echo "</br>";
		$nilai = 80;
		if ($nilai > 80) {
			echo " selamat anda lulus";
		}else{
			echo "maaf anda belom lulus!";
		}

	echo "</br>";
	echo "</br>";

	echo "SWITCH CASE STATEMENT";
	echo "</br>";
		$plat = "AB";
		switch ($plat) {
			case 'B':
				echo "JAKARTA";
				break;
			
			default:
				echo "Tidak diketahui";
				break;
		}

	echo "</br>";
	echo "</br>";

	echo "FOR LOOP STATEMENT";
	echo "</br>";
		for ($i=1; $i < 10 ; $i++) {
			echo "Perulangan ke- ".$i." </br>";
		}

	echo "</br>";
	echo "</br>";

	echo "WHILE LOOP STATEMENT";
	echo "</br>";
		$i = 1;
		while ($i<20) {
			echo "Perulangan ke- ".$i." </br>";
			$i++;
		}

	echo "</br>";
	echo "</br>";

	// echo "DO WHILE LOOP STATEMENT";
	// echo "</br>";
	// 	$i = 1;
	// 	do{
	// 		echo "Perulangan ke- ".$i." </br>";
	// 		$i++
	// 	}while ($i<=15);

	// echo "ARRAY FOREACH LOOP STATEMENT"
	// echo "</br>";
	// $nama = array("Adi", "Budi", "Carli", "Dedy");
	// foreach ($nama as $val) {
	// 	echo "val";
	// 	echo "</br>";
	// }

	echo "BREAK KELUAR DARI PERULANGAN";
	echo "</br>";
	for($i=1;$i<=6;$i++){
	   if($i == 4){
	      	break;
	   }
	   echo "Nilai i : ".$i."<br />";
	}

	echo "</br>";
	echo "</br>";

	echo "CONTINUE ATAU SKIP DARI PERULANGAN";
	echo "</br>";
	for($i=1;$i<=6;$i++){
	   if($i == 3){
	      	continue;
	   }
	   echo "Nilai i : ".$i."<br />";
	}

	echo "</br>";
	echo "</br>";


	echo "FUNGSI PROSEDUR TIDAK MENGEMBALIKAN NILAI";
	echo "</br>";
	function sayHello(){
	   echo "Hello..<br />";
	}
	sayHello();
	sayHello();
	sayHello();

	echo "</br>";
	echo "</br>";

	echo "EXIT DARI PERULANGAN";
	echo "</br>";

	for($i=1;$i<=6;$i++){
	   if($i == 4){
	      	exit();
	   }
	   echo "Nilai i : ".$i."<br />";
	}

 ?>