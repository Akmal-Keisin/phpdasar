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
    $nisn = htmlspecialchars($data["nisn"]);    
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);



    $query = "INSERT INTO siswa VALUES
            ('', '$nama', '$nisn', '$email', '$jurusan')";
    $a =  mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function hapus database
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
    
}

// function ubah data
    function ubah($data) {
        global $conn; 
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nisn = htmlspecialchars($data["nisn"]);    
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);


    $query = "UPDATE siswa SET
        nama = '$nama',
        nisn = '$nisn',
        email = '$email',
        jurusan = '$jurusan'
       WHERE id = $id 
        ";
    $a =  mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// function cari data
function cari($keyword){
    global $conn;
    $query = "SELECT * FROM siswa WHERE 
            nama LIKE '%$keyword%' OR 
            nisn LIKE '%$keyword%' OR 
            email LIKE '%$keyword%' OR 
            jurusan LIKE '%$keyword%'
            ";
    return query($query);
}

?>
