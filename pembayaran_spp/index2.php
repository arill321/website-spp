<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/Petugas SPP</title>
    <!-- Correct the link to CSS file (typo in 'stylesheet' and the path possibly) -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Changed 'boostrap.min.css' and 'stylsheet' to correct ones -->
</head>
<body>
   <div class="container mt-5">
     <div class="row justify-content-md-center">
        <div class="col-md-4">
            <h4 class="text-center">Login Admin / Petugas</h4>
            <div class="card">
                <div class="card-header">
                    <img src="spp4.png" alt="SPP Logo" style="width: 100%"> <!-- Added 'alt' attribute and moved width into 'style' -->
                </div>
                <div class="card-body">
                    <!-- Correct the action attribute value if "sswa" was a typo -->
                    <form action="proses-login-petugas.php" method="post">
                        <!-- Correct class names for Bootstrap (form-group and mb-2) -->
                        <div class="form-group mb-2">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukan username anda disini.." required>
                        </div>
                        <div class="form-group mb-2">
                            <label>password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukan password anda disini.." required>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    <a href="index.php"> Login sebagai Siswa </a>
                </div>
            </div>
        </div>
     </div>
   </div>

<!-- Correct the script tag (misformatted) -->
<script src="js/bootstrap.bundle.min.js"></script> <!-- Changed 'src' placement and corrected file name -->
</body>
</html>
