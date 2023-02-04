<?php 
    setcookie("nama", "Thalita Amaris Athalia", time() + ( 60*60*24*365*8), "/", 'akmal.com'); 
	setcookie("jenis-kelamin", "perempuan", time() + ( 60*60*24*365*8), "/", 'akmal.com'); 
    setcookie("tanggal-lahir", "29 februari 2004", time() + ( 60*60*24*365*8), "/", 'akmal.com'); 
    setcookie("umur", "17 tahun", time() + ( 60*60*24*365*8), "/", 'akmal.com'); 
    setcookie("agama", "islam", time() + ( 60*60*24*365*8), "/", 'akmal.com'); 
    setcookie("alamat", "kaliwiru 1", time() + ( 60*60*24*365*8), "/", 'akmal.com'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Cookies</title>
</head>
<body>

        <h2>Data diri :</h2>

	    <ul>
            <li>
                <?php 
                    if (isset($_COOKIE["nama"])) {
                        echo "nama : " . $_COOKIE["nama"];
                    }
                ?>
            </li>
            <li>
                <?php 
                    if (isset($_COOKIE["jenis-kelamin"])) {
                        echo "jenis-kelamin : " . $_COOKIE["jenis-kelamin"];
                    }
                ?>
            </li>
            <li>
                <?php 
                    if (isset($_COOKIE["tanggal-lahir"])) {
                        echo "tanggal-lahir : " . $_COOKIE["tanggal-lahir"];
                    }
                ?>
            </li>
            <li>
                <?php 
                    if (isset($_COOKIE["umur"])) {
                        echo "umur : " . $_COOKIE["umur"];
                    }
                ?>
            </li>
            <li>
                <?php 
                    if (isset($_COOKIE["agama"])) {
                        echo "agama : " . $_COOKIE["agama"];
                    }
                ?>
            </li>
            <li>
                <?php 
                    if (isset($_COOKIE["alamat"])) {
                        echo "alamat : " . $_COOKIE["alamat"];
                    }
                ?>
            </li>
        </ul>

 </body>
 </html>