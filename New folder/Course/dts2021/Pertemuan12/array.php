<?php 

$buah = array();
$hobi = [];

$makanan = array("tempe","sate","nasgor","miegor");
$minuman = array("jus","teh","jeruk");

$anggota[1] = "Adi";
$anggota[2] = "Ida";

// menampilkan isi array

echo $makanan[0]."</br>";
echo $makanan[1]."</br>";

//dengan perulangan for

for ($i=0; $i < count($makanan) ; $i++) { 
    echo $makanan[$i].",";
}

echo "</br></br>";

echo $minuman[2]."</br>";

for ($i=0; $i < count($minuman) ; $i++) { 
    echo $minuman[$i].",";
}

//dengan perulangan foreach
echo "</br></br>";

foreach ($minuman as $isi){
    echo $isi.",";
}

echo "</br></br>";

//dengan while

$i=0;
while($i < count($minuman)){
    echo $minuman[$i]."</br>";
    $i++;
}
echo "</br></br>";
//menambahkan elemen index

$makanan = array("tempe","sate","nasgor","miegor");

$makanan[4] = "bihun";
$makanan[] = "pizza";

//cetak
foreach($makanan as $a){
    echo $a.",";
}

echo "</br></br>";

//jika ada isi didalam index dan ditambah index yang ada
$makanan = array("tempe","sate","nasgor","miegor");

$makanan[2] = "gulai";

foreach($makanan as $a){
    echo $a.",";
}



$artikel = [
    "judul" => "Belajar pemograman",
    "penulis" => "Andi Alamsyah",
    "terbit" => "2021"
];

echo "<h2?>".$artikel["judul"]."</h2>";


//matriks dua dimensi
$matik = [
    [2,3,4],
    [7,5,0],
    [4,3,8]
];

//cara akses isi matrik
echo $matik[1][0];

?>