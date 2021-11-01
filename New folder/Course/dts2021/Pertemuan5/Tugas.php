<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tugas</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>  
    <style type="text/css">
        div{
            /*background: darkblue;*/
            text-align: center;
            border: 1px solid #fff;
            padding: 10px;
            color: #fff;
        }
        .konten{
            height: 300px;
        }
        .sidebar{
            height: 300px;
        }
    </style>
</head>
<body style="background: darkblue ;">

    <?php 
        $server = "localhost"; 
        $user = "root"; 
        $password = ""; 
        $nama_database = "db_ptxyz"; 
        $db = mysqli_connect($server, $user, $password, $nama_database); 
        if ($db) {
            echo "<font color=’red’>(Data Terhubung)</font><br>";
        }else{
            echo "<font color=red> Data gagal terhubung </font> <br>".mysql_error();
        }
    ?>

    <br>

    <div>
        <h1>
            <center>
                <div class="col-md-12 col-xs-12">
                    Database PT.XYZ
                </div>
            </center>
        </h1>
    </div>

    <div class="col-md-12 col-xs-12">
        <p>
            <h5>
                Pilih tabel dibawah ini untuk ditampilkan
            </h5>
        </p>
        <center>
            <table border="5" cellspacing="5" cellpadding="25">
                <thead>
                    <tr>
                        <th>Tabel karyawan</th>
                        <th>Tabel Jabatan</th>
                        <th>Data Karyawan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <center>
                                <a href="TabelKaryawan.php">
                                    <em>Klik disini</em>
                                </a>
                            </center>
                        </td>
                        <td>
                            <center>
                                <a href="TabelJabatan.php">
                                    <em>Klik disini</em>
                                </a>
                            </center>
                        </td>
                        <td>
                            <center>
                                <a href="DataKaryawan.php">
                                    <em>Klik disini</em>
                                </a>
                            </center>
                        </td>
                    </tr>
                </tbody>
            </table>
        </center>
    </div>
    
</body>
</html>
