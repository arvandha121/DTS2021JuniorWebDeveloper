<?php 

    include("koneksi.php");

    //-- Cek tombol daftar telah ditekan atau belum
    if(isset($_POST['simpan'])){

        //-- Ambil data dari form daftar
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah_asal'];

        //-- Buat query update
        $sql = "UPDATE calon_peserta SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id ";
        $query = mysqli_query($db, $sql);

        //-- Jika query berhasil
        if($query){
            header('Location: list.php?edit-sukses');
        }else{
            die("gagal menyimpan perubahan.........");
        }
    }else{
        die("Akses dilarang.......");
    }

?>