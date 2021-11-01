<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" href="style/style_login.css">
    </head>

    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-light fixed-top">
            <div class="container-fluid">
                <span class="navbar-brand mb-0 h1" style="font-weight: bold; color: white">BNSP-LSP-1565-IDa</span>
            </div>
        </nav>
        <!-- Akhir Navbar -->

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
        <footer class="bg-primary text-white text-center pb-2 fixed-bottom">
            <p>Copyright Admin Information 2021</p>
        </footer>
        <!-- Akhir Footer -->
    </body>
</html>