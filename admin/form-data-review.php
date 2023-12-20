<?php
  require_once '../config/koneksi.php';
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
  }

  $id_review = '';
  $id_film = '';
  $judul_review = '';
  $isi_review = '';
  $rating = '';
  $judul_film = '';

  if(isset($_GET['edit'])){
      $id_review = $_GET['edit'];

      $query = "SELECT review.*, film.id_film, film.judul_film FROM review INNER JOIN film ON review.id_film = film.id_film WHERE id_review = $id_review;";
      
      $sql = mysqli_query($conn, $query);
      $result = mysqli_fetch_assoc($sql);

      $id_review = $result['id_review'];
      $id_film = $result['id_film'];
      $judul_review = $result['judul_review'];
      $judul_film = $result['judul_film'];
      $isi_review = $result['isi_review'];
      $rating = $result['rating'];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form Data Review</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" href="../img/icon/icon.png" />
  </head>
  <body>
  <?php include 'sidebar.php'; ?>
    <section class="container">
      <h1>Form Data Review</h1>
      <div class="film">
        <div class="base-form">
            <form action="proses.php" method="post" enctype="multipart/form-data">
                <label for="judul_review">Judul Review</label>
                <input type="hidden" id="id_review" name="id_review" value="<?php echo $id_review;?>">
                <input required type="text" id="judul_review" name="judul_review" value="<?php echo $judul_review; ?>" placeholder="Judul Review">

                <label for="isi_review">Isi Review</label>
                <textarea name="isi_review" id="isi_review" cols="30" rows="10"><?php echo $isi_review;?></textarea>

                <label for="rating">Rating</label>
                <input required type="number" id="rating" name="rating" value="<?php echo $rating; ?>" placeholder="Rating">

                <label for="judul_film">Film</label>
                <select name="id_film" id="id_film">
                    <?php 
                        $i =1;
                        $query = mysqli_query($conn, "SELECT * FROM `film` ORDER BY judul_film");
                                            
                        while($fetch = mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $fetch['id_film']; ?>" <?php if($fetch['id_film'] == $id_film) echo "selected"; ?>><?php echo $fetch['judul_film']; ?></option>
                    <?php
                        }
                    ?>
               </select>

               <label for="username">Username</label>
               <input disabled type="text" id="username" name="username" value="" placeholder="Admin">

                <?php
                    if(isset($_GET['edit'])){
                ?>
                    <button type="submit" class="btn btn-submit" name="aksi" value="editReview">Simpan Perubahan</button>
                <?php
                    }else{
                ?>
                    <button type="submit" class="btn btn-submit" name="aksi" value="tambahReview">Simpan</button>
                <?php
                    }
                ?>
                <a href="data-review.php" class="btn btn-back">Kembali</a>
            </form>
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