<?php
session_start();
$_SESSION['sesi'] = NULL;

include "koneksi.php";
if (isset($_POST['submit'])) {
    $user    = isset($_POST['email']) ? $_POST['email'] : "";
    $pass    = isset($_POST['password']) ? $_POST['password'] : "";
    $qry    = mysqli_query($db, "SELECT * FROM pemilik_kos WHERE email_pemilik = '$user' AND password_pemilik = '$pass'");
    $sesi    = mysqli_num_rows($qry);

    if ($sesi == 1) {
        $data_admin    = mysqli_fetch_array($qry);
        $_SESSION['id_pemilik'] = $data_admin['id_pemilik'];
        $_SESSION['sesi'] = $data_admin['nama_pemilik'];

        echo "<script>alert('Anda berhasil Log In');</script>";
        echo "<meta http-equiv='refresh' content='0; url=homePemilik.php?user=$sesi'>";
    } else {
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        echo "<script>alert('Anda Gagal Log In');</script>";
    }
} else {
    include "index.php";
}
//EOF
