<?php
$nisn = $_GET['nisn'];
$kekurangan = $_GET['kekurangan'];
include '../koneksi.php';
$sql = "SELECT siswa.nisn, siswa.nama, kelas.nama_kelas AS kelas, spp.tahun, spp.nominal, spp.id_spp 
        FROM siswa 
        JOIN kelas ON siswa.id_kelas = kelas.id_kelas 
        JOIN spp ON siswa.id_spp = spp.id_spp 
        WHERE nisn='$nisn'";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($query);
?>
<h5>Halaman Pembayaran SPP.</h5>
<a href="?url=pembayaran" class="btn btn-primary">KEMBALI</a>
<hr>
<form method="post" action="?url=proses-tambah-pembayaran&nisn=<?= $nisn; ?>">
    <input name="id_spp" value="<?=$data['id_spp']?>" type="hidden" class="form-control" required>
    <div class="form-group mb-2">
        <label>Nama Kelas</label>
        <input value="<?= $data['kelas'] ?>" class="form-control" readonly>
    </div>
    <div class="form-group mb-2">
        <label>NISN</label>
        <input readonly name="nisn" value="<?=$data['nisn']?>" type="text" class="form-control">
    </div>
    <div class="form-group mb-2">
        <label>Nama Siswa</label>
        <input readonly value="<?=$data['nama']?>" type="text" class="form-control">
    </div>
    <div class="form-group mb-2">
        <label>Tanggal Bayar</label>
        <input type="date" name="tgl_bayar" class="form-control" required>
    </div>
    <div class="form-group mb-2">
        <label>Bulan</label>
        <select name="bulan_dibayar" class="form-control" required>
            <option value="">Pilih Bulan Bayar</option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
        </select>
    </div>
    <div class="form-group mb-2">
        <label>Tahun Bayar</label>
        <select name="tahun_dibayar" class="form-control" required>
            <option value="">Pilih Tahun Bayar</option>
            <?php
            for($i = 2010; $i <= date('Y'); $i++) {
                echo "<option value='$i'>$i</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group mb-2">
        <label><b>Bayar (Jumlah Yang Harus Dibayar Adalah) </b><?= number_format($kekurangan, 2, ',', '.') ?></label>
        <input type="number" name="jumlah_bayar" max="<?= $kekurangan ?>" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">SIMPAN</button>  
        <button type="reset" class="btn btn-warning">KOSONGKAN</button>  
    </div>
</form>
