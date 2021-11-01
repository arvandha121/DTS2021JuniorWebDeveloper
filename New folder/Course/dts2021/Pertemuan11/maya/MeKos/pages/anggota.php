<div id="label-page">
	<h3>Tampil Data Penyewa</h3>
</div>
<br>
<div id="tombol-tambah-container" class="d-flex">
	<span class="col-8">
		<a href="registrasi.php" class="btn btn-danger text-white">Tambah Penyewa</a>
	</span>
	<span class="col-11">
		<!-- Search Bar -->
		<form method="post" class="form-inline">
			<input class="form-control mr-sm-2 col-3" type="text" placeholder="Masukkan kata kunci" name="pencarian">
			<button class="btn btn-danger" type="submit" name="search" value="search" style="padding-left: 2%; padding-right: 2%;">Cari</button>
		</form>
	</span>
</div>
<br>
<table class="table table-bordered table-striped table-hover" id="tabel-tampil">
	<tr class="bg-danger text-white">
		<th>ID Penyewa</th>
		<th>Nama</th>
		<th>Foto</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th id="label-opsi">Opsi</th>
	</tr>

	<?php
	$batas = 5;
	extract($_GET);
	if (empty($hal)) {
		$posisi = 0;
		$hal = 1;
		$nomor = 1;
	} else {
		$posisi = ($hal - 1) * $batas;
		$nomor = $posisi + 1;
	}
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$pencarian = trim(mysqli_real_escape_string($db, $_POST['pencarian']));
		if ($pencarian != "") {
			$sql = "SELECT * FROM tbanggota WHERE nama LIKE '%$pencarian%'
						OR idanggota LIKE '%$pencarian%'
						OR jeniskelamin LIKE '%$pencarian%'
						OR alamat LIKE '%$pencarian%'";

			$query = $sql;
			$queryJml = $sql;
		} else {
			$query = "SELECT * FROM tbanggota LIMIT $posisi, $batas";
			$queryJml = "SELECT * FROM tbanggota";
			$no = $posisi * 1;
		}
	} else {
		$query = "SELECT * FROM tbanggota LIMIT $posisi, $batas";
		$queryJml = "SELECT * FROM tbanggota";
		$no = $posisi * 1;
	}

	//$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";
	$q_tampil_anggota = mysqli_query($db, $query);
	if (mysqli_num_rows($q_tampil_anggota) > 0) {
		while ($r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota)) {
			if (empty($r_tampil_anggota['foto']) or ($r_tampil_anggota['foto'] == '-'))
				$foto = "profil.png";
			else
				$foto = $r_tampil_anggota['foto'];
	?>
			<tr>
				<td><?php echo $r_tampil_anggota['idanggota']; ?></td>
				<td><?php echo $r_tampil_anggota['nama']; ?></td>
				<td><img src="images/<?php echo $foto; ?>" width=50px height=35px></td>
				<td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
				<td><?php echo $r_tampil_anggota['alamat']; ?></td>
				<td>
					<div><a target="_blank" href="pages/cetak_kartu.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>" class="text-danger">Cetak Kartu</a></div>
					<div><a href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota']; ?>" class="text-danger"">Edit</a></div>
					<div><a href=" proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>" onclick="return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="text-danger">Hapus</a></div>
				</td>
			</tr>
	<?php $nomor++;
		}
	} else {
		echo "<tr><td colspan=6>Data Tidak Ditemukan</td></tr>";
	} ?>
</table>
<?php
if (isset($_POST['pencarian'])) {
	if ($_POST['pencarian'] != '') {
		echo "<div style=\"float:left;\">";
		$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
		echo "Data Hasil Pencarian: <b>$jml</b>";
		echo "</div>";
	}
} else { ?>
	<div style="float: left;">
		<?php
		$jml = mysqli_num_rows(mysqli_query($db, $queryJml));
		echo "Jumlah Data : <b>$jml</b>";
		?>
	</div>
	<div class="pagination" style="float: right;">
		<?php
		$jml_hal = ceil($jml / $batas);
		for ($i = 1; $i <= $jml_hal; $i++) {
			if ($i != $hal) {
				echo "<a href=\"?p=anggota&hal=$i\">$i</a>";
			} else {
				echo "<a class=\"active\">$i</a>";
			}
		}
		?>
		<a target="_blank" href="pages/cetak.php"><img src="images/print.png" height="30px" height="30px"></a>
	</div>
	<br><br>
<?php
}
?>
</div>