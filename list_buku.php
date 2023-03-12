<?php
    #this is database
    require_once("koneksi.php");

    $query = mysqli_query($koneksi,"SELECT * from buku");
    // menampilkan data dalam bentuk array
    // // print("<img src='images/$data[gambar]'/>")
    // while($data = mysqli_fetch_object($query)){
    //     echo $data->judul_buku . "<br>";
    // }
?>
<html>
    <head>
    <link rel="stylesheet" href="css/style.css">
    <title>List</title>
    
</head>
<body>
    <h1>Daftar List Buku</h1>
    <a href='tambah_buku.php' class='tambah'><button>Tambah Buku</button></a>
<table border=1 class='box'>
        <tr class='Judul'>
            <td>No</td>
            <td>Judul Buku</td>
            <td>Deskripsi</td>
            <td>Penulis</td>
            <td>Penerbit</td>
            <td>Cover</td>
            <td>Aksi</td>
        </tr>
        <?php
        $i = 1;
                while($data = mysqli_fetch_object($query)){
                    ?>
                    <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $data->judul_buku ?></td>
                    <td><?= $data->deskripsi ?></td>
                    <td><?= $data->penulis ?></td>
                    <td><?= $data->penerbit ?></td>
                    <td>
                    <img src='images/<?= $data->gambar ?> ' height=80/>
                    </td>            
                    <td>
                    <a href='ubah_buku.php?id=<?= $data->buku_id ?>' class='ubah'><button>Ubah</button></a>
                    <a href='hapus.php?id=<?= $data->buku_id ?>&&table=buku&&where=buku_id&&lokasi=list_buku' onClick='return confirm("Yakin Ingin Hapus ?")'><button class='hapus'>Hapus</button></a>
                    </td>
                    </tr>
                <?php
                }
            ?>
</table>
<a href="index.php"><button>Menu</button></a>
</body>
</html>
