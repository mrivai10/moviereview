<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Review - Category</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="img/icon/icon.png" />
</head>
<body>
      <div class="topnav">
        <a href="index.php" class="logo">Movie Review</a>
        <input type="checkbox" id="toggler" />
        <label for="toggler">
          <img src="img/icon/bar.png" alt="" width="20px" />
        </label>
        <div class="menu">
          <ul class="list">
            <li><a href="news.php">News</a></li>
            <li><a href="reviews.php">Review</a></li>
            <li><a href="category.php">Category</a></li>
            <li><a href="about.php">About</a></li>
            <li class="login-button"><a href="login.php">Login</a></li>
          </ul>
        </div>
      </div>

      <div class="header">
        <h1>Kategori</h1>
        <p>Kategori Review yang Tersedia</p>
      </div>

      <div class="row">
        <div class="card category">
          <div class="base-category">
              <?php 
                    include 'config/koneksi.php';
                    $i=1;
                    $per_page = 10;
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $start = ($page - 1) * $per_page;
                    
                    $i =1;
                    $query = mysqli_query($conn, "SELECT * 
                      FROM kategori 
                      ORDER BY nama_kategori
                      LIMIT $start, $per_page
                      "); 

                    while($fetch = mysqli_fetch_array($query)){
                      $total_pages_query = mysqli_query($conn, "SELECT COUNT(*) as total FROM kategori");
                      $total_pages = mysqli_fetch_array($total_pages_query)['total'];
                      $number_of_pages = ceil($total_pages / $per_page);
                      $i++;
              ?>
            <div class="card content">
              <img src="img/kategori/<?php echo $fetch['foto_kategori']; ?>" alt="genre-action">
              <a href="reviews.php?category=<?php echo $fetch['id_kategori']; ?>" class="btn-category"><?php echo $fetch['nama_kategori']; ?></a>
            </div>
            <?php
                }
            ?>
          </div>
          <div class="pagination">
              <?php
                for ($i = 1; $i <= $number_of_pages; $i++) {
                  echo "<a href='category.php?page=$i' ";
                  if ($page == $i) {
                      echo "class='active'";
                  }
                  echo ">$i</a>";
              }
              ?>
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="footer-logo">
          <img src="img/assets/cinema.jpg" width="100px" alt="Logo">
          <div class="footer-info">
            <h3>Movie Review</h3>
            <p>Jangan lewatkan update terbaru kami. Ikuti kami di media sosial dan berlangganan buletin kami untuk tetap terhubung dengan kami.</p>
          </div>
        </div>
        <div class="address">
          <h3>Alamat Kami</h3>
          <p>Indonesia, Tanjung Pinang</p>
          <p>Perumahan Bukit Indah Lestari</p>
          </br>
          <p>2101020112@student.umrah.ac.id</p>
        </div>
        <div class="contact-form">
          <h3>Hubungi Kami</h3>
          <input type="email" id="email" name="email" placeholder="Email" required>
          <textarea id="message" name="message" rows="3" placeholder="Pesan" required></textarea>
          <button class="footer-button" type="submit">Kirim</button>
        </div>
      </div>
</body>
</html>