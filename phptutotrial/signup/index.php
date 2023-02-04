<?php 
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: signin.php");
    exit;
}
require 'functions.php';
$siswa = query("SELECT * FROM siswa");

// jika tombol cari ditekan
if (isset($_POST["keyword"])) {
    $siswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <style>
        body {
            margin : 20px;
        }
    </style>

    <title>search</title>
</head>
<body>
    <h1 class="fw-bold">Data Siswa</h1>
    <br>
    <form action="" method="post" style="width: 600px; margin-bottom:20px;">
        <div class="input-group">
            <span class="input-group-text">Cari Siswa</span>
            <input type="text" aria-label="First name" class="form-control col-xs-4" utocomplete="off" name="keyword" size="30px" autofocus>
            <button type="submit" name="cari" class="btn btn-primary">cari</button>
            <a href="tambah.php" class="btn btn-primary me-2" style="margin-left: 20px;">tambah siswa</a>
            <a href="signout.php" class="btn btn-danger">Log Out</a>
        </div>     
    </form>

    <table border="1px solid black" cellpadding="10px" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>NISN</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;?>
            <?php foreach ($siswa as $row) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><a href="ubah.php?id= <?= $row["id"]?>" class="btn btn-primary">ubah</a> 
                <a href="hapus.php?id= <?= $row["id"]?>" onclick="return confirm('yakin hapus')" class="btn btn-danger">hapus</a></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["nisn"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["jurusan"] ?></td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
        </tbody>
    </table>

</body>
</html>