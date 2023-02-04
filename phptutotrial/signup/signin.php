<?php 
    session_start();
    require 'functions.php';
    if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
        $id = $_COOKIE["id"];
        $key = $_COOKIE["key"];

        $result = mysqli_query($conn, "SELECT username FROM users WHERE id = '$id'");

        if ($key === hash('sha256', $row['username'])) {
            $_SESSION["login"] = true;
        }
    }

    if (isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }


    if (isset($_POST["login"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
        

        // cek username
        if (mysqli_num_rows($result) == 1) {
            // cek password
            $row = mysqli_fetch_assoc($result);
            // set session
            $_SESSION["login"] = true;

            if(password_verify($password, $row["password"])) {
                if (isset($_POST["remember"])) {
                    setcookie("id", $row['id'], time() + 60);
                    setcookie("key", hash('sha256', $row['username']), time() + 60);
                }
                header("Location: index.php");
                exit;
            }
        }
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
<?php if (isset($error)) : ?>
    <p style="color : red; font-style : italic;">username / password salah</p>
<?php endif;?>

    <div class="container mt-5" style="width: 500px;">
    <h1>Login</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">username</label>
            <input type="text" class="form-control" id="username" placeholder="username anda" name="username" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="password" class="form-control" id="password" placeholder="password anda" name="password" autocomplete="off">
        </div>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
            <a href="signup.php" class="btn btn-secondary ">Sign Up!</a>
    </form>        
   
    </div>
</body>
</html>