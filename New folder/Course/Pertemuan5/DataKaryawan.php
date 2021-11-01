<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabel karyawan</title>
</head>
<body>
	<table border="5" cellspacing="5" cellpadding="25">
		<thead>
			<tr>
				<th>id</th>
				<th>nama_karyawan</th>
				<th>alamat</th>
				<th>jenis_kelamin</th>
				<th>telp</th>
			</tr>
		</thead>

		<?php 
			$server = "localhost"; 
		    $user = "root"; 
		    $password = ""; 
		    $nama_database = "db_ptxyz"; 
		    $connect = mysqli_connect($server, $user, $password, $nama_database); 
		    if ($connect) {
	            echo "<font color=’red’>(Data Terhubung)</font><br>";
	        }else{
	            echo "<font color=red> Data gagal terhubung </font> <br>".mysql_error();
	        }

	        $query = "select * from karyawan";
			$result = mysqli_query($connect, $query);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_array($result)) {
		?>

		<tbody>
			<tr>
				<td>
					<?php
						echo $row['id'];
					?>
				</td>
				<td>
					<?php
						echo $row['nama_karyawan'];
					?>
				</td>
				<td>
					<?php
						echo $row['alamat'];
					?>
				</td>
				<td>
					<?php
						echo $row['jenis_kelamin'];
					?>
				</td>
				<td>
					<?php
						echo $row['telp'];
					?>
				</td>
				<?php
						}
					}else{
						echo "Kosong";
					}
				?>
			</tr>
		</tbody>
	</table>
	<br>
	<a href="Tugas.php">
		<strong>Kembali Ke Halaman Pertama</strong>
	</a>
</body>
</html>