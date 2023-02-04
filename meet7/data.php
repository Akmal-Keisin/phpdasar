<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        ul li{
            margin : 10px;
            list-style-type: none;
        }
    </style>
    <title>Document</title>
</head>
<body>    
    <ul>
        <h1>Data Pembelian Laptop</h1>
        <li>Nama : <?= $_POST["nama"] ?></li>
        <li>Merek : <?= $_POST["merek"] ?></li>
        <li>Ram : <?= $_POST["ram"] ?></li>
        <li>SSD : <?= $_POST["SSD"] ?></li>
        <li>Tanggal Pembelian : <?= $_POST["tanggal"] ?></li>
        <li>Waktu Pembelian : <?= $_POST["jam"] ?></li>
        <li>Catatan : <?= $_POST["note"] ?></li>
    </ul>

</body>
</html>