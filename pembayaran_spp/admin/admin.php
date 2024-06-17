<?php session_start(); ?>
<?php
if(empty($_SESSION['id_petugas'])){
    echo "<script>alert('Maaf, Anda belum login'); window.location.assign('../index2.php');</script>";
    exit();
}
if($_SESSION['level'] != 'admin'){
    echo "<script>alert('Maaf, Anda bukan admin'); window.location.assign('index2.php');</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin/Petugas SPP</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3>Aplikasi Pembayaran SPP</h3>
        <div class="alert alert-info">Anda login sebagai <b>ADMINISTRATOR</b> pada Aplikasi Pembayaran</div>
        <a href="admin.php" class="btn btn-danger">Administrator</a>
        <a href="admin.php?url=spp" class="btn btn-primary">SPP</a>
        <a href="admin.php?url=kelas" class="btn btn-primary">Kelas</a>
        <a href="admin.php?url=siswa" class="btn btn-primary">Siswa</a>
        <a href="admin.php?url=petugas" class="btn btn-primary">Petugas</a>
        <a href="admin.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
        <a href="admin.php?url=logout" class="btn btn-primary">Logout</a>

        <div class="card mt-2">
            <div class="card-body">
                <!-- Content loaded based on URL parameter 'url' -->
                <?php
                $allowed_pages = ['admin', 'spp', 'kelas', 'siswa', 'petugas', 'pembayaran', 'logout', 'tambah-pembayaran', 'proses-tambah-pembayaran', 'tambah-petugas', 'proses-tambah-petugas', 'edit-petugas',
            'proses-edit-petugas', 'hapus-petugas', 'hapus-spp', 'proses-edit-spp','edit-spp', 'edit-kelas', 'proses-edit-kelas', 'edit-kelas','edit-siswa','proses-edit-siswa',
             'proses-tambah-siswa', 'tambah-siswa','hapus-siswa','tambah-spp','proses-tambah-spp','hapus-kelas','tambah-kelas','proses-tambah-siswa',
            'proses-tambah-kelas','tambah-kelas'];
                $file = isset($_GET['url']) ? $_GET['url'] : '';
                
                if (in_array($file, $allowed_pages)) {
                    include $file . '.php';
                } else {
                    echo "<h4>Selamat Datang Di Halaman Administrator.</h4>";
                    echo "Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa/siswi di sekolah.";
                }
                ?>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.bundle.min.js"></script> <!-- Correct path if necessary -->
</body>
</html>
