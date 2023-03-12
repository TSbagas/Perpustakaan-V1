<?php 
require_once('koneksi.php');
$id = $_GET['id'];
$select = mysqli_query($koneksi,"SELECT * from users where user_id='$id'");
while($data = mysqli_fetch_object($select)){
?>
<link rel="stylesheet" href="css/style.css">
<form action="update_users.php" method="POST">
            <table>
                <h1>Ubah data Users</h1>
                <tr>
                    <input type="hidden" name="id" value="<?= $data->user_id ?>">
                    <td>
                    <label for="">Username</label><br>      
                    <input type="text" name="username" value="<?=$data->username?>"></td>
                </tr>
                <tr>
                    <td>
                    <label for="">Password</label><br>      
                    <input type="password" name="password" value="<?=$data->password?>"></td>
                </tr>
                <tr>
                    <td><label for="">Password</label><br>
                    <input type="text" name="level" value="<?=$data->level?>"></td>
                </tr>
            </table>
            <input type="submit" name="tombol" class="submit"'>
</form>
<?php
}
?>