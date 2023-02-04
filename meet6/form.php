<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <h1>formulir</h1>
    <form action="form.php" method="post">
        nama : <input type="text" name="nama" id="nama"><br><br>
        tanggal lahir : <input type="date" name="tanggal-lahir"><br><br>
        jenis kelamin : <br><br>
        laki-laki<input type="radio" name="pria"> 
        perempuan <input type="radio" name="wanita"> <br><br>
        agama : 
        <select name="agama" id="">
            <option value="islam"></option>
            <option value="islam">islam</option>
            <option value="islam">kristen</option>
            <option value="islam">hindu</option>
        </select> <br><br>
        kota : 
        <select name="kota" id="">
            <option value="semarang"></option>
            <option value="semarang">semarang</option>
            <option value="semarang">kendal</option>
            <option value="semarang">bandung</option>
            <option value="semarang">jakarta</option>
        </select> <br><br>
        alamat : <textarea name="alamat" id="alamat" cols="30" rows="6"></textarea> <br><br>
        <button type="submit" name="submit">kirim</button>
    </form>
    <h2>hasil</h2>
    <?php  
    if (!isset($_POST["submit"])) {
        echo "masukkan form";
    } else {
        if ($_POST["nama"] != "") {
            echo "nama : " . $_POST["nama"] . "<br>";
        } else {
            echo "nama perlu dimasukkan <br>";
        }

        if ($_POST["tanggal-lahir"] != "") {
            echo "tanggal-lahir : " . $_POST["tanggal-lahir"] . "<br>";
        } else {
            echo "tanggal-lahir perlu dimasukkan <br>";
        }
        if (!isset($_POST["pria"]) && !isset($_POST["wanita"])) {
            echo "jenis kelamin belum dipilih";
        }
          elseif (isset($_POST["pria"])) {
            echo "jenis kelamin : laki laki <br>";
        } elseif (isset($_POST["wanita"])) {
            echo "jenis kelamin : wanita <br>";
        } 



    

    }
    ?>
  
</body>
</html>