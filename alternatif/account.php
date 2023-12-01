<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
  <link rel="stylesheet" href="styles/account.css">
</head>
<body>
  <div class="main-container">
    <div class="sub-container-1">
      <div class="nav-container">
        <nav>
          <a href="index.php?name=Naruto">Home</a>
          <a href="character.php">Character</a>
          <a href="jutsu.php">Jutsu</a>
          <a href="account.php">Account</a>
        </nav>
      </div>
    </div>
    <div class="sub-container-2">
      <div class="content-container">
        <h1>Your Account</h1>
        <div class="profile-container">
          <div class="img-container">
            <img src="img/chara/naruto/Profil_Naruto.png">
          </div>
          <div class="info-container">
            <div class="info-subcontainer">
              <p>naruto uzumaki</p><br>
              <button type="submit" class="btn-delete">
                Delete Account
              </button>
              <button type="submit" class="btn-logout">
                Logout
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>