<?php
    require_once "koneksi.php";
    session_start();

    if ($stmt = $conn->prepare('SELECT id_user, password FROM user WHERE username = ?')) {
       
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
    
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id_user, $password);
            $stmt->fetch();
            if (password_verify($_POST['password'], $password)) {
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $_POST['username'];
                echo 'Welcome ' . $_SESSION['name'] . '!';
                echo "<script>window.location='../admin/index.php';</script>";
            } else {
                // Password Salah
                echo "<script>alert('Username atau password salah!'); window.location='../login.php';</script>";
            }
        } else {
            // Akun Tidak Ada
            echo "<script>alert('Username atau password tidak terdaftar!'); window.location='../login.php';</script>";
        }
        $stmt->close();
    }
?>
