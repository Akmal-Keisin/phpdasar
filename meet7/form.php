<?php
    $errMsg = "<span style='color:red;'>kolom perlu diisi</span>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian Laptop</title>
    <style>
        ul li {
        margin: 20px;
        list-style-type: none;
}

    </style>
</head>
<body>
    <form action="data.php" method="post">
        <ul>
            <li>
                <h1>FORM DATA LAPTOP</h1>
            </li>
            <li>
                <label for="nama">Nama : </label>
            </li>
            <li>
                <input type="text" name="nama" id="nama" required>
                <?php 
                    if (empty($_POST["nama"])) {
                        echo $errMsg;
                    } 
                ?> 
            </li>
           
            <li>
                <label for="merek">Pilih Merek :</label>
            </li>
            <li>
                <select name="merek" id="merek" required>
                    <option value="" name=""></option>
                    <option value="apple" name="apple">Apple</option>
                    <option value="apple" name="apple">Lenovo</option>
                    <option value="apple" name="apple">Asus</option>
                    <option value="apple" name="apple">Samsung</option>
                </select>
                <?php 
                    if (empty($_POST["merek"])) {
                        echo $errMsg;
                    }
                ?> 
            </li>
            <li>Pilih RAM :</li>
            <li>
                <input type="radio" id="8gb" name="ram" value="8gb" checked>
                <label for="8gb">8GB</label><br>
                <input type="radio" id="16gb" name="ram" value="16gb" >
                <label for="16gb">16GB</label><br>
            <li><label for="SSD">Pilih SSD</label></li>
            </li>
            <li>
                <select name="SSD" id="SSD" required>
                    <option value="" name=""></option>
                    <option value="apple" name="hardisk">225GB</option>
                    <option value="apple" name="hardisk">500GB</option>
                </select>
                <?php 
                    if (empty($_POST["SSD"])) {
                        echo $errMsg;
                    }
                ?> 
            </li>
            <li>
                <label for="tanggal">Tanggal Pembelian :</label>
            </li>
            <li>
                <input type="date" name="tanggal" id="tanggal" required>
                <?php 
                    if (empty($_POST["tanggal"])) {
                        echo $errMsg;
                    }
                ?> 
            </li>
            <li>
                <label for="jam">Pilih Waktu Pembelian :</label>
            </li>
            <li
                ><input type="time" id="jam" name="jam" required>
                <?php 
                    if (empty($_POST["jam"])) {
                        echo $errMsg;
                    }
                ?> 
            </li>
            <li>
                <label for="note">note :</label>
            </li>
            <li>
                <textarea id="note" name="note" rows="7" cols="50"></textarea required>
                <?php 
                    if (empty($_POST["note"])) {
                        echo $errMsg;
                    }
                ?> 
            </li>
            <li><button type="submit" name="submit">submit</button></li>
        </ul>
    </form>
</body>
</html>
