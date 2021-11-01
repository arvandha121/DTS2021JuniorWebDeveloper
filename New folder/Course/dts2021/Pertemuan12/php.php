<?php 

// //membuka file
// $file = fopen("welcome.txt", "r");

// //membaca file
// echo fgets($file);

// //menutup file
// fclose($file);

?>

<?php 

//membuka file
$data = "welcome.txt";
$bukafile = fopen($data,"r");
if(!$bukafile){
    print("file $data gagal dibuka!");
    exit;
}

while(!feof($bukafile)){
    //membaca file
    $data = fgets($bukafile,50);
    print("$data </br>");
}
fclose($bukafile);

?>