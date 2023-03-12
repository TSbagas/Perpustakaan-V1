<?php
    require_once('koneksi.php');

    if(isset($_POST['tombol'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];

        if ($tambah = mysqli_query($koneksi,"INSERT INTO siswa VALUES(null,'$nis','$nama','$kelas')"))
        {
            mysqli_query($koneksi,"insert into users values(null,'$nis',md5('$nis'),'Siswa','$nis')");
            header('location:list_siswa.php');
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
                <h1>Tambah data Siswa</h1>
                <tr>
                    <td>
                    <label for="">NIS</label><br>   
                    <input type="text" name="nis" placeholder="NIS"></td>
                </tr>
                <tr>
                    
                    <td>
                    <label for="">Nama</label><br>   
                    <input type="text" name="nama" id="" placeholder="nama"></td>
                </tr>
                <tr>
                    <td>
                    <label for="">Kelas</label><br>
                    <select name="kelas" class="oks">
                        <option value="XI TI">XI TI</option>
                        <option value="XI TI">XI TI</option>
                        <option value="XI TI">XI TI</option>
                    </select>
                    </td>
                </tr>
            </table>
            <input type="submit" name="tombol" class="submit">
        </form>
    </body>
</html>

