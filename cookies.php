<!DOCTYPE html>
<html>
<head>
	<title>PHP Cookies</title>
</head>
<body>
	  <?php setcookie("nama", "Thalita Amaris Athalia", time() + ( 60*60*24*365*8), "/", "localhost") ?>
	    <?php setcookie("jenis-kelamin", "perempuan", time() + ( 60*60*24*365*8), "/", "localhost") ?>
	    <?php setcookie("tanggal-lahir", "29 februari 2004", time() + ( 60*60*24*365*8), "/", "localhost") ?>
	    <?php setcookie("umur", "17 tahun", time() + ( 60*60*24*365*8), "/", "localhost") ?>
	    <?php setcookie("agama", "islam", time() + ( 60*60*24*365*8), "/", "localhost") ?>
	    <?php setcookie("alamat", "kaliwiru 1", time() + ( 60*60*24*365*8), "/", "localhost") ?>

        <h2>Data diri :</h2>

	    <?php echo "nama: " . $_COOKIE ["nama"] ?>
	    <?php echo "<br><br>" ?>
	    <?php echo "jenis kelamin: " . $_COOKIE ["jenis-kelamin"] ?>
	    <?php echo "<br><br>" ?>
	    <?php echo "tanggal lahir: " . $_COOKIE ["tanggal-lahir"] ?>
	    <?php echo "<br><br>" ?>
	    <?php echo "umur:" . $_COOKIE ["umur"] ?>
	    <?php echo "<br><br>" ?>
	    <?php echo "agama: " . $_COOKIE ["agama"] ?>
	    <?php echo "<br><br>" ?>
	    <?php echo "alamat: " . $_COOKIE ["alamat"] ?>
	    <?php echo "<br><br>" ?>

 </body>
 </html>