<?php 
    session_start();
    session_destroy();

    if (count($_SESSION) == 0) {
        echo "session berhasil dihapus";
    }
?>