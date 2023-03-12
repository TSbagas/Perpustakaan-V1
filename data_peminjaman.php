<?php
    require_once("koneksi.php");
    $nis = $_GET['nis'];
?>
<html>
    <link rel="stylesheet" href="css/phpstyle.css">
    <head><title>Data Peminjaman</title></head>
    <body>
        <table border=1 cellspacing=0 cellpadding=5 class='tabelpeminjaman'>
            <tr class='judul'>
                <td>No</td>
                <td>Judul Buku</td>
                <td>Tgl pinjam</td>
                <td>Tgl kembali</td>
            </tr>
            <tr>
                <?php
                $i = 1;
                $querys = mysqli_query($koneksi,"SELECT * FROM peminjaman inner join buku on peminjaman.buku_id = buku.buku_id where nis='$nis'");
                while($data_bukus = mysqli_fetch_object($querys)){
                ?>
                <tr>
                <td><?=$i++?></td>
                <td><?=$data_bukus->judul_buku?></td>
                <td><?=$data_bukus->tgl_peminjaman?></td>
                <td><?=$data_bukus->tgl_kembali?></td>
                </tr>
                <?php
                };
                ?>
            </tr>
        </table>
    </body>
</html>