<?php
  session_start();

  if (!isset($_SESSION['loggedin'])) {
    header('Location: ../index.php');
    exit;
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Data Kategori</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" href="../img/icon/icon.png" />
  </head>
  <body>
    <?php include 'sidebar.php'; ?>
    <section class="container">
      <h1>Data Kategori</h1>
      <p>Berikut merupakan data kategori review yang terdaftar pada sistem</p>
      <a href="form-data-kategori.php" class="btn btn-tambah">Tambah</a>
      <div class="film">
        <div style="overflow-x: auto;">
          <table>
            <tr>
              <th>No.</th>
              <th>Nama Kategori</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
            <?php 
              include '../config/koneksi.php';

              $per_page = 5;
              $page = isset($_GET['page']) ? $_GET['page'] : 1;
              $start = ($page - 1) * $per_page;

              $total_pages_query = mysqli_query($conn, "SELECT COUNT(*) as total FROM kategori;");
              $total_pages = mysqli_fetch_array($total_pages_query)['total'];
              $number_of_pages = ceil($total_pages / $per_page);

              $i = $start + 1;

              $query = mysqli_query($conn, "SELECT * 
                  FROM kategori 
                  ORDER BY nama_kategori 
                  LIMIT $start, $per_page");  

              while($fetch = mysqli_fetch_array($query)){
            ?>
              <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $fetch['nama_kategori']; ?></td>
                <td><img src="../img/kategori/<?php echo $fetch['foto_kategori']; ?>" alt="fotokategori" style="width:150px; height:200px;"></td>
                <td>
                  <a href="form-data-kategori.php?edit=<?php echo $fetch['id_kategori']; ?>" class="btn btn-edit">Edit</a>
                  <a href="proses.php?hapusKategori=<?php echo $fetch['id_kategori']; ?>" onClick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-hapus">Hapus</a>
                </td>
              </tr>
            <?php
              }
            ?>
          </table>
          <div class="pagination">
            <?php
              for ($i = 1; $i <= $number_of_pages; $i++) {
                echo "<a href='?page=$i' ";
                if ($page == $i) {
                  echo "class='active'";
                }
                echo ">$i</a>";
              }
            ?>
          </div>
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
