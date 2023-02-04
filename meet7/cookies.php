<?php 
    setcookie('nama', 'Akmal Keisin Alfateh', time() + (60*60*24*365*8), '/', 'akmalkeisin.com');
    setcookie('jeniskelamin', 'Pria', time() + (60*60*24*365*8), '/', 'akmalkeisin.com');
    setcookie('agama', 'islam', time() + (60*60*24*365*8), '/', 'akmalkeisin.com');
    setcookie('tanggallahir', '8 Januari 2004', time() + (60*60*24*365*8), '/', 'akmalkeisin.com');
    setcookie('umur', '17', time() + (60*60*24*365*8), '/', 'akmalkeisin.com');
    setcookie('alamat', 'Gedawang Permai III Blog F 11', time() + (60*60*24*365*8), '/', 'akmalkeisin.com');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setcookie</title>
</head>
<body>
    <h1>Data Diri</h1>
    <ul>
        <li>
            <?php
                if(isset($_COOKIE["nama"])){
                    echo "nama :  " . $_COOKIE["nama"];
                } else{
                    echo "nama cookie tidak aktif";
                }
            ?>
        </li>
        <li>
            <?php
                if(isset($_COOKIE["jeniskelamin"])){
                    echo "jeniskelamin :  " . $_COOKIE["jeniskelamin"];
                } else{
                    echo "jeniskelamin cookie tidak aktif";
                }
            ?>
        </li>
        <li>
            <?php
                if(isset($_COOKIE["agama"])){
                    echo "agama :  " . $_COOKIE["agama"];
                } else{
                    echo "agama cookie tidak aktif";
                }
            ?>
        </li>
        <li>
            <?php
                if(isset($_COOKIE["tanggallahir"])){
                    echo "tanggallahir :  " . $_COOKIE["tanggallahir"];
                } else{
                    echo "tanggallahir cookie tidak aktif";
                }
            ?>
        </li>
        <li>
            <?php
                if(isset($_COOKIE["umur"])){
                    echo "umur :  " . $_COOKIE["umur"];
                } else{
                    echo "umur cookie tidak aktif";
                }
            ?>
        </li>
        <li>
            <?php
                if(isset($_COOKIE["alamat"])){
                    echo "alamat :  " . $_COOKIE["alamat"];
                } else{
                    echo "alamat cookie tidak aktif";
                }
            ?>
        </li>
    </ul>
</body>
</html>