<?php
session_start();

if($_SESSION['login'] == null){
    header('location:login.php?err=ilegal');
}else {
    ?>
    <html>
    <head><title>Perpustakaan Mini</title></head>
    <link rel="stylesheet" href="css/style.css">
    <body>
        <h1>Perpustakaan Mini</h1>
        <h4>Welcome To Dashboard <?=$_SESSION['name']?> Your level is <?=$_SESSION['level']?><a href="logout.php"><button class="hapus">Logout</button></a></h3>
        <?php
        if($_SESSION['level'] == 'Petugas'){
            ?>
        <a href="list_users.php"><button>Users</button></a>
        <a href="list_buku.php"><button>Buku</button></a>
        <a href="peminjaman.php"><button>Peminjaman</button></a>
        <a href="list_siswa.php"><button>Siswa</button></a>
        <?php
         }

        ?>
        <?php
        if($_SESSION['level'] == 'Siswa'){
            $nis = $_SESSION['nis'];
            ?>
            <a href="data_peminjaman.php?nis=<?=$nis?>"><button>Data Peminjaman</button></a>
            <?php
        }
        ?>
    </body>
</html>
<?php
}
?>
