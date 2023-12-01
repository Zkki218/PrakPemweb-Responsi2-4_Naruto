<?php
include "koneksi.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karakter</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap">
    <link rel="stylesheet" href="styles/character.css">
</head>
<body>
    <div class="main-container">
        <div class="sub-container-1">
            <div class="nav-container">
                <nav>
                    <a href="index.php?name=<?php $_SESSION['id_chara'] ?>">Home</a>
                    <a href="character.php">Character</a>
                    <a href="jutsu.php">Jutsu</a>
                    <a href="account.php">Account</a>
                </nav>
            </div>
        </div>
        <div class="sub-container-2">
            <div class="chara-container">
                <div class="img-container">
                    <img src="img/chara/hashirama/Face_Hashirama.png">
                </div>
                <div class="text-wrapper">
                    <i>Senju Hashirama</i>
                </div>
            </div>
            <div class="chara-container">
                <div class="img-container">
                    <img src="img/chara/hiruzen/Face_Hiruzen.png">
                </div>
                <div class="text-wrapper">
                    <i>Sarutobi Hiruzen</i>
                </div>
            </div>
            <div class="chara-container">
                <div class="img-container">
                    <img src="img/chara/itachi/Face_Itachi.png">
                </div>
                <div class="text-wrapper">
                    <i>Uchiha Itachi</i>
                </div>
            </div>
            <div class="chara-container">
                <div class="img-container">
                    <img src="img/chara/kakashi/Face_Kakashi.png">
                </div>
                <div class="text-wrapper">
                    <i>Hatake Kakashi</i>
                </div>
            </div>
            <div class="chara-container">
                <div class="img-container">
                    <img src="img/chara/madara/Face_Madara.png">
                </div>
                <div class="text-wrapper">
                    <i>Uchiha Madara</i>
                </div>
            </div>
            <div class="chara-container">
                <div class="img-container">
                    <img src="img/chara/minato/Face_Minato.png">
                </div>
                <div class="text-wrapper">
                    <i>Namikaze Minato</i>
                </div>
            </div>
            <div class="chara-container">
                <div class="img-container">
                    <img src="img/chara/naruto/Face_Naruto.png">
                </div>
                <div class="text-wrapper">
                    <i>Uzumaki Naruto</i>
                </div>
            </div>
            <div class="chara-container">
                <div class="img-container">
                    <img src="img/chara/obito/Face_Obito.png">
                </div>
                <div class="text-wrapper">
                    <i>Uchiha Obito</i>
                </div>
            </div>
            <div class="chara-container">
                <div class="img-container">
                    <img src="img/chara/sasuke/Face_Sasuke.png">
                </div>
                <div class="text-wrapper">
                    <i>Uchiha Sasuke</i>
                </div>
            </div>
            <div class="chara-container">
                <div class="img-container">
                    <img src="img/chara/tobirama/Face_Tobirama.png">
                </div>
                <div class="text-wrapper">
                    <i>Senju Tobirama</i>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
