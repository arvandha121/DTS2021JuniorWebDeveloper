<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styleRegistrasi.css">
</head>

<body>
    <div class="container">
        <p class="title"><b>Tambah Data Penyewa</b></p>
        <form action="proses/anggota-input-proses.php" method="post" class="form" enctype="multipart/form-data">
            <div class="input-field">
                <label for="id_anggota">ID Penyewa</label>
                <input type="text" placeholder="Masukkan kode penyewa" name="id_anggota" class="inputan">
            </div>
            <div class="input-field">
                <label for="nama">Nama Lengkap</label>
                <input type="text" placeholder="Masukkan nama lengkap" name="nama" class="inputan" required>
            </div>
            <div class="input-field">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <input type="text" placeholder="Masukkan jenis kelamin" name="jenis_kelamin" class="inputan" required>
            </div>
            <div class="input-field">
                <label for="alamat">Alamat</label>
                <textarea rows="2" cols="40" placeholder="Masukkan alamat lengkap" name="alamat" class="inputan"></textarea>
            </div>
            <div class="input-field">
                <label for="foto">Upload Foto</label>
                <input type="file" name="foto" class="inputan">
            </div>
            <input type="submit" name="simpan" value="Simpan" class="submit">
        </form>
    </div>
    <div class="gambar">
        <img src="images/login.png" alt="gambar manusia" class="gambars">
    </div>
</body>

</html>