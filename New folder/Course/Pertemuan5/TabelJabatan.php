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
				<th>jabatan</th>
				<th>golongan</th>
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

	        $query = "select * from jabatan";
			$result = mysqli_query($connect, $query);

			if (mysqli_num_rows($result) < 0) {
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
						echo $row['jabatan'];
					?>
				</td>
				<td>
					<?php
						echo $row['golongan'];
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