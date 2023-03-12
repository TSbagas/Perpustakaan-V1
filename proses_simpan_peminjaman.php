<?php
require_once('koneksi.php');

$no_peminjaman = $_POST['id'] . "-" . date("Y-m-d");
$buku = $_POST['buku'];
$siswa = $_POST['id'];
$tgl_pinjam = date('Y-m-d');
$tgl_kembali = $_POST['tgl_kembali'];
$query = mysqli_query($koneksi,"INSERT INTO peminjaman values('$no_peminjaman','$buku','$siswa','$tgl_pinjam','$tgl_kembali')");
if($query){
    header("location:peminjaman.php");
}
?>
