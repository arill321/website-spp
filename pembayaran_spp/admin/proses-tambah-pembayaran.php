<?php 

$id_petugas = $_SESSION['id_petugas'];
$nisn = $_POST['nisn'];
$tgl_bayar = $_POST['tgl_bayar'];  // Konsisten menggunakan nama variabel yang sama
$bulan_dibayar = $_POST['bulan_dibayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$jumlah_bayar = $_POST['jumlah_bayar'];

include '../koneksi.php';
$sql = "INSERT INTO pembayaran (id_petugas, nisn, tgl_byr, bulan_dibayar, tahun_dibayar, jumlah_bayar)
VALUES ($id_petugas, '$nisn', $tgl_bayar, '$bulan_dibayar', '$tahun_dibayar', $jumlah_bayar)";

$query = mysqli_query($koneksi, $sql);
if ($query) {
    header("Location:admin.php?url=pembayaran");
} else {
    echo "<script>alert('Maaf data tidak tersimpan'); window.location.assign('admin.php?url=pembayaran');</script>";
}
?>

