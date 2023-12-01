<?php
include "koneksi.php";
session_start();
?>

<?php
if (isset($_POST['submit-login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($koneksi, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            $_SESSION['id'] = $row['id_user'];
            $_SESSION['level'] = $row['level'];
            $_SESSION['id_chara'] = $row['id_chara'];
            header("Location: index.php?name=$_SESSION[id_chara]");
        } else {
            $_SESSION['error_message'] = 'Password Salah';
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['error_message'] = 'Username & Password Salah';
        header("Location: login.php");
        exit();
    }
}

if (isset($_SESSION['error_message'])) {
    echo "<script>alert('{$_SESSION['error_message']}');</script>";
    unset($_SESSION['error_message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap">
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>    
    <div class="main-container">
        <div class="img-container">
            <h1>Welcome Back!</h1>
            <img src="assets/login.png">
        </div>
        <div class="content-container">
            <h1>Login</h1>
            <p>Please enter your username and password!</p>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" name="form-login">
                <input class="input" type="text" name="username" placeholder="Username" required><br><br>
                <input class="input" type="password" name="password" placeholder="Password" required><br><br>
                <button class="button-submit" type="submit" name="submit-login"><p class="text-wrapper">Login</p></button>
            </form>
            <a href="register.php"><p>Don't have any account?</p></a>
        </div>
    </div>
</body>
</html>
