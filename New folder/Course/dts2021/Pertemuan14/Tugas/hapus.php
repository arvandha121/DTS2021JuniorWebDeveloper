<?php 

    include("koneksi.php");

    if(isset($_GET['id'])){

        //-- Ambil id dari query string
        $id = $_GET['id'];

        //-- Buat query hapus
        $sql = "DELETE FROM calon_peserta WHERE id=$id";
        $query = mysqli_query($db, $sql);

        //-- Mengecek query berhasil terhapus
        if($query){
            header('Location: list.php?data-id['.$id.']-terhapus');
        }else{
            die("gagal menghapus.....");
        }
    }else{
        die("akses dilarang......");
    }

?>