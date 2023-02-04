<?php 
require 'functions.php';
$siswa = query("SELECT * FROM siswa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert and delete</title>
</head>
<body>
    <h1>data siswa</h1>
    <a href="tambah.php">tambah mahasiswa</a>
    <br>
    <table border="1px solid black" cellpadding="10px" cellspacing="0">
        <tr>
            <th>no</th>
            <th>aksi</th>
            <th>nama</th>
            <th>nik</th>
            <th>email</th>
            <th>jurusan</th>
            <th>gambar</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($siswa as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><a href="">ubah</a> | <a href="hapus.php?id= <?= $row["id"]?>" onclick="return confirm('yakin hapus')">hapus</a></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["nik"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
            <td><?= $row["gambar"] ?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </table>

</body>
</html>