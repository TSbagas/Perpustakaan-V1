<?php
        require_once("koneksi.php");
        $query = mysqli_query($koneksi,"SELECT * FROM peminjaman 
        inner join siswa on peminjaman.nis = siswa.nis
        inner join buku on peminjaman.buku_id = buku.buku_id");
?>
<html>
    <head>
        <title>Peminjaman</title>
    </head>
    <link rel="stylesheet" href="css/phpstyle.css">
    <body>
        <div class="formstyle">
            <h3>Data Peminjaman</h3>
            <table class='formtable'>
                <tr>
                    <form action="" method="post" >
                    <td>NIS</td>
                    <td>:</td>
                    <td><input type="text" name="cari" placeholder="Masukkan NIS anda">  <input type="submit" name="pencarian" value="Cari"></td>
                    </form>
                </tr>
                    <form action="proses_simpan_peminjaman.php" method="POST">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                    <?php
            $query_nama = mysqli_query($koneksi,"SELECT * FROM siswa");
            $nama_siswa = mysqli_fetch_object($query_nama);
            if(isset($_POST['cari'])){
                $nis = $_POST["cari"];
                $query_namas = mysqli_query($koneksi,"SELECT * FROM siswa where nis='$nis'");
                $nama_s = mysqli_fetch_object($query_namas);
                if($nis =! $nama_s || $nis == null){
                    ?>
                    <input type="text" value="" name="namas" placeholder="NIS anda tidak ditemukan" readonly>
                    <?php
                }else{
                    ?>
                <input type="hidden" value="<?=$nama_s->nis?>" name="id">
                <input type="text" value="<?=$nama_s->nama?>"name="namas" readonly>
                <?php
                }
            }else {
                ?>
                <input type="text" value="" name="namas" placeholder="Nama siswa" readonly>
                <?php
            }
            ?>
                    </td>
                </tr>

                <tr>
                    <td>Buku</td>
                    <td>:</td>
                    <td>
                        <select name="buku">
                            <?php
                                $query_buku = mysqli_query($koneksi,"SELECT * from buku");
                                while($data_buku = mysqli_fetch_object($query_buku)){
                            ?>
                            <option value="<?=$data_buku->buku_id?>"><?=$data_buku->judul_buku?></option>
                            <?php
                            }
                            ?>
                        </select>
            </td>
                </tr>
                <tr>
                    <td>Tanggal Kembali</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl_kembali">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Simpan" name="simpan">
                    </td>
                </tr>
                </form>
            </table>
        </div>
        <a href="index.php" class='back'>
            Back
        </a>
        <table border="1" cellpadding=5 cellspacing=0 class='tabelpeminjaman'>
            <tr class='judul'>
                <td>No</td>
                <td>No Peminjaman</td>
                <td>Nis</td>
                <td>Nama siswa</td>
                <td>Judul Buku</td>
                <td>Tgl Pinjam</td>
                <td>Tgl Kembali</td>
            </tr>
            <?php
                $i = 1;
                while($query_peminjaman = mysqli_fetch_object($query)){
                ?>
                <tr>
                    <td><?=$i++?></td>
                    <td><?= $query_peminjaman->no_peminjaman?></td>
                    <td><?= $query_peminjaman->nis?></td>
                    <td><?= $query_peminjaman->nama?></td>
                    <td><?= $query_peminjaman->judul_buku?></td>
                    <td><?= $query_peminjaman->tgl_peminjaman?></td>
                    <td><?= $query_peminjaman->tgl_kembali?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>
<script>
      function myFunction() {
        window.location.href="proses_simpan_peminjaman.php?niss=<?=$nis?>";
      }
    </script>