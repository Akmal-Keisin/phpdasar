<?php 
    require'functions.php';
    if (isset($_POST["register"])) {
        if (register($_POST) > 0) {
            echo "<script>
                    alert('username baru berhasil ditambahkan');
                    document.location = 'signin.php';
                  </script";  
        } else { 
            echo mysqli_error($conn);
        }
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

    <style>
        ul {
            list-style: none;
        }
    </style>
    <title>Register</title>
</head>
<body>
    <div class="container mt-5" style="width: 500px;">
    <h1>Register</h1>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" placeholder="username anda" name="username" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="password anda" name="password" autocomplete="off">
        </div>
        <div class="mb-3">
            <label for="password2" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password2" placeholder="konfirmasi password anda" name="password2" autocomplete="off">
        </div>
            <button type="submit" name="register" class="btn btn-primary">Register</button>
            <a href="signin.php" class="btn btn-secondary ">Sign In!</a>
    </form>        
   
    </div>
</body>
</html>