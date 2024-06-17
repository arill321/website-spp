<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css"> <!-- Pastikan Anda menghubungkan CSS atau Bootstrap -->
</head>
<body>
<h5>Halaman Pembayaran</h5>
<hr>
<table class="table table-striped table-bordered">
    <tr class="fw-bold">
        <td>No</td>
        <td>NISN</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Tahun SPP</td>
        <td>Nominal</td>
        <td>Sudah Dibayar</td>
        <td>Kekurangan</td>
        <td>Status</td>
        <td>History</td>
    </tr>
    <?php
    include '../koneksi.php';
    $no = 1;
    $sql = "SELECT siswa.nisn, siswa.nama, kelas.nama_kelas AS kelas, spp.tahun, spp.nominal 
            FROM siswa 
            JOIN kelas ON siswa.id_kelas = kelas.id_kelas 
            JOIN spp ON siswa.id_spp = spp.id_spp 
            ORDER BY siswa.nama ASC";
    $query = mysqli_query($koneksi, $sql);
    foreach($query as $data) { 
        $data_pembayaran = mysqli_query($koneksi, "SELECT SUM(jumlah_bayar) as jumlah_bayar FROM pembayaran WHERE nisn = '$data[nisn]'");
        $data_pembayaran = mysqli_fetch_array($data_pembayaran);
        $sudah_bayar = $data_pembayaran['jumlah_bayar'];
        $kekurangan = $data['nominal'] - $sudah_bayar;
    ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nisn'] ?></td>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['kelas'] ?></td>
            <td><?= $data['tahun'] ?></td>
            <td><?= number_format($data['nominal'], 2, ',', '.'); ?></td>
            <td><?= number_format($sudah_bayar, 2, ',', '.'); ?></td>
            <td><?= number_format($kekurangan, 2, ',', '.'); ?></td>
                <td>
                    <?php
                    if($kekurangan==0){
                        echo"<span class='badge text-bg-success'> Sudah lunas </span>";
                    }else{ ?>
                        <a href="admin.php?url=tambah-pembayaran&nisn=<?= $data['nisn'] ?>&kekurangan=<?= $kekurangan ?>" class="btn btn-success"> Pilih Dan Bayar</a>
                    <?php } ?>
                </td>
            <td>
                <a href="?url=history-pembayaran&nisn=<?= $data['nisn']?>"  class='btn btn-warning'>HISTORY</a>
            </td>
        </tr>
    <?php } ?>
</table>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
