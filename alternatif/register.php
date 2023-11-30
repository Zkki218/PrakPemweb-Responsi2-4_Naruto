<?php
include "koneksi.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $character = $_POST['pilih'];

    $check_char_query = "SELECT * FROM chara WHERE id_chara = '$character'";
    $char_result = $koneksi->query($check_char_query);

    if ($char_result->num_rows === 0) {
        $_SESSION['error_message'] = 'Karakter yang dipilih tidak ada. Silakan pilih karakter yang valid.';
        header("Location: register.php");
        exit();
    } else {
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $insert_query = "INSERT INTO user (username, password, level, id_chara) VALUES ('$username', '$hash_password', 'Pengunjung', '$character')";

        if ($koneksi->query($insert_query) === TRUE) {
            header("Location: login.php");
        } else {
            echo "Error: " . $insert_query . "<br>" . $koneksi->error;
        }
    }
}

if (isset($_SESSION['error_message'])) {
    echo "<script>alert('{$_SESSION['error_message']}');</script>";
    unset($_SESSION['error_message']);
}

$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap">
    <link rel="stylesheet" href="styles/register.css">
</head>
<body>
    <div class="main-container">
        <div class="content-container">
            <h1>Register</h1>
            <p>Please enter your username and password!</p>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form-register">
                <input class="input" type="text" name="username" placeholder="Username" required><br><br>
                <input class="input" type="password" name="password" placeholder="Password" required><br><br>
                <div class="select-area">
                    <label for="pilih">Select<br>Character</label>
                    <div class="custom-select">
                        <select name="pilih">
                            <option value="default" selected>------------</option>
                            <option value="1">Naruto</option>
                            <option value="2">Sasuke</option>
                            <option value="3">Kakashi</option>
                            <option value="4">Itachi</option>
                            <option value="5">Obito</option>
                            <option value="6">Madara</option>
                            <option value="7">Hashirama</option>
                            <option value="8">Tobirama</option>
                            <option value="9">Hiruzen</option>
                            <option value="10">Minato</option>
                        </select>
                    </div>
                </div>
                <br>
                <button class="button-submit" type="submit" name="submit-register"><p class="text-wrapper">Register</p></button>
            </form>
            <a href="login.php"><p>Already have an account?</p></a>
        </div>
        <div class="img-container">
            <h1>Welcome!</h1>
            <img src="assets/register.png">
        </div>
    </div>
</body>
</html>
