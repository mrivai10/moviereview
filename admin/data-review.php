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
    <title>Data Review</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" href="../img/icon/icon.png" />
  </head>
  <body>
  <?php include 'sidebar.php'; ?>
    <section class="container">
      <h1>Data Review</h1>
      <p>Berikut merupakan data review yang terdaftar pada sistem</p>
      <a href="form-data-review.php" class="btn btn-tambah">Tambah</a>
      <div class="film" id="review">
        <div style="overflow-x: auto;">
            <table>
                <tr>
                    <th>No.</th>
                    <th>Judul Review</th>
                    <th>Isi Review</th>
                    <th>Judul Film</th>
                    <th>Rating</th>
                    <th>Username</th>
                    <th>Tanggal Upload</th>
                    <th class="btn-aksi">Aksi</th>
                </tr>
                <tr>
                <?php 
                    include '../config/koneksi.php';

                    $per_page = 5;
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $start = ($page - 1) * $per_page;
      
                    $total_pages_query = mysqli_query($conn, "SELECT COUNT(*) as total FROM review;");
                    $total_pages = mysqli_fetch_array($total_pages_query)['total'];
                    $number_of_pages = ceil($total_pages / $per_page);
      
                    $i = $start + 1;

                    $query = mysqli_query($conn, "SELECT review.*, film.id_film, film.judul_film, kategori.nama_kategori 
                        FROM review 
                        INNER JOIN film ON review.id_film = film.id_film 
                        INNER JOIN kategori ON film.id_kategori = kategori.id_kategori
                        LIMIT $start, $per_page
                        ");
        
                    while($fetch = mysqli_fetch_array($query)){
                      $string = $fetch['isi_review'];

                      if(strlen($string) > 200) {
                        $stringCut = substr($string, 0, 200);
                        $string = $stringCut . '...';
                      }
                ?>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $fetch['judul_review']; ?></td>
                    <td><?php echo $string; ?></td>
                    <td><?php echo $fetch['judul_film']; ?></td>
                    <td><?php echo $fetch['rating']; ?></td>
                    <td>Admin</td>
                    <td><?php echo $fetch['tgl_upload']; ?></td>
                    <td>
                        <a href="form-data-review.php?edit=<?php echo $fetch['id_review']; ?>" class="btn btn-edit">Edit</a>
                        <a href="proses.php?hapusReview=<?php echo $fetch['id_review']; ?>" onClick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-hapus">Hapus</a>
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