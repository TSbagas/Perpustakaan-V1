<?php
    require_once('koneksi.php');
    $list = mysqli_query($koneksi,"SELECT * from users");

    ?>
    <title>List User</title>
    <link rel="stylesheet" href="css/style.css">
    <h1>List User</h1>
    <a href="tambah_users.php"><button>Tambah Users</button></a>
    <table border="1">
        <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
    <?php
    $i = 1;
    
    while($data = mysqli_fetch_object($list)){
        ?>
        <tr>
            <td><?=$i++ ?></td>
            <td><?= $data->username?></td>
            <td><?= $data->password?></td>
            <td><?= $data->level?></td>
            <td>
                <a href="ubah_users.php?id=<?= $data->user_id ?>"><button>Ubah</button></a>
                <a href="hapus.php?id=<?= $data->user_id ?>&&table=users&&where=user_id&&lokasi=list_users" onClick='return confirm("Yakin Ingin Hapus ?")';><button class="hapus">Hapus</button></a>
            </td>
        </tr>


        <?php
    }
?>
        </table>
        <a href="index.php"><button>Menu</button></a>
