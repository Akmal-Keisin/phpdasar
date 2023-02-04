<?php 
    session_start();
    $_SESSION["satu"] = "SMK";
    $_SESSION["dua"] = "Bisa";

    if (isset($_SESSION)) {
        echo "session berhasil dibuat";
    }
?>

