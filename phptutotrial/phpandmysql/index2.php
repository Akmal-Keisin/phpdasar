<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "php dasar");

// ambil data dari data siswa / querry data
$result = mysqli_query($conn, "SELECT * FROM siswa");

// untuk cek error pada saat query data
// if (!$result) {
//     echo mysqli_error($conn); 
// }

// ambil data dari object result | fetch
// mysqli_fetch_row() | mengembalikan array numerik
// mysqli_fetch_assoc() | mengembalikan array associative
// mysqli_fetch_array() | mengembalikan keduanya
// mysqli_fetch_object() | mengembalikan object



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php and mysql</title>
</head>
<body>
    
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
        <?php while($row = mysqli_fetch_assoc($result)) :?>
        <tr>
            <td><?= $i ?></td>
            <td><a href="">ubah</a> | <a href="">hapus</a></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["nik"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
            <td><?= $row["gambar"] ?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile;?>
    </table>

</body>
</html>