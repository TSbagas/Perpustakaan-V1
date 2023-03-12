<link rel="stylesheet" href="css/style.css">
<?php
        $i = 1;
    require_once('koneksi.php');
    $query = mysqli_query($koneksi,"SELECT * FROM siswa");
    ?>
    <h1>List Siswa</h1>
    <a href="tambah_siswa.php"><button>Tambah</button></a>
    <table border=1 cellspacing=0 cellspacing=5>
    <tr>
        <td>NO</td>
        <td>NIS</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td>Aksi</td>
    </tr>
    
    <?php
    while($data = mysqli_fetch_object($query)){
        ?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $data->nis?></td>
                <td><?= $data->nama?></td>
                <td><?= $data->kelas?></td>
                <td><a href="ubah_siswa.php?id=<?=$data->id_siswa?>"><button>Ubah</button></a>
                <a href="hapus.php?id=<?=$data->id_siswa?>&&table=siswa&&where=id_siswa&&lokasi=list_siswa" onClick='return confirm("Yakin Ingin Hapus ?")';><button class='hapus'>Delete</button></a></td>
            </tr>
        <?php
    };
?>
    </table>
    <a href="index.php"><button>Menu</button></a>