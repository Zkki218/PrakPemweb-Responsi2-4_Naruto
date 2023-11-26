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
            <form method="post" name="form-register">
                <input class="input" type="text" name="username" placeholder="Username" required><br><br>
                <input class="input" type="password" name="password" placeholder="Password" required><br><br>
                <div class="select-area">
                    <label for="pilih">Select<br>Character</label>
                    <div class="custom-select">
                        <select name="pilih">
                            <option value="default" selected>------------</option>
                            <option value="naruto">Naruto</option>
                            <option value="sasuke">Sasuke</option>
                            <option value="kakashi">Kakashi</option>
                            <option value="itachi">Itachi</option>
                            <option value="obito">Obito</option>
                            <option value="madara">Madara</option>
                            <option value="hashirama">Hashirama</option>
                            <option value="tobirama">Tobirama</option>
                            <option value="hiruzen">Hiruzen</option>
                            <option value="minato">Minato</option>
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