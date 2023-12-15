<?php
  require_once '../config/koneksi.php';
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
  }
  
  $id_trailer= '';
  $judul_review = '';
  $link = '';
  $id_review = '';

  if(isset($_GET['edit'])){
      $id_trailer= $_GET['edit'];

      $query = "SELECT trailer.*, review.id_review, review.judul_review
        FROM trailer 
        INNER JOIN review on trailer.id_review = review.id_review
        INNER JOIN film on review.id_film = film.id_film
        WHERE id_trailer = '$id_trailer'
        ;";
      
      $sql = mysqli_query($conn, $query);
      $result = mysqli_fetch_assoc($sql);

      $id_trailer= $result['id_trailer'];
      $id_review = $result['id_review'];
      $judul_review = $result['judul_review'];
      $link = $result['link'];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form Data Trailer</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" href="../img/icon/icon.png" />
  </head>
  <body>
  <?php include 'sidebar.php'; ?>
    <section class="container">
      <h1>Form Data Trailer</h1>
      <div class="film">
        <div class="base-form">
            <form action="proses.php" method="post" enctype="multipart/form-data">
                <label for="judul_review">Judul</label>
                <input type="hidden" id="id_trailer" name="id_trailer" value="<?php echo $id_trailer;?>">
                
                <label for="judul_review">Judul Review</label>
                <select <?php if(isset($_GET['edit'])){echo "disabled"; } ?>  name="id_review" id="id_review">
                    <?php 
                        $i =1;
                        $query = mysqli_query($conn, "SELECT * FROM `review`");
                                            
                        while($fetch = mysqli_fetch_array($query)){
                    ?>
                        <option <?php if(isset($_GET['edit'])){echo "selected"; } ?> value="<?php echo $fetch['id_review']; ?>"><?php echo $fetch['judul_review']; ?></option>
                    <?php
                        }
                    ?>
               </select>

                <label for="link">Link Youtube</label>
                <textarea required name="link" id="link" cols="30" rows="5"><?php echo $link;?></textarea>
            
                <?php
                    if(isset($_GET['edit'])){
                ?>
                    <button type="submit" class="btn btn-submit" name="aksi" value="editTrailer">Simpan Perubahan</button>
                <?php
                    }else{
                ?>
                    <button type="submit" class="btn btn-submit" name="aksi" value="tambahTrailer">Simpan</button>
                <?php
                    }
                ?>
                <a href="data-trailer.php" class="btn btn-back">Kembali</a>
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