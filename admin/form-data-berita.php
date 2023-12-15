<?php
  require_once '../config/koneksi.php';
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
  }
  
  $id_berita = '';
  $judul_berita = '';
  $isi_berita = '';
  $foto_berita = '';
  $tgl_upload = '';

  if(isset($_GET['edit'])){
      $id_berita = $_GET['edit'];

      $query = "SELECT * FROM berita WHERE id_berita = '$id_berita'";
      
      $sql = mysqli_query($conn, $query);
      $result = mysqli_fetch_assoc($sql);

      $id_berita = $result['id_berita'];
      $judul_berita = $result['judul_berita'];
      $isi_berita = $result['isi_berita'];
      $foto_berita = $result['foto_berita'];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form Data Berita</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" href="../img/icon/icon.png" />
  </head>
  <body>
  <?php include 'sidebar.php'; ?>
    <section class="container">
      <h1>Form Data Berita</h1>
      <div class="film">
        <div class="base-form">
            <form action="proses.php" method="post" enctype="multipart/form-data">
                <label for="judul_film">Judul Berita</label>
                <input type="hidden" id="id_berita" name="id_berita" value="<?php echo $id_berita;?>">
                <input required type="text" id="judul_film" name="judul_berita" placeholder="Judul Berita" value="<?php echo $judul_berita; ?>">

                <label for="judul_film">Isi Berita</label><br>
                <textarea required name="isi_berita" id="isi_berita" cols="30" rows="10"><?php echo $isi_berita;?></textarea>

                <label for="foto_berita">Foto Berita</label><br>
                <input type="file" id="foto_berita" name="foto_berita" placeholder="Foto Berita" value="<?php echo $foto_berita; ?>">

                <label for="username">Username</label>
                <input disabled type="text" id="username" name="username" placeholder="Admin">
            
                <?php
                    if(isset($_GET['edit'])){
                ?>
                    <button type="submit" class="btn btn-submit" name="aksi" value="editBerita">Simpan Perubahan</button>
                <?php
                    }else{
                ?>
                    <button type="submit" class="btn btn-submit" name="aksi" value="tambahBerita">Simpan</button>
                <?php
                    }
                ?>
                <a href="data-berita.php" class="btn btn-back">Kembali</a>
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