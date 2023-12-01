<?php
include "koneksi.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jutsu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap">
    <link rel="stylesheet" href="styles/jutsu.css">
</head>
<body>
    <div class="main-container">
        <div class="sub-container-1">
            <div class="nav-container">
                <nav>
                    <a href="index.php?name=<?php $_SESSION['id_chara'];?>">Home</a>
                    <a href="character.php">Character</a>
                    <a href="jutsu.php">Jutsu</a>
                    <a href="account.php">Account</a>
                </nav>
            </div>
        </div>
        <div class="sub-container-2">
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/bakufuuranbu/Cover_Bakufuuranbu.png">
                </div>
                <div class="text-wrapper">
                    <i>Katon: Bakufuu Ranbu</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/chidori/Cover_Chidori.png">
                </div>
                <div class="text-wrapper">
                    <i>Chidori</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/doryuuheki/Cover_Doryuuheki.png">
                </div>
                <div class="text-wrapper">
                    <i>Doton: Doryuuheki</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/goukakyuu/Cover_Goukakyuu.png">
                </div>
                <div class="text-wrapper">
                    <i>Katon: Goukakyuu no Jutsu</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/goukamekkyaku/Cover_Goukamekkyaku.png">
                </div>
                <div class="text-wrapper">
                    <i>Katon: Gouka Mekkyaku</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/hiraishin/Cover_Hiraishin.png">
                </div>
                <div class="text-wrapper">
                    <i>Hiraishin no Jutsu</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/hiraishingiri/Cover_Hiraishingiri.png">
                </div>
                <div class="text-wrapper">
                    <i>Hiraishin Giri</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/kamui/Cover_Kamui.png">
                </div>
                <div class="text-wrapper">
                    <i>Kamui</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/karyuuendan/Cover_Karyuuendan.png">
                </div>
                <div class="text-wrapper">
                    <i>Katon: Karyuu Endan</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/kuchiyose/Cover_Kuchiyose.png">
                </div>
                <div class="text-wrapper">
                    <i>Kuchiyose no Jutsu</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/mokujin/Cover_Mokujin.png">
                </div>
                <div class="text-wrapper">
                    <i>Mokuton: Mokujin no Jutsu</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/raikiri/Cover_Raikiri.png">
                </div>
                <div class="text-wrapper">
                    <i>Raikiri</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/rasengan/Cover_Rasengan.png">
                </div>
                <div class="text-wrapper">
                    <i>Rasengan</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/shikifuujin/Cover_Shikifuujin.png">
                </div>
                <div class="text-wrapper">
                    <i>Fuuinjutsu: Shiki Fuujin</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/shinsuusenju/Cover_Shinsuusenju.png">
                </div>
                <div class="text-wrapper">
                    <i>Senpou Mokuton: Shin Suusenju</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/suiryuudan/Cover_Suiryuudan.png">
                </div>
                <div class="text-wrapper">
                    <i>Suiton: Suiryuudan</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/susanoo/Cover_Susanoo.png">
                </div>
                <div class="text-wrapper">
                    <i>Susanoo</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/tajuukagebunshin/Cover_Tajuukagebunshin.png">
                </div>
                <div class="text-wrapper">
                    <i>Tajuu Kagebunshin no Jutsu</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/tengaishinsei/Cover_Tengaishinsei.png">
                </div>
                <div class="text-wrapper">
                    <i>Tengai Shinsei</i>
                </div>
            </div>
            <div class="jutsu-container">
                <div class="img-container">
                    <img src="img/jutsu/tsukuyomi/Cover_Tsukuyomi.png">
                </div>
                <div class="text-wrapper">
                    <i>Tsukuyomi</i>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
