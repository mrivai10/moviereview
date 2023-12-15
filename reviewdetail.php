<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

      <div class="row">
        <div class="card base-rd">
          <a href="reviews.php" class="btn btn-back">&larr; Review Lain</a>
          <?php 
              include 'config/koneksi.php';
              $i =1;
              $id_review = $_GET['id'];
              $query = mysqli_query($conn, "SELECT review.*, film.*, kategori.nama_kategori, user.username, trailer.link 
                FROM review 
                INNER JOIN film ON review.id_film = film.id_film 
                INNER JOIN kategori ON film.id_kategori = kategori.id_kategori
                INNER JOIN user ON review.id_user = user.id_user
                LEFT JOIN trailer ON review.id_review = trailer.id_review
                
                WHERE review.id_review = '$id_review'
                ");
        
                while($fetch = mysqli_fetch_array($query)){
            ?>
          <h1 class="reviewdetail-header">Review <?php echo $fetch['judul_film']; ?> (<?php echo $fetch['tahun']; ?>)</h1>
          <div class="base-reviewdetail">
            <div class="movie-detail">
                <h3 class="review-title"><?php echo $fetch['judul_review']; ?></h3>
                <h3 class="rating"><span>&#9733;</span><?php echo $fetch['rating']; ?>/10</h3>
                <h5><?php echo $fetch['tgl_upload']; ?></h5>
                <h4 class="username"><?php echo $fetch['username']; ?></h4>
                
                <img src="img/film/<?php echo $fetch['foto_film']; ?>" alt="fotofilm" height="500px">
                <div class="sinopsis">
                  <h1 class="reviewdetail-sub">Sinopsis</h1>
                  <p><?php echo $fetch['sinopsis']; ?></p>
                </div>
                <div class="movie-review">
                  <h1 class="reviewdetail-sub">Review dari Kami</h1>
                  <p><?php echo $fetch['isi_review']; ?></p>
                </div>

                <div class="movie-trailer">
                  <h1 class="reviewdetail-sub">Trailer </h1>
                  <?php
                      $youtubeLink = $fetch['link'];

                      function getYouTubeVideoId($url) {
                        $videoId = '';
                        $pattern = '/(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';

                        if (preg_match($pattern, $url, $matches)) {
                          $videoId = $matches[1];
                        }

                        return $videoId;
                      }

                      $videoId = getYouTubeVideoId($youtubeLink);

                      if ($videoId) {
                        echo '<iframe max-width="100%" width="100%" height="500" src="https://www.youtube.com/embed/' . $videoId . '" frameborder="0"></iframe>';
                      } else {
                        echo '<p>Trailer Segera Menyusul</p>';
                      }
                  ?>
                </div>

            </div>
          </div>
          <?php
                }
            ?>
        </div>
      </>
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