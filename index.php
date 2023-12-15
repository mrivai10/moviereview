<?php
  include "config/koneksi.php";
?>

<html>
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Movie Review</title>
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
        <h1>Movie Review</h1>
        <p>Tempat Nongkrong Pecinta Film</p>
      </div>

      <div class="gallery" id="news">
        <?php
          $query = mysqli_query($conn, "SELECT * 
              FROM berita 
              ORDER BY tgl_upload DESC 
              LIMIT 5
          ");

          $jumlah_berita = mysqli_num_rows($query);

          echo '<div class="slideshow-container">';

          while($row = mysqli_fetch_assoc($query)){
            echo '<div class="mySlides fade">';
            echo '<img src="img/berita/'.$row['foto_berita'].'" />'; 
            echo '<div class="text">'.$row['judul_berita'].'</div>';
            echo '</div>';
          }
          echo '<div style="text-align:center">';
            for($i=0; $i<$jumlah_berita; $i++){
              echo '<span class="dot"></span>';
            }
          
            echo '</div></div>';
        ?>

        <div class="gallery-info">
          <button class="news">Breaking News</button>
          <a href="news.php" class="news-container">
            <p class="news-content">
              <?php 
                  $query = mysqli_query($conn, "SELECT isi_berita 
                      FROM berita 
                      ORDER BY tgl_upload
                      LIMIT 1
                  ");
          
                  while($fetch = mysqli_fetch_array($query)){
                    $string = $fetch['isi_berita'];

                    if(strlen($string) > 150) {
                      $stringCut = substr($string, 0, 150);
                      $string = $stringCut . '...';
                    }
                    echo $string; 
                  }
              ?>
            </p>
          </a>
        </div>
      </div>

      <div class="row">
        <div class="leftcolumn" id="reviews">
            <?php 
              include 'config/koneksi.php';
              $i =1;
              $query = mysqli_query($conn, "SELECT review.*, film.*, kategori.nama_kategori, user.username 
                  FROM review 
                  INNER JOIN film ON review.id_film = film.id_film 
                  INNER JOIN kategori ON film.id_kategori = kategori.id_kategori
                  INNER JOIN user ON review.id_user = user.id_user
                  LIMIT 2
                  ");
        
                  while($fetch = mysqli_fetch_array($query)){
                    $string = $fetch['isi_review'];

                      if(strlen($string) > 400) {
                        $stringCut = substr($string, 0, 400);
                        $string = $stringCut . '...';
                      }
            ?>
          <div class="card content">
            <h2><?php echo $fetch['judul_film']; ?> (<?php echo $fetch['tahun']; ?>)</h2>
            <div class="content-review">
              <img src="img/film/<?php echo $fetch['foto_film']; ?>" alt="fotofilm" width="100%">
            </div>
            <h3 class="rating"><span>&#9733;</span><?php echo $fetch['rating']; ?>/10</h3>
            <h3 class="review-title"><?php echo $fetch['judul_review']; ?></h3>
            <h4 class="username"><?php echo $fetch['username']; ?></h4>
            <h5><?php echo $fetch['tgl_upload']; ?></h5>
            <p><?php echo $string; ?></p>
            <a href="reviewdetail.php?id=<?php echo $fetch['id_review']; ?>" class="readmore" >Baca Selengkapnya</a>
          </div>
          <?php
                }
            ?>
        </div>
        <div class="rightcolumn" id="about">
          <div class="card sidecontent about">
            <h2>Introduction</h2>
            <div class="container-about">
              <div class="about-info">
                <a href="about.php"><img src="img/assets/cinema.jpg" alt="cinema" width="100px" /></a>
              </div>
              <p>
                Selamat datang di Movie Review, tempat kami memberikan review mendalam tentang film-film dari berbagai genre. Tujuan kami adalah memandu Anda menuju pengalaman menonton yang memuaskan dan menginspirasi. Mari jelajahi dunia sinematik bersama Movie Review!
              </p>
            </div>
          </div>
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
          <div class="card sidecontent social-media">
            <h2>Follow Us</h2>
            <div class="container">
              <div class="fakeimg">
                <a href="https://www.instagram.com/mdrivai_/" target="_blank"><img src="img/icon/instagram.png" alt="social-media" /></a>
                <h5>Instagram</h5>
              </div>
              <div class="fakeimg">
                <a href="https://www.facebook.com/" target="_blank"><img src="img/icon/facebook.png" alt="social-media" /></a>
                <h5>Facebook</h5>
              </div>
              <div class="fakeimg">
                <a href="https://www.linkedin.com/in/muhamadrivai10/" target="_blank"><img src="img/icon/linkedin.png" alt="social-media" /></a>
                <h5>Linkedin</h5>
              </div>
              <div class="fakeimg">
                <a href="https://github.com/mrivai10" target="_blank"><img src="img/icon/github.png" alt="social-media" /></a>
                <h5>Github</h5>
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
</html>
