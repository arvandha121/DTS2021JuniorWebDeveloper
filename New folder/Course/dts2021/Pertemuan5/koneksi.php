<?php 
    $server = "localhost"; 
    $user = "root"; 
    $password = ""; 
    $nama_database = "db_siswa"; 
    $db = mysqli_connect($server, $user, $password, $nama_database); 
    if ($db) {
            echo "<font color=’red’>(Data Terhubung)</font><br>";
    }else{
            echo "<font color=red> Data gagal terhubung </font> <br>".mysql_error();
        }
?>