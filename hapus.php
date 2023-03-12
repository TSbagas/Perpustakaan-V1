<?php
    require_once('koneksi.php');
    $id = $_GET['id'];
    $table = $_GET['table'];
    $wheres = $_GET['where'];
    $lokasi = $_GET['lokasi'];
    $hapus = mysqli_query($koneksi,"DELETE FROM $table where $wheres='$id'");
    if ($hapus){
        header("location:$lokasi.php");
    }else {
       echo 'gagal';
    }
?> 