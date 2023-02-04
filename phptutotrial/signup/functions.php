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
    mysqli_query($conn, $query);

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

//function register
function register($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek apakah username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar');
            </script>";
            return false;
    }

    // cek konfirmasi
    if($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
            </script>";
            return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user
    mysqli_query($conn, "INSERT INTO users VALUES ('', '$username','$password')");
    return mysqli_affected_rows($conn);
}



?>
