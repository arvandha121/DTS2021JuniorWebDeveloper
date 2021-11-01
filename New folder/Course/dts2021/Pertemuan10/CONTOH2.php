<?php 

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

	echo "FUNGSI PROSEDUR TIDAK MENGEMBALIKAN NILAI";
	echo "</br>";
	function perkalian($bil_1, $bil_2){
	   $hasil = $bil_1 * $bil_2;
	   return $hasil;
	}
	echo "5 x 10 = ".perkalian(5, 10);

	echo "</br>";
	echo "</br>";

	echo "PARAMETER FUNGSI PASSING VARIABEL VALUE";
	echo "</br>";
	function tambahSatu($value){
		$value = value + 1;
	}

	$a = 5;
	tambahSatu($a);
	echo $a;
 ?>