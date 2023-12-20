<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Movie Review - Login</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="img/icon/icon.png" />
  </head>
  <body id="login-body">
    <div class="login-container">
      <div class="wrapper">
        <div class="title"><span>Login</span></div>
        <form action="config/auth.php" method="post">
          <div class="row">
            <div class="icon-container">
              <img src="img/icon/user-icon.png" alt="" />
            </div>
            <input type="text" name="username" placeholder="Username" required />
          </div>
          <div class="row">
            <div class="icon-container">
              <img src="img/icon/pass-icon.png" alt="" />
            </div>
            <input type="password" name="password" placeholder="Password" required />
          </div>
          <div class="row button">
            <button type="submit" name="login">Masuk</button>
          </div>
          <div class="row button">
            <a href="index.php" class="back">Kembali</a>
          </div>
          <!-- <div class="signup-link">Belum mempunyai akun? <a href="register.php">Daftar</a></div> -->
        </form>
      </div>
    </div>
  </body>
</html>
