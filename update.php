<?php
    require_once('koneksi.php');

    if (isset($_POST['tombol'])){
        $bukus = $_POST['id'];
        $judul = $_POST['judul'];
        $deskripsi = $_POST['deskripsi'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        
        if ($gambars = $_FILES['update-gambar']['name']){
            move_uploaded_file($_FILES['update-gambar']['tmp_name'], 'images/'.$gambars);
            mysqli_query($koneksi,"UPDATE buku set gambar='$gambars' where buku_id='$bukus'");
        }
        else if ($gambar2 = $_POST['gambarss']){
            mysqli_query($koneksi,"UPDATE buku set gambar='$gambar2' where buku_id='$bukus'");
        }
        $update = mysqli_query($koneksi,"UPDATE buku set judul_buku='$judul',deskripsi='$deskripsi',penulis='$penulis',penerbit='$penerbit' where buku_id='$bukus'");
        if ($update){
            header('location:list_buku.php');
        }else {
           echo 'gagal';
        }
    }
   
?>