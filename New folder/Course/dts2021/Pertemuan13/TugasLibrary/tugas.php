<?php 

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
		<tr>
			<td>12</td>
			<td>AG021</td>
			<td>Arvandha</td>
			<td>Pria</td>
			<td>Jl. Brantas No.21</td>
			<td>Paru-paru</td>
		</tr>
	</table>
 </div>';

$dompdf->loadHtml($kodeHTML);
$dompdf->setPaper('A4' . 'landscape');
$dompdf->render();
ob_end_clean();
$dompdf->stream('Kartu Anggota.pdf');

 ?>