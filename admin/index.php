<?php
  require_once '../config/koneksi.php';
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard Admin</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" href="../img/icon/icon.png" />
  </head>
  <body>
   <?php include 'sidebar.php'; ?>
    <section class="container">
      <h1>Selamat Datang di Dashboard Admin</h1>
      <div class="dashboard">
        <div class="card">
          <div class="card-header">
            <h2>
              <?php
                    $sql = "SELECT COUNT(*) as total FROM berita";
                    $result = mysqli_query($conn, $sql);  

                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $total = $row['total'];
                        echo $total;
                    } else {
                        echo "Belum ada data yang terdaftar";
                    }
                ?>
            </h2>
          </div>
          <div class="card-content">
            <h3>Data Berita</h3>
          </div>
          <div class="card-footer"></div>
        </div>

        <div class="card">
          <div class="card-header">
            <h2>
            <?php
                $sql = "SELECT COUNT(*) as total FROM film";
                $result = mysqli_query($conn, $sql);  

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $total = $row['total'];
                    echo $total;
                } else {
                      echo "Belum ada data yang terdaftar";
               }
              ?>
            </h2>
          </div>
          <div class="card-content">
            <h3>Data Film</h3>
          </div>
          <div class="card-footer"></div>
        </div>

        <div class="card">
          <div class="card-header">
            <h2>
            <?php
                $sql = "SELECT COUNT(*) as total FROM review";
                $result = mysqli_query($conn, $sql);  

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $total = $row['total'];
                    echo $total;
                } else {
                      echo "Belum ada data yang terdaftar";
               }
              ?>
            </h2>
          </div>
          <div class="card-content">
            <h3>Data Review</h3>
          </div>
          <div class="card-footer"></div>
        </div>

        <div class="card">
          <div class="card-header">
            <h2>
            <?php
                $sql = "SELECT COUNT(*) as total FROM kategori";
                $result = mysqli_query($conn, $sql);  

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $total = $row['total'];
                    echo $total;
                } else {
                      echo "Belum ada data yang terdaftar";
               }
              ?>
            </h2>
          </div>
          <div class="card-content">
            <h3>Data Kategori</h3>
          </div>
          <div class="card-footer"></div>
        </div>
      </div>
    </section>

    <script>
      function confirmLogout() {
        if(confirm("Anda yakin ingin logout?")) {    
          window.location.href = "../logout.php"; 
        }
      }
    </script>
  </body>
</html>