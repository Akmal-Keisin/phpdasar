<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>read session</title>
</head>
<body>
    <?= $_SESSION['satu'] . " " . $_SESSION['dua'] ?>
</body>
</html>