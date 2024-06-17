<?php 

$koneksi = mysqli_connect('localhost','root','','database_baru');

if(!$koneksi){
    echo "Koneksi Anda Gagal!!";
}
?>