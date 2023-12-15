<?php
include '../config/koneksi.php';

function tambahKategori($data, $files){
    global $conn;

    $nama_kategori = mysqli_real_escape_string($conn, $data['nama_kategori']);
    $foto_kategori = $files['foto_kategori']['name'];
    $file_temp = $files['foto_kategori']['tmp_name'];
    $folder_location = "../img/kategori/";
    $location = $folder_location.$foto_kategori;

    if(file_exists($location)){
        $location = $folder_location.$foto_kategori;
    }

    if(move_uploaded_file($file_temp, $location)){
        $query = "INSERT INTO `kategori` (`nama_kategori`,`foto_kategori`) VALUES ('$nama_kategori', '$foto_kategori')";
        $sql = mysqli_query($conn, $query);

        return true;
    } else {
        return false; 
    }
}

function editKategori($data, $files){
    global $conn;

    $id_kategori = mysqli_real_escape_string($conn, $data['id_kategori']);
    $nama_kategori = mysqli_real_escape_string($conn, $data['nama_kategori']);
    $foto_kategori = $files['foto_kategori']['name'];
    $file_temp = $files['foto_kategori']['tmp_name'];
    $folder_location = "../img/kategori/";
    $location = $folder_location.$foto_kategori;

    $queryShow = "SELECT * FROM kategori WHERE id_kategori = '$id_kategori';";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    if ($foto_kategori !== "") {
        if (!empty($result['foto_kategori'])) {
            unlink($folder_location.$result['foto_kategori']);
        }

        move_uploaded_file($file_temp, $location);
    } else {
        $foto_kategori = $result['foto_kategori'];
    }

    $query = "UPDATE kategori SET nama_kategori = '$nama_kategori', foto_kategori='$foto_kategori' WHERE id_kategori='$id_kategori'";

    $sql = mysqli_query($conn, $query);

    return true;
}

function hapusKategori($data){
    global $conn;

    $id_kategori= mysqli_real_escape_string($conn, $data['hapusKategori']);

    $queryShow = "SELECT * FROM kategori WHERE id_kategori = '$id_kategori';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $resultShow = mysqli_fetch_array($sqlShow);

    $folderPath = "../img/kategori/"; 

    $filePath = $folderPath . $resultShow['foto_kategori'];

    if (file_exists($filePath)) {
        unlink($filePath);
    }

    $query = "DELETE FROM kategori WHERE id_kategori = '$id_kategori';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

function tambahFilm($data, $files){
    global $conn;

    $judul_film = mysqli_real_escape_string($conn, $data['judul_film']);
    $tahun = mysqli_real_escape_string($conn, $data['tahun']);
    $sinopsis = mysqli_real_escape_string($conn, $data['sinopsis']);
    $id_kategori = $data['id_kategori'];
    $foto_film = $files['foto_film']['name'];
    $file_temp = $files['foto_film']['tmp_name'];
    $folder_location = "../img/film/";
    $location = $folder_location.$foto_film;

    if(file_exists($location)){
        $location = $folder_location.$foto_film;
    }

    if(move_uploaded_file($file_temp, $location)){
        $query = "INSERT INTO `film` (`judul_film`, `tahun`, `sinopsis`, `foto_film`, `id_kategori`) VALUES ('$judul_film', '$tahun', '$sinopsis', '$foto_film', '$id_kategori')";
        $sql = mysqli_query($conn, $query);

        return true;
    } else {
        return false; 
    }
}

function editFilm($data, $files){
    global $conn;

    $id_film = mysqli_real_escape_string($conn, $data['id_film']);
    $judul_film = mysqli_real_escape_string($conn, $data['judul_film']);
    $tahun = mysqli_real_escape_string($conn, $data['tahun']);
    $sinopsis = mysqli_real_escape_string($conn, $data['sinopsis']);
    $id_kategori = mysqli_real_escape_string($conn, $data['id_kategori']);
    $foto_film = $files['foto_film']['name'];
    $file_temp = $files['foto_film']['tmp_name'];
    $folder_location = "../img/film/";
    $location = $folder_location.$foto_film;

    $queryShow = "SELECT * FROM film WHERE id_film = '$id_film';";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    if ($foto_film !== "") {
        if (!empty($result['foto_film'])) {
            unlink($folder_location.$result['foto_film']);
        }

        move_uploaded_file($file_temp, $location);
    } else {
        $foto_film = $result['foto_film'];
    }

    $query = "UPDATE film SET judul_film = '$judul_film', tahun = '$tahun',sinopsis = '$sinopsis', foto_film='$foto_film', id_kategori = '$id_kategori' WHERE id_film='$id_film'";

    $sql = mysqli_query($conn, $query);

    return true;
}

function hapusFilm($data){
    global $conn;

    $id_film= mysqli_real_escape_string($conn, $data['hapusFilm']);

    $queryShow = "SELECT * FROM film WHERE id_film = '$id_film';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $resultShow = mysqli_fetch_array($sqlShow);

    $query = "DELETE FROM film WHERE id_film = '$id_film';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

function tambahBerita($data, $files){
    global $conn;

    $judul_berita = mysqli_real_escape_string($conn, $data['judul_berita']);
    $isi_berita = mysqli_real_escape_string($conn, $data['isi_berita']);

    $foto_berita = $files['foto_berita']['name'];
    $file_temp = $files['foto_berita']['tmp_name'];
    $folder_location = "../img/berita/";
    $location = $folder_location.$foto_berita;

    if(file_exists($location)){
        $location = $folder_location.$foto_berita;
    }

    if(move_uploaded_file($file_temp, $location)){
        $query = "INSERT INTO `berita` (`judul_berita`, `isi_berita`, `foto_berita`, `id_user`,`tgl_upload`) VALUES ('$judul_berita', '$isi_berita', '$foto_berita', 1 , NOW())";
        $sql = mysqli_query($conn, $query);

        return true;
    } else {
        return false; 
    }
}

function editBerita($data,$files){
    global $conn;

    $id_berita = mysqli_real_escape_string($conn, $data['id_berita']);
    $judul_berita = mysqli_real_escape_string($conn, $data['judul_berita']);
    $isi_berita = mysqli_real_escape_string($conn, $data['isi_berita']);

    $foto_berita = $files['foto_berita']['name'];
    $file_temp = $files['foto_berita']['tmp_name'];
    $folder_location = "../img/berita/";
    $location = $folder_location.$foto_berita;

    $queryShow = "SELECT * FROM berita WHERE id_berita = '$id_berita';";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    if ($foto_berita !== "") {
        if (!empty($result['foto_berita'])) {
            unlink($folder_location.$result['foto_berita']);
        }

        move_uploaded_file($file_temp, $location);
    } else {
        $foto_berita = $result['foto_berita'];
    }

    $query = "UPDATE berita SET judul_berita = '$judul_berita', isi_berita = '$isi_berita', foto_berita='$foto_berita', tgl_upload = NOW() WHERE id_berita='$id_berita'";

    $sql = mysqli_query($conn, $query);

    return true;
}

function hapusBerita($data){
    global $conn;

    $id_berita= mysqli_real_escape_string($conn, $data['hapusBerita']);

    $queryShow = "SELECT * FROM berita WHERE id_berita = '$id_berita';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $resultShow = mysqli_fetch_array($sqlShow);

    $folderPath = "../img/berita/"; 

    $filePath = $folderPath . $resultShow['foto_berita'];

    if (file_exists($filePath)) {
        unlink($filePath);
    }

    $query = "DELETE FROM berita WHERE id_berita = '$id_berita';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

function tambahReview($data){
    global $conn;

    $judul_review = mysqli_real_escape_string($conn, $_POST['judul_review']);
    $isi_review = mysqli_real_escape_string($conn, $_POST['isi_review']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);
    $id_film = mysqli_real_escape_string($conn, $_POST['id_film']);

    $query = "INSERT INTO `review` (`judul_review`, `isi_review`, `rating` , `id_film`, `id_user`, `tgl_upload`) VALUES ('$judul_review', '$isi_review', '$rating','$id_film', 1, NOW())";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

function editReview($data){
    global $conn;

    $id_review = mysqli_real_escape_string($conn, $_POST['id_review']);
    $judul_review = mysqli_real_escape_string($conn, $_POST['judul_review']);
    $isi_review = mysqli_real_escape_string($conn, $_POST['isi_review']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);
    $id_film = mysqli_real_escape_string($conn, $_POST['id_film']);

    $query = "UPDATE review SET judul_review = '$judul_review', isi_review='$isi_review', rating = '$rating', id_film = '$id_film' WHERE id_review='$id_review'";
    $sql = mysqli_query($conn, $query);

    return true;
}

function hapusReview($data){
    global $conn;

    $id_review= mysqli_real_escape_string($conn, $data['hapusReview']);

    $queryShow = "SELECT * FROM review WHERE id_review = '$id_review';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $resultShow = mysqli_fetch_array($sqlShow);

    $query = "DELETE FROM review WHERE id_review = '$id_review';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

function tambahTrailer($data){
    global $conn;

    $link = mysqli_real_escape_string($conn, $data['link']);
    $id_review = mysqli_real_escape_string($conn, $_POST['id_review']);
   
    $query = "INSERT INTO `trailer` (`link`, `id_review`) VALUES ('$link', '$id_review')";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}

function editTrailer($data){
    global $conn;


    $id_trailer = mysqli_real_escape_string($conn, $data['id_trailer']);
    $link = mysqli_real_escape_string($conn, $data['link']);
   
    $query = "UPDATE trailer SET link = '$link' WHERE id_trailer='$id_trailer'";
    $sql = mysqli_query($conn, $query);

    return true;
}

function hapusTrailer($data){
    global $conn;

    $id_trailer= mysqli_real_escape_string($conn, $data['hapusTrailer']);

    $queryShow = "SELECT * FROM trailer WHERE id_trailer = '$id_trailer';";
    $sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
    $resultShow = mysqli_fetch_array($sqlShow);

    $query = "DELETE FROM trailer WHERE id_trailer = '$id_trailer';";
    $sql = mysqli_query($GLOBALS['conn'], $query);

    return true;
}
?>
