<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Review - Review</title>
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
        <h1>Review</h1>
        <p>Review Terbaru dari Kami</p>
    </div>

    <div class="row">
        <div class="card">
          <div class="base-review">
            <?php
              include 'config/koneksi.php';

              $per_page = 10;
              $page = isset($_GET['page']) ? $_GET['page'] : 1;
              $start = ($page - 1) * $per_page;

              $query = "SELECT review.*, film.*, kategori.nama_kategori 
                  FROM review 
                  INNER JOIN film ON review.id_film = film.id_film 
                  INNER JOIN kategori ON film.id_kategori = kategori.id_kategori";

              if(isset($_GET['category'])){
                $id_kategori = $_GET['category'];
                $query .= " WHERE kategori.id_kategori = $id_kategori";
              }

              $query .= " ORDER BY review.tgl_upload DESC LIMIT $start, $per_page";
              $result = mysqli_query($conn, $query);

              if(mysqli_num_rows($result) > 0) {
                  while($fetch = mysqli_fetch_array($result)){
                    $total_pages_query = mysqli_query($conn, "SELECT COUNT(*) as total FROM review");
                    $total_pages = mysqli_fetch_array($total_pages_query)['total'];
                    $number_of_pages = ceil($total_pages / $per_page);
                  
              ?>
            <div class="card content">
              <div class="content-review">
                <img src="img/film/<?php echo $fetch['foto_film']; ?>" alt="fotofilm">
              </div>
              <div class="card-body">
                <h2><?php echo $fetch['judul_film']; ?></h2>
                <h3 class="review-title"><?php echo $fetch['judul_review']; ?></h3>
                <h5><?php echo $fetch['tgl_upload']; ?></h5>
                <h4 class="rating"><span>&#9733;</span><?php echo $fetch['rating']; ?>/10</h4>
                <a href="reviewdetail.php?id=<?php echo $fetch['id_review']; ?>" class="btn-reviewdetail" >Baca Review</a>
              </div>
            </div>
                <?php
                    }
                ?>
                  <?php
                  } else {

                    echo "<script>alert('Belum ada review untuk kategori ini!'); window.location='category.php';</script>";
                  }
                  ?>
          </div>
        </div>
        <div class="pagination">
          <?php
            for ($i = 1; $i <= $number_of_pages; $i++) {
                echo "<a href='reviews.php?page=$i' ";
                if ($page == $i) {
                    echo "class='active'";
                }
                echo ">$i</a>";
            }
          ?>
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
