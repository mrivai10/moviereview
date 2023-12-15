<?php
    require_once "config/koneksi.php";

    function registrasi($data){
        global $conn;
        $username = strtolower(stripslashes($data['username']));
        $email = mysqli_real_escape_string($conn, $data['email']);
        $password = mysqli_real_escape_string($conn, $data['password']);
        $password2 = mysqli_real_escape_string($conn, $data['konfirmasiPassword']);
        $role = "user";

        $stmt = $conn->prepare("SELECT username FROM user WHERE username = ?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "<script>alert('username sudah terdaftar!')</script>";
            return false;
            exit();
        }

        if ($password !== $password2) {
            echo "<script> alert('Konfirmasi Password tidak sesuai');</script>";
            return false;
            exit();
        }

        $password = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $conn->prepare("INSERT into user VALUES (NULL, ?, ?, ?, ?)");
        $stmt->bind_param('ssss', $username, $email, $password, $role);
        $stmt->execute();

        return $stmt->affected_rows;
    }

    if (isset($_POST['register'])) {
      if (registrasi($_POST) > 0) {
          echo "<script> alert('Registrasi Berhasil)
          .then(function(){ 
            window.location = 'login.php'; 
          });</script>";
      } else {
          echo mysqli_error($conn);
      }
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body id="login-body">
    <div class="login-container">
      <div class="wrapper">
        <div class="title"><span>Register</span></div>
        <form action="" method="post">
          <div class="row">
            <div class="icon-container">
              <img src="img/icon/user-icon.png" alt="" />
            </div>
            <input type="text" name="username" placeholder="Username" required />
          </div>
          <div class="row">
            <div class="icon-container">
              <img src="img/icon/email-icon.png" alt="" />
            </div>
            <input type="email" name="email" placeholder="Email" required />
          </div>
          <div class="row">
            <div class="icon-container">
              <img src="img/icon/pass-icon.png" alt="" />
            </div>
            <input type="password" name="password" placeholder="Password" required />
          </div>
          <div class="row">
            <div class="icon-container">
              <img src="img/icon/pass-icon.png" alt="" />
            </div>
            <input type="password" name="konfirmasiPassword" placeholder="Konfirmasi Password" required />
          </div>
          <div class="row button">
            <button type="submit" name="register">Daftar</button>
          </div>
          <div class="row button">
            <a href="index.php" class="back">Kembali</a>
          </div>
          <div class="signup-link">Sudah mempunyai akun? <a href="login.php">Login</a></div>
        </form>
      </div>
    </div>
  </body>
</html>
