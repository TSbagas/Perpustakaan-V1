<?php
    require_once('koneksi.php');

    if(isset($_POST['tombol'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        if ($tambah = mysqli_query($koneksi,"INSERT INTO users VALUES(null,'$username','$password','Petugas','')"))
        {
            header('location:list_users.php');
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
                <h1>Tambah data Users</h1>
                <tr>
                    <td>
                    <label for="">Username</label><br>   
                    <input type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                    
                    <td>
                    <label for="">Password</label><br>   
                    <input type="password" name="password" id="" placeholder="Password"></td>
                </tr>
                <tr>
                </tr>
            </table>
            <input type="submit" name="tombol" class="submit">
        </form>
    </body>
</html>

