<?php
include "../koneksi.php";

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<h3>Data Anggota</h3>
</div>
<div id="content">
	<table id="tabel-tampil" class="table table-bordered table-striped table-hover">
		<tr>
			<th id="label-tampil-no">No</th>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Foto</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
		</tr>

		<?php
		$nomor = 1;
		$query = "SELECT * FROM tbanggota ORDER BY idanggota DESC";
		$q_tampil_anggota = mysqli_query($db, $query);
		if (mysqli_num_rows($q_tampil_anggota) > 0) {
			while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
				if (empty($r_tampil_anggota['foto']) or ($r_tampil_anggota['foto'] == '-'))
					$foto = "profil.png";
				else
					$foto = $r_tampil_anggota['foto'];
		?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $r_tampil_anggota['idanggota']; ?></td>
					<td><?php echo $r_tampil_anggota['nama']; ?></td>
					<td><img src="../images/<?php echo $foto; ?>" width=70px height=70px></td>
					<td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
					<td><?php echo $r_tampil_anggota['alamat']; ?></td>
				</tr>
		<?php $nomor++;
			}
		} ?>
	</table>
	<script>
		window.print();
	</script>
</div>