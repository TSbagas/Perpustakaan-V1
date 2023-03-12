
<html>
    <head>
        <title>Login</title>
    </head>
    <link rel="stylesheet" href="css/style.css">
    <body>
        <h1>Form Login PERPUSTAKAAN MINI</h1>
        <hr>
        <form action="proses_login.php" method="POST">
        <?php
            if (isset($_GET['err'])){
                $pesan = $_GET['err'];
                if ($pesan == 'logout'){
                    echo "Anda Berhasil Logout";
                }
                if ($pesan == 'gagal'){
                    echo "Anda gagal Login";
            }
                if ($pesan == 'ilegal'){    
                    echo "Anda Menyusup ya ? login dlu bang!";
            }
                
                }
            ?>
            <table>
            <tr>
                <td>
               
                </td>
            </tr>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
            </table>
            <input type="submit" name="login" class="submit">
        </form>
    </body>
</html>