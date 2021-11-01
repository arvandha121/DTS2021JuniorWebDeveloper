<?php 

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "dbpendaftaran";

//mengkoneksi database
$db = mysqli_connect($server, $user, $password, $nama_database);

//mengecek Error
if(!$db){
    die("Gagal terhubung dengan database" . mysqli_connect_error());
}

?>