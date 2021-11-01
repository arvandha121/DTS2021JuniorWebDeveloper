<?php 

include 'koneksi.php';

?>

<!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>conver-pdf</title>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
 </head>
 <body>
 	<div class="row">
 		<div class="col">
 			<table class="table table-bordered">
 				<thead class="table-success">
 					<?php 

 					$kodeHTML = '
 					<tr>
						<td><b>No.</b></td>
						<td><b>Id</b></td>
						<td><b>Nama</b></td>
						<td><b>Foto</b></td>
						<td><b>Jenis Kelamin</b></td>
						<td><b>Alamat</b></td>
						<td><b>Spesialis</b></td>
					</tr>';

 					 ?>
	 			</thead>';

	 			  ?>
	 				<?php

	 					require_once __DIR__ . '/vendor/autoload.php';

						$mpdf = new Dompdf\Dompdf;


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
 			</table>
 		</div>
 	</div>
 </body>
 </html>