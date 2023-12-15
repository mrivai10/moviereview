<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Review - News</title>
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
            <li><a href="reviews.php">Reviews</a></li>
            <li><a href="category.php">Category</a></li>
            <li><a href="about.php">About</a></li>
            <li class="login-button"><a href="login.php">Login</a></li>
          </ul>
        </div>
      </div>  

      <div class="header">
        <h1>News</h1>
        <p>Berita Terbaru dari Kami</p>
      </div>

    <div class="row">
        <div class="leftcolumn" id="news">
            <section>
              <div class="card content">
                  <?php
                      include 'config/koneksi.php';
                      $i = 1;
                      $per_page = 2;
                      $page = isset($_GET['page']) ? $_GET['page'] : 1;
                      $start = ($page - 1) * $per_page;

                      $query = mysqli_query($conn, "SELECT berita.*, user.id_user, user.username 
                        FROM berita 
                        INNER JOIN user on berita.id_user = user.id_user
                        ORDER BY tgl_upload DESC
                        LIMIT $start, $per_page
                        ;");

                      while ($fetch = mysqli_fetch_array($query)) {
                          $string = $fetch['isi_berita'];
                          $wordLimit = 150;

                          $words = explode(' ', $string);
                          $chunks = array_chunk($words, $wordLimit);
                          $string = '';

                          foreach($chunks as $chunk) {
                              $string .= implode(' ', $chunk) . "\n\n";
                          }
                          $string = nl2br($string);
                          $i++;

                          $total_pages_query = mysqli_query($conn, "SELECT COUNT(*) as total FROM berita;");
                          $total_pages = mysqli_fetch_array($total_pages_query)['total'];
                          $number_of_pages = ceil($total_pages / $per_page);
                  ?>
                  <div class="submenu">
                      <a href="index.php">Home > </a>
                      <a href="news.php">News</a>
                  </div>
                  <div class="content-review">
                      <img src="img/berita/<?php echo $fetch['foto_berita']; ?>" alt="fotoberita" width="100%">
                  </div>
                  <h3 class="review-title"><?php echo $fetch['judul_berita']; ?></h3>
                  <h4 class="username"><?php echo $fetch['username']; ?></h4>
                  <h5><?php echo $fetch['tgl_upload']; ?></h5>
                  <div class="content-text">
                      <p>
                          <?php echo $string; ?>
                      </p>
                  </div>
              <?php
                  }
              ?>
          </section>
            <div class="pagination">
              <?php
                for ($i = 1; $i <= $number_of_pages; $i++) {
                  echo "<a href='news.php?page=$i' ";
                  if ($page == $i) {
                      echo "class='active'";
                  }
                  echo ">$i</a>";
              }
              ?>
          </div>
        </div>
        <div class="rightcolumn">
          <div class="card sidecontent popular">
            <h2>Popular News</h2>
            <div class="container">
              <div class="fakeimg">
                <a href="news.php" target="_blank"><img src="img/rekomendasi/money-heist.jpg" alt="social-media" /></a>
                <p>Top 10 Rekomendasi Series Genre Aksi Kriminal Terpopuler</p>
              </div>
              <div class="fakeimg">
                <a href="news.php" target="_blank"><img src="img/rekomendasi/sherlock.jpg" alt="social-media" /></a>
                <p>Top 5 Series yang dibintangi Benedict Cumberbatch</p>
              </div>
              <div class="fakeimg">
                <a href="news.php" target="_blank"><img src="img/rekomendasi/endgame.png" alt="social-media" /></a>
                <p>Top 10 film dengan Biaya Produksi Termahal</p>
              </div>
            </div>
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
    <script src="js/script.js"></script>
</body>
</html>