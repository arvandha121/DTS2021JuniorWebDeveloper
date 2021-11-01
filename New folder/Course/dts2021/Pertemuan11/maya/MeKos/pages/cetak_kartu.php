<?php
include "../koneksi.php";
$id_anggota = $_GET['id'];
$q_tampil_anggota = mysqli_query($db, "SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
$r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota);
if (empty($r_tampil_anggota['foto']) or ($r_tampil_anggota['foto'] == '-'))
	$foto = "profil.png";
else
	$foto = $r_tampil_anggota['foto'];
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div id="label-page">
	<h3>Kartu Anggota</h3><br>
</div>
<div id="content">
	<table id="tabel-input" class="table table-bordered table-striped table-hover">
		<tr>
			<th class="label-formulir">Foto</th>
			<td class="isian-formulir">
				<img src="../images/<?php echo $foto; ?>" width=70px height=75px>
			</td>
		</tr>
		<tr>
			<th class="label-formulir">ID Anggota</th>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['idanggota']; ?></td>
		</tr>
		<tr>
			<th class="label-formulir">Nama</th>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['nama']; ?></td>
		</tr>
		<tr>
			<th class="label-formulir">Jenis Kelamin</th>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
		</tr>
		<tr>
			<th class="label-formulir">Alamat</th>
			<td class="isian-formulir"><?php echo $r_tampil_anggota['alamat']; ?></td>
		</tr>
	</table>
</div>
<script>
	window.print();
</script>