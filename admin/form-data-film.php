<?php
  require_once '../config/koneksi.php';
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
  }
  
  $id_film = '';
  $judul_film = '';
  $tahun = '';
  $sinopsis = '';
  $foto_film = '';
  $id_kategori = '';
  $nama_kategori = '';

  if(isset($_GET['edit'])){
      $id_film = $_GET['edit'];

      $query = "SELECT film.*, kategori.id_kategori, kategori.nama_kategori FROM film INNER JOIN kategori ON film.id_kategori = kategori.id_kategori WHERE film.id_film = $id_film;";
      
      $sql = mysqli_query($conn, $query);
      $result = mysqli_fetch_assoc($sql);

      $id_film = $result['id_film'];
      $id_kategori = $result['id_kategori'];
      $nama_kategori = $result['nama_kategori'];
      $judul_film = $result['judul_film'];
      $tahun = $result['tahun'];
      $sinopsis = $result['sinopsis'];
      $foto_film = $result['foto_film'];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form Data Film</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" href="../img/icon/icon.png" />
  </head>
  <body>
  <?php include 'sidebar.php'; ?>
    <section class="container">
      <h1>Form Data Film</h1>
      <div class="film">
        <div class="base-form">
            <form action="proses.php" method="post" enctype="multipart/form-data">
                <label for="judul_film">Judul</label>
                <input type="hidden" id="id_film" name="id_film" value="<?php echo $id_film;?>">
                <input type="hidden" id="id_kategori" name="id_kategori" value="<?php echo $id_kategori;?>">
                <input type="text" id="judul_film" name="judul_film" placeholder="Judul Film" value="<?php echo $judul_film; ?>">

                <label for="tahun">Tahun</label>
                <input type="number" id="tahun" name="tahun" placeholder="Tahun Rilis Film" value="<?php echo $tahun; ?>">

                <label for="sinopsis">Sinopsis</label>
                <textarea name="sinopsis" id="sinopsis" cols="30" rows="10"><?php echo $sinopsis;?></textarea>

                <label for="foto_film">Foto</label><br>
                <input type="file" id="foto_film" name="foto_film" placeholder="Foto Film" value="<?php echo $foto_film; ?>" accept="image/*">

                <label for="kategori">Kategori</label>
                <select name="id_kategori" id="id_kategori">
                    <?php 
                        $i =1;
                        $query = mysqli_query($conn, "SELECT * FROM `kategori` ORDER BY nama_kategori");
                                            
                        while($fetch = mysqli_fetch_array($query)){
                    ?>
                        <option value="<?php echo $fetch['id_kategori']; ?>" <?php if($fetch['id_kategori'] == $id_kategori) echo "selected"; ?> ><?php echo $fetch['nama_kategori']; ?></option>
                    <?php
                        }
                    ?>
               </select>
            
                <?php
                    if(isset($_GET['edit'])){
                ?>
                    <button type="submit" class="btn btn-submit" name="aksi" value="editFilm">Simpan Perubahan</button>
                <?php
                    }else{
                ?>
                    <button type="submit" class="btn btn-submit" name="aksi" value="tambahFilm">Simpan</button>
                <?php
                    }
                ?>
                <a href="data-film.php" class="btn btn-back">Kembali</a>
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