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
    <title>Data Trailer</title>
    <meta charset="utf-8">
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="icon" href="../img/icon/icon.png" />
  </head>
  <body>
  <?php include 'sidebar.php'; ?>
    <section class="container">
      <h1>Data Trailer</h1>
      <p>Berikut merupakan data trailer yang terdaftar pada sistem</p>
      <a href="form-data-trailer.php" class="btn btn-tambah">Tambah</a>
      <div class="film">
        <div style="overflow-x: auto;">
            <table>
                <tr>
                    <th>No.</th>
                    <th>Judul Review</th>
                    <th>Link Trailer</th>
                    <th class="btn-aksi">Aksi</th>
                </tr>
                <?php 
                    include '../config/koneksi.php';
                    
                    $per_page = 5;
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $start = ($page - 1) * $per_page;

                    $total_pages_query = mysqli_query($conn, "SELECT COUNT(*) as total FROM trailer;");
                    $total_pages = mysqli_fetch_array($total_pages_query)['total'];
                    $number_of_pages = ceil($total_pages / $per_page);

                    $i = $start + 1;

                    $query = mysqli_query($conn, "SELECT trailer.*, review.id_review, review.judul_review 
                      FROM trailer 
                      INNER JOIN review on trailer.id_review = review.id_review
                      ORDER BY review.judul_review
                      LIMIT $start, $per_page
                    ");  

                    while($fetch = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $fetch['judul_review']; ?></td>
                    <td><?php echo $fetch['link']; ?></td>
                    <td>
                        <a href="form-data-trailer.php?edit=<?php echo $fetch['id_trailer']; ?>" class="btn btn-edit">Edit</a>
                        <a href="proses.php?hapusTrailer=<?php echo $fetch['id_trailer']; ?>" onClick="return confirm('Apakah yakin ingin menghapus data ini?')" class="btn btn-hapus">Hapus</a>
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
