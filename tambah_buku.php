<?php
    require_once('koneksi.php');

    if(isset($_POST['tombol'])){
        $judul = $_POST['judul_Buku'];
        $deskripsi = $_POST['deskripsi'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $gambar = $_FILES['gambar']['name'];
        if ($gambar){
            move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/'.$gambar);
        }

        if ($tambah = mysqli_query($koneksi,"INSERT INTO buku (buku_id,judul_buku,deskripsi,penulis,penerbit,gambar) 
        VALUES(null,'$judul','$deskripsi','$penulis','$penerbit','$gambar')"))
        {
            header('location:list_buku.php');
        }else {
            echo 'gagal';
        }

        
    }
   
?>
<html>
<link rel="stylesheet" href="css/style.css">
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>
                <h1>Tambah data</h1>
                <tr>
                    <td>
                        <label for="">Judul Buku</label><br>
                        <input type="text" name="judul_Buku"></td>
                </tr>
                <tr>
                    <td>
                    <label for="">Deskripsi</label><br>
                    <textarea name="deskripsi" cols="30" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td>
                    <label for="">Penulis</label><br>
                    <input type="text" name="penulis"></td>
                </tr>
                <tr>
                    <td>
                    <label for="">Penerbit</label><br>
                    <input type="text" name="penerbit"></td>
                </tr>
                <tr>
                    <td><label for="gambar">Gambar</label></td>
                    <td><input type="file" name="gambar" hidden id="gambar"></td>
                </tr>
            </table>
            <input type="submit" name="tombol" class="submit">
        </form>
    </body>
</html>

