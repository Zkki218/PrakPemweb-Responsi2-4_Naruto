<?php
include "koneksi.php";
session_start();
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

    <?php if (isset($_SESSION['login']) && isset($_SESSION['user'])) : ?>
		<script>window.location='link hosting website'</script>
	<?php endif ?> 

	<?php 
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			$data = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username'");

			if (mysqli_num_rows($data) > 0) {
				$hasil = mysqli_fetch_assoc($data);

				if($hasil['level']=="Admin"){
					$_SESSION['username'] = $username;
					$_SESSION['level'] = "Admin";
				  
				   }else if($hasil['level']=="Pengunjung"){
					$_SESSION['username'] = $username;
					$_SESSION['level'] = "Pengunjung";
				   }

					if ($hasil['password']) {
						$_SESSION['user'] = $username;
						$_SESSION['login'] = true; ?>
						<script>window.location="link hosting website";</script>
						
				<?php 
				}else { ?>
					<a href='login.php'></a>
					<p>Password Salah!</p>
				<?php 
				}
			}else { ?>
					<a href='login.php')></a>
					<p>Username & password salah!</p>
			<?php 
			}
		}
	?>
    
    <div class="main-container">
        <div class="img-container">
            <h1>Welcome Back!</h1>
            <img src="assets/login.png">
        </div>
        <div class="content-container">
            <h1>Login</h1>
            <p>Please enter your username and password!</p>
            <form method="post" name="form-login">
                <input class="input" type="text" name="username" placeholder="Username" required><br><br>
                <input class="input" type="password" name="password" placeholder="Password" required><br><br>
                <button class="button-submit" type="submit" name="submit-login"><p class="text-wrapper">Login</p></button>
            </form>
            <a href="register.php"><p>Don't have any account?</p></a>
        </div>
    </div>
</body>
</html>
