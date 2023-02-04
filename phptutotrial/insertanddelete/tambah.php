<?php 
require 'functions.php';
// cek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {

    // cek keberhasilah transfer data
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location = 'index.php';
            </script>
        
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location = 'index.php';
        </script>
        ";
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data siswa</title>
</head>
<body>
    <h1>tambah data siswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">nama :</label>
                <input type="text" name="nama" reauired>
            </li>
            <li>
                <label for="nik">nik :</label>
                <input type="text" name="nik" required>
            </li>
            <li>
                <label for="email">email :</label>
                <input type="text" name="email" required>
            </li>
            <li>
                <label for="jurusan">jurusan :</label>
                <input type="text" name="jurusan" required>
            </li>
            <li>
                <label for="gambar">gambar :</label>
                <input type="text" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">tambah siswa</button>
            </li>
        </ul>
    </form>
</body>
</html>