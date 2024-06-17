<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran SPP Siswa</title>
    <!-- Correct the link to CSS file (typo in 'stylesheet' and the path possibly) -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Changed 'boostrap.min.css' and 'stylsheet' to correct ones -->
</head>
<body>
   <div class="container mt-5">
     <div class="row justify-content-md-center">
        <div class="col-md-4">
            <h4 class="text-center">Registrasi Siswa</h4>
            <div class="card">
                <div class="card-header">
                    <img src="spp3.png" alt="SPP Logo" style="width: 100%"> <!-- Added 'alt' attribute and moved width into 'style' -->
                </div>
                <div class="card-body">
                    <!-- Correct the action attribute value if "sswa" was a typo -->
                    <form action="proses-login-siswa.php" method="post">
                        <!-- Correct class names for Bootstrap (form-group and mb-2) -->
                        <div class="form-group mb-2">
                            <label for="nisn">NISN</label>
                            <input type="number" name="nisn" class="form-control" placeholder="Masukan NISN anda disini.." required>
                        </div>
                        <div class="form-group mb-2">
                            <label for="nis">NIS</label>
                            <input type="number" name="nis" class="form-control" placeholder="Masukan NIS anda disini.." required>
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                    <a href="index2.php"> Login sebagai Administrator/Petugas </a>
                </div>
            </div>
        </div>
     </div>
   </div>

<!-- Correct the script tag (misformatted) -->
<script src="js/bootstrap.bundle.min.js"></script> <!-- Changed 'src' placement and corrected file name -->
</body>
</html>
