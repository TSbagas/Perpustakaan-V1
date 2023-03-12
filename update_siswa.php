<?php
    require_once('koneksi.php');

    if (isset($_POST['tombol'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = $_POST['level'];
        $update_user = mysqli_query($koneksi,"UPDATE siswa set nis='$username' ,nama='$password',kelas='$level' where id_siswa='$id'");
        if ($update_user){
            header('location:list_siswa.php');
        }else {
           echo 'gagal';
        }
    }
   
?>