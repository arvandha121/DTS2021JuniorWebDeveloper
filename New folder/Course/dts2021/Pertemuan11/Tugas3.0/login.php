<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="style/style_login.css">
    </head>

    <body>
        <!-- navbar -->
        <nav class="navbar navbar-light fixed-top">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1" style="font-weight: bold; color: white">RS HUSADA MANDIRI</span>
            </div>
        </nav>
        <!-- Akhir navbar -->
        
        <!-- <div class="container col-sm-5 " style="margin-left: 18rem">
            <form method="post" action="cek_login.php">
                <div class="row">
                    <div class="col">
                        <h1>Login</h1>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label>Username</label><br>
                    <input type="text" name="user" placeholder="masukkan username">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pass" placeholder="masukkan password">
                </div>
                <button type="submit" name="submit">Log in</button>
            </form>
        </div> -->
        <!-- Form Login -->
        <div class="container col-sm-5 " style="margin-left: 18rem">
            <form method="post" action="cek_login.php">
                <div class="row">
                    <div class="col">
                        <h1 class="header text-center">Login</h1>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label>Username:</label>
                    <input class="form-control"  type="text" name="user" placeholder="masukkan username">
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input class="form-control" type="password" name="pass" placeholder="masukkan password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <!-- Akhir Form Login -->

        <!-- Footer -->
        <footer class="bg-primary text-white text-center pb-2 pt-3 fixed-bottom">
            <p>Copyright By ©Arvandha</p>
        </footer>
        <!-- Akhir Footer -->
    </body>
</html>