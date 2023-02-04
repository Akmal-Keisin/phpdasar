<?php 
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: signin.php");
    exit;
}
require 'functions.php';
// cek apakah tombol submit sudah ditekan apa belum

// ambil data url
$id = $_GET["id"];

// query data berdasarkan id
$siswa = query("SELECT * FROM siswa WHERE id = $id")[0];

if (isset($_POST["submit"])) { 

    // cek keberhasilah transfer data
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diubah');
                document.location = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
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

     <!-- bootstrap link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>ubah data siswa</title>
</head>
<body>
   
    <div class="container" style="width: 60%;"> 
    <h1 class="text-center fw-bold mb-5">Ubah Data Siswa</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $siswa["id"]?>">
        <div class="mb-3">
            <label for="nama" class="form-label">nama</label>
            <input type="nama" class="form-control" id="nama" placeholder="nama anda" name="nama" autocomplete="off" value="<?= $siswa["nama"]?>" required>
        </div>
        <div class="mb-3">
            <label for="nisn" class="form-label">nisn</label>
            <input type="nisn" class="form-control" id="nisn" placeholder="nisn anda" name="nisn" autocomplete="off" value="<?= $siswa["nisn"]?>" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" placeholder="email anda" name="email" autocomplete="off" value="<?= $siswa["email"]?>" required>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">jurusan</label>
            <input type="jurusan" class="form-control" id="jurusan" placeholder="jurusan anda" name="jurusan" autocomplete="off" value="<?= $siswa["jurusan"]?>" required>
        </div>
            <button type="submit" name="submit" class="btn btn-primary">tambah siswa</button>
    </form>        
    </div>
</body>
</html>