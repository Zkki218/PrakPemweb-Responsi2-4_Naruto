<?php
include "koneksi.php";
session_start();
?>

<?php 
if ($_SESSION['level'] != "Admin" &&  $_SESSION['level'] != "Pengunjung") { 
  header("Location: landing-page.php");
  exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
  <link rel="stylesheet" href="styles/index.css">
</head>
<body>
  <div class="main-container">
    <div class="sub-container-1">
      <div class="navbar">
        <p>Naruto</p>
        <div class="navbar-right">
          <a href="index.php">Home</a>
          <a href="character.php">Character</a>
          <a href="jutsu.php">Jutsu</a>
          <a href="account.php">Account</a>
        </div>
      </div>
      <div class="switcher-container">
        <button type="button" class="btn-switch">Change Character</button>
        <div class="switcher-content">
          <a href="index.php?name=Hashirama">Hashirama</a>
          <a href="index.php?name=Hiruzen">Hiruzen</a>
          <a href="index.php?name=Itachi">Itachi</a>
          <a href="index.php?name=Kakashi">Kakashi</a>
          <a href="index.php?name=Madara">Madara</a>
          <a href="index.php?name=Minato">Minato</a>
          <a href="index.php?name=Naruto">Naruto</a>
          <a href="index.php?name=Obito">Obito</a>
          <a href="index.php?name=Sasuke">Sasuke</a>
          <a href="index.php?name=Tobirama">Tobirama</a>
        </div>  
      </div>
      <br><br>
      <?php
      if(isset($_GET['name'])){//terserah mau pake GET apa session
      ?>
      <!-- Disini pake query dulu nyari nama sesuai di name, terus h1 sama p nya pake value di tabel. Img nya bagian nama shinobinya aja yang ngikut get/session -->
      <img src="img/chara/naruto/Circle_Naruto.png"> 
      <h1>Naruto Uzumaki</h1>
      <p>Naruto Uzumaki (うずまきナルト, Uzumaki Naruto) is a shinobi of Konohagakure's Uzumaki clan. He became the jinchūriki of the Nine-Tails on the day of his birth — a fate that caused him to be shunned by most of Konoha throughout his childhood. After joining Team Kakashi, Naruto worked hard to gain the village's acknowledgement all the while chasing his dream to become Hokage. In the following years, through many hardships and ordeals, he became a capable ninja, regarded as a hero both by the villagers, and soon after, the rest of the world, becoming known as the Hero of the Hidden Leaf (木ノ葉隠れの英雄, Konohagakure no Eiyū, literally meaning: Hero of the Hidden Tree Leaves). He soon proved to be one of the main factors in winning the Fourth Shinobi World War, leading him to achieve his dream and become the village's Seventh Hokage (七代目火影, Nanadaime Hokage, literally meaning: Seventh Fire Shadow).</p>
    </div>
    <div class="sub-container-2">
      <div class="banner-container-1">
        <div class="sub-banner-1">
          <p>Jutsu<br>(术)</p>
        </div>
      </div>
      <!-- Disini looping buat ambil jutsu shinobinya -->
      <div class="jutsu-container">
        <div class="jutsu">
          <div class="box-2">
            <div class="img-wrapper">
              <img src="img/jutsu/rasengan/Cover_Rasengan.png">
            </div>
            <div class="jutsu-desc-wrapper">
              <i>
                Rasengan<br>
                <span>Handsign:</span>
              </i>
            </div>
            <div class="handsign-wrapper">
              <div class="handsign-box">
                <p>-</p>
              </div>
            </div>
          </div>
        </div>
        <div class="jutsu">
          <div class="box-2">
            <div class="img-wrapper">
              <img src="img/jutsu/tajuukagebunshin/Cover_Tajuukagebunshin.png">
            </div>
            <div class="jutsu-desc-wrapper">
              <i>
                Tajuu Kagebunshin no Jutsu<br>
                <span>Handsign:</span>
              </i>
            </div>
            <div class="handsign-wrapper">
              <div class="handsign-box">
                <p>Clone</p>
              </div>
            </div>
          </div>
        </div>
        <div class="jutsu">
          <div class="box-2">
            <div class="img-wrapper">
              <img src="img/jutsu/kuchiyose/Cover_Kuchiyose.png">
            </div>
            <div class="jutsu-desc-wrapper">
              <i>
                Kuchiyose<br>
                <span>Handsign:</span>
              </i>
            </div>
            <div class="handsign-wrapper">
              <div class="handsign-box">
                <p>Boar → Dog → Bird → Monkey → Ram</p>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
    <?php }; ?>
    <div class="sub-container-3">
      <div class="banner-container-2">
        <div class="sub-banner-2-1">
          <p>T&nbsp;&nbsp;R&nbsp;&nbsp;Y</p>
        </div>
        <div class="sub-banner-2-2">
          <span>Y&nbsp;O&nbsp;U&nbsp;R</span>
        </div>
        <div class="sub-banner-2-3">
          <i>J&nbsp;&nbsp;U&nbsp;&nbsp;T&nbsp;&nbsp;S&nbsp;&nbsp;U</i>
        </div>
      </div>
      <div class="handsign-container">
        <div class="handsign">
          <div class="img-wrapper">
            <img src="img/handsigns/Clone.svg">
          </div>
          <div class="handsign-desc-wrapper">
            <i class="handsign-desc">Clone</i>
          </div>
        </div>
        <div class="handsign">
          <div class="img-wrapper">
            <img src="img/handsigns/boar.svg">
          </div>
          <div class="handsign-desc-wrapper">
            <i class="handsign-desc">Boar</i>
          </div>
        </div>
        <div class="handsign">
          <div class="img-wrapper">
            <img src="img/handsigns/Dog.svg">
          </div>
          <div class="handsign-desc-wrapper">
            <i class="handsign-desc">Dog</i>
          </div>
        </div>
        <div class="handsign">
          <div class="img-wrapper">
            <img src="img/handsigns/bird.svg">
          </div>
          <div class="handsign-desc-wrapper">
            <i class="handsign-desc">Bird</i>
          </div>
        </div>
        <div class="handsign">
          <div class="img-wrapper">
            <img src="img/handsigns/Monkey.svg">
          </div>
          <div class="handsign-desc-wrapper">
            <i class="handsign-desc">Monkey</i>
          </div>
        </div>
        <div class="handsign">
          <div class="img-wrapper">
            <img src="img/handsigns/Ram.svg">
          </div>
          <div class="handsign-desc-wrapper">
            <i class="handsign-desc">Ram</i>
          </div>
        </div>
        <div class="handsign">
          <div class="img-wrapper">
            <img src="img/handsigns/Dragon.svg">
          </div>
          <div class="handsign-desc-wrapper">
            <i class="handsign-desc">Dragon</i>
          </div>
        </div>
        <div class="handsign">
          <div class="img-wrapper">
            <img src="img/handsigns/Hare.svg">
          </div>
          <div class="handsign-desc-wrapper">
            <i class="handsign-desc">Hare</i>
          </div>
        </div>
        <div class="handsign">
          <div class="img-wrapper">
            <img src="img/handsigns/Tiger.svg">
          </div>
          <div class="handsign-desc-wrapper">
            <i class="handsign-desc">Tiger</i>
          </div>
        </div>
        <div class="handsign">
          <div class="img-wrapper">
            <img src="img/handsigns/Snake.svg">
          </div>
          <div class="handsign-desc-wrapper">
            <i class="handsign-desc">Snake</i>
          </div>
        </div>
        <div class="handsign">
          <div class="img-wrapper">
            <img src="img/handsigns/Rat.svg">
          </div>
          <div class="handsign-desc-wrapper">
            <i class="handsign-desc">Rat</i>
          </div>
        </div>
        <div class="handsign">
          <div class="img-wrapper">
            <img src="img/handsigns/Ox.svg">
          </div>
          <div class="handsign-desc-wrapper">
            <i class="handsign-desc">Ox</i>
          </div>
        </div>
        <div class="handsign">
          <div class="img-wrapper">
            <img src="img/handsigns/Clap.svg">
          </div>
          <div class="handsign-desc-wrapper">
            <i class="handsign-desc">Clap</i>
          </div>
        </div>
        <div class="handsign">
          <div class="img-wrapper">
            <img src="img/handsigns/Horse.svg">
          </div>
          <div class="handsign-desc-wrapper">
            <i class="handsign-desc">Horse</i>
          </div>
        </div>
      </div>
      <div class="handsign-input">
        <i>H&nbsp;a&nbsp;n&nbsp;d&nbsp;s&nbsp;i&nbsp;g&nbsp;n:</i><br>
        <p class="handsign-typed" id="handsign">-</p>
      </div>
      <div class="try-jutsu">
        <a href="index.php?name=Naruto&handsign=-" class="link-jutsu" id="link-jutsu">
          <button type="button" class="btn-try-jutsu">
            <span class="text-wrapper">T&nbsp;R&nbsp;Y</span>
          </button>
        </a>
      </div>
      <?php
      if(isset($_GET['name'])&&isset($_GET['handsign'])){
      ?>
      <!-- Disini looping juga buat ambil gifnya sesuai handsign -->
      <div class="gif-jutsu-container">
        <div class="gif-jutsu">
          <div class="gif-jutsu-desc-section">
            <div class="gif-jutsu-desc-wrapper">
              <i>Rasengan</i>
            </div>
          </div>
          <div class="gif-jutsu-img-section">
            <div class="gif-jutsu-img-wrapper">
              <img src="img/gif/Rasengan_Naruto.gif">
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
  <script>
    var handsignElements = document.querySelectorAll('.handsign');
    handsignElements.forEach(function(handsignElement) {
      handsignElement.addEventListener('click', function(event) {
        var clickedHandsingElement = event.currentTarget;
        var handsignDescElement = clickedHandsingElement.querySelector('.handsign-desc');
        if (handsignDescElement) {
          var handsignDescText = handsignDescElement.textContent;
          if(document.getElementById('handsign').textContent=='-'){
            document.getElementById('handsign').textContent=handsignDescText;
          }else{
            document.getElementById('handsign').textContent=document.getElementById('handsign').textContent+handsignDescText;
          }
          document.getElementById('link-jutsu').href='index.php?name=Naruto&handsign='+document.getElementById('handsign').textContent;
          console.log('Text inside handsign-desc:', handsignDescText);
        } else {
          console.log('Element with class "handsign-desc" not found within the clicked handsign element');
        }
      });
    });
  </script>
</body>
</html>
