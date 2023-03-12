<?php 
require_once('koneksi.php');
$id = $_GET['id'];
$select = mysqli_query($koneksi,"SELECT * from siswa where id_siswa='$id'");
while($data = mysqli_fetch_object($select)){
?>
<link rel="stylesheet" href="css/style.css">
<form action="update_siswa.php" method="POST">
            <table>
                <h1>Ubah data Siswa</h1>
                <tr>
                    <input type="hidden" name="id" value="<?= $data->id_siswa ?>">
                    <td>
                    <label for="">NIS</label><br>      
                    <input type="text" name="username" value="<?=$data->nis?>"></td>
                </tr>
                <tr>
                    <td>
                    <label for="">NAMA</label><br>      
                    <input type="text" name="password" value="<?=$data->nama?>"></td>
                </tr>
                <tr>
                    <td><label for="">Kelas</label><br>
                    <input type="text" name="level" value="<?=$data->kelas?>"></td>
                </tr>
            </table>
            <input type="submit" name="tombol" class="submit"'>
</form>
<?php
}
?>