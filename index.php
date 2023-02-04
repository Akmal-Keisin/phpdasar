<?php
// connect darabase
    $link =  mysqli_connect("localhost", "root", "", "php dasar");
// query data
// query data mengembalikan nilai bool true dan query
// jika terjadi kesalahan dalam query data tidak akan menimbulkan pesan
    $result = mysqli_query($link, "SELECT * FROM siswa");
    // cara cek error query data
    if (!$result) {
        echo mysqli_error($link);
    }
// ambil data dari result (fetch) dari objek result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object() // mengembalikan object

// while ($siswa = mysqli_fetch_array($result) ) {
//     var_dump($siswa);
// }
?>

<html>
    <head>
        <title>database dasar</title>
    </head>
    <body>
        <h1>daftar siswa</h1>
        <table border="1px" cellpadding="10" cellspacing="0">
        <tr>
            <th>id</th>
            <th>aksi</th>
            <th>nama</th>
            <th>nik</th>
            <th>email</th>
            <th>jurusan</th>
            <th>gambar</th>
        </tr>
        <?php $i = 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i ?></td>  
            <td>
                <a href="">hapus</a> |
                <a href="">ubah</a>
            </td>  
            <td><?= $row["nik"] ?></td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["jurusan"] ?></td>
            <td><?= $row["gambar"] ?></td>
      
        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
        </table>
    </body>

</html>