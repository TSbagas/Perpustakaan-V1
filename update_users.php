<?php
    require_once('koneksi.php');

    if (isset($_POST['tombol'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $level = $_POST['level'];
        $update_user = mysqli_query($koneksi,"UPDATE users set username='$username' ,password='$password',level='$level' where user_id='$id'");
        if ($update_user){
            header('location:list_users.php');
        }else {
           echo 'gagal';
        }
    }
   
?>