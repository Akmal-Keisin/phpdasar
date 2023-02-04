<?php 
    setcookie("nama", "Thalita Amaris Athalia", time() + ( 60*60*24*365*8), '/', 'akmalkeisin.com');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    <?= $_COOKIE["nama"]; ?>
</body>
</html>