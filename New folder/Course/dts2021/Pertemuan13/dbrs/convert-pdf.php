<?php 

include 'koneksi.php';

require ('vendor/autoload.php');
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$kodeHTML = '<div style=" margin-left: 10%; font-family: Arial, Helvetica, sans-serif;">
    <h3 tyle="align: center; margin-top: 5%;">Data Anggota Dokter</h3>
    <table border="1" style="border-collapse: collapse; width: 500px;">
        <tr style="height: 30px; background-color: #007BFF;">
            <td><b>No.</b></td>
            <td><b>Id</b></td>
            <td><b>Nama</b></td>
            <td><b>Jenis Kelamin</b></td>
            <td><b>Alamat</b></td>
            <td><b>Spesialis</b></td>
        </tr>
    </table>
 </div>';
 ?>

 <?php


                        $nomor=1;
                        $query="SELECT * FROM tbanggota ORDER BY idanggota DESC";
                        $q_tampil_anggota = mysqli_query($db, $query);
                        if(mysqli_num_rows($q_tampil_anggota)>0)
                        {
                        while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
                            if(empty($r_tampil_anggota['foto'])or($r_tampil_anggota['foto']=='-'))
                                $foto = "admin-no-photo.jpg";
                            else
                                $foto = $r_tampil_anggota['foto'];
                        ?>
                        <tr>
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $r_tampil_anggota['idanggota']; ?></td>
                            <td><?php echo $r_tampil_anggota['nama']; ?></td>
                            <td><img src="images/<?php echo $foto; ?>" width=70px height=70px></td>
                            <td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
                            <td><?php echo $r_tampil_anggota['alamat']; ?></td>
                            <td><?php echo $r_tampil_anggota['spesialis'] ?></td>
                        </tr>       
                        <?php $nomor++; } 
                    }?>
 <?php

$dompdf->loadHtml($kodeHTML);
$dompdf->setPaper('A4' . 'landscape');
$dompdf->render();
ob_end_clean();
$dompdf->stream('Kartu Anggota.pdf');

 ?>