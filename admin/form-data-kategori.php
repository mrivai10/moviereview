<?php
  require_once '../config/koneksi.php';
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
  }

  $id_kategori = '';
  $nama_kategori = '';
  $foto_kategori = '';

  if(isset($_GET['edit'])){
      $id_kategori = $_GET['edit'];

      $query = "SELECT * FROM kategori WHERE id_kategori = '$id_kategori';";
      
      $sql = mysqli_query($conn, $query);
      $result = mysqli_fetch_assoc($sql);

      $nama_kategori = $result['nama_kategori'];
      $foto_kategori = $result['foto_kategori'];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form Data Kategori</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" href="../img/icon/icon.png" />
  </head>
  <body>
  <?php include 'sidebar.php'; ?>
    <section class="container">
      <h1>Form Data Kategori</h1>
      <div class="film">
        <div class="base-form">
            <form action="proses.php" method="post" enctype="multipart/form-data">
                <label for="judul_film">Nama</label>
                <input type="hidden" id="id_kategori" name="id_kategori" value="<?php echo $id_kategori;?>">
                <input required type="text" id="judul_film" name="nama_kategori" value="<?php echo $nama_kategori; ?>" placeholder="Nama Kategori">

                <label for="tahun">Foto</label><br>
                <input type="file" id="tahun" name="foto_kategori" placeholder="Foto Kategori" value="<?php echo $foto_kategori; ?>" accept="image/*">
            
                <?php
                    if(isset($_GET['edit'])){
                ?>
                    <button type="submit" class="btn btn-submit" name="aksi" value="editKategori">Simpan Perubahan</button>
                <?php
                    }else{
                ?>
                    <button type="submit" class="btn btn-submit" name="aksi" value="tambahKategori">Simpan</button>
                <?php
                    }
                ?>
                <a href="data-kategori.php" class="btn btn-back">Kembali</a>
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