<?php 
    require 'functions.php';
    $id = $_GET["id"];

    if (hapus($id) > 0) {
        echo "
        <script>
            alert('data berhasil hapus');
            document.location = 'index.php';
        </script>
    ";
    } else { 
        echo "
        <script>
            alert('data gagal dihapus');
            document.location = 'index.php';
        </script>
    
    ";
    }


?>