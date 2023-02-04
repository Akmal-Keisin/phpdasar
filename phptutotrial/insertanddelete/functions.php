<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "php dasar");
// query data
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// function tambah data
function tambah($data) {
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nik = htmlspecialchars($data["nik"]);    
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);


    $query = "INSERT INTO siswa VALUES
            ('', '$nama', '$nik', '$email', '$jurusan', '')";
    $a =  mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function hapus database
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}




?>