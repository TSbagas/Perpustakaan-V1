<?php 
require_once('koneksi.php');
$buku_id = $_GET['id'];
$select = mysqli_query($koneksi,"SELECT * from buku where buku_id='$buku_id'");
while($data = mysqli_fetch_object($select)){
?>
<link rel="stylesheet" href="css/style.css">
<form action="update.php" method="POST" enctype="multipart/form-data">
<table>
    <tr>			
        <td>Nama</td>
        <td>
            <input type="hidden" name="id" value="<?= $data->buku_id ?>">
            <input type="text" name="judul" value="<?= $data->judul_buku ?>">
        </td>
    </tr>
    <tr>			
        <td>Deskripsi</td>
        <td>
            <textarea name="deskripsi" id="" cols="30" rows="10"><?= $data->deskripsi ?></textarea>
        </td>
    </tr>
    <tr>
        <td>Penulis</td>
        <td><input type="text" name="penulis" value="<?= $data->penulis ?>"></td>
    </tr>
    <tr>
        <td>penerbit</td>
        <td><input type="text" name="penerbit" value="<?= $data->penerbit ?>"></td>
    </tr>
    <tr>
        <td>
            <select name="gambarss">
                <option value="<?= $data->gambar ?>">Current : <?= $data->gambar ?></option>
                <?php
                $i = 1;
                $dir = "images/";
                $files = scandir($dir);
                foreach ($files as $file){
                    if($file != "." && $file != ".."){
                        ?>
                <option value="<?=$file?>" name="<?= $i++ ?>"><?=$file?></option>
                        <?php
                    }
                }
                ?>
            </select>
       </td>
        <td>
        <label for="gbr"><img src="images/<?= $data->gambar?>" alt="" height='90'></label>
            <input type="file" name="update-gambar" hidden id="gbr">
    </td>
    </tr>
    <tr>
    </tr>	
</table>
        <input type="submit" value="SIMPAN" name="tombol" class="submit">
</form>
<?php
}
?>