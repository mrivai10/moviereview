<?php
    include '../config/koneksi.php';
    include 'fungsi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "tambahKategori"){
            $berhasil = tambahKategori($_POST, $_FILES);

            if($berhasil){
                echo "<script>alert('Data berhasil ditambahkan'); window.location='../admin/data-kategori.php';</script>";
                exit;
            }else{
                echo "gagal";
            }

        } else if($_POST['aksi'] == "editKategori"){
            $berhasil = editKategori($_POST, $_FILES);

            if($berhasil){
                echo "<script>alert('Data berhasil diubah'); window.location='../admin/data-kategori.php';</script>";
                exit;
            }else{
                echo "gagal";
            }
        } else if($_POST['aksi'] == "tambahFilm"){
            $berhasil = tambahFilm($_POST, $_FILES);

            if($berhasil){
                echo "<script>alert('Data berhasil ditambahkan'); window.location='../admin/data-film.php';</script>";
                exit;
            }else{
                echo "gagal";
            }
        } else if($_POST['aksi'] == "editFilm"){
            $berhasil = editFilm($_POST, $_FILES);

            if($berhasil){
                echo "<script>alert('Data berhasil diubah'); window.location='../admin/data-film.php';</script>";
                exit;
            }else{
                echo "gagal";
            }
        } else if($_POST['aksi'] == "tambahBerita"){
            $berhasil = tambahBerita($_POST, $_FILES);

            if($berhasil){
                echo "<script>alert('Data berhasil ditambahkan'); window.location='../admin/data-berita.php';</script>";
                exit;
            }else{
                echo "gagal";
            }
        } else if($_POST['aksi'] == "editBerita"){
            $berhasil = editBerita($_POST, $_FILES);

            if($berhasil){
                echo "<script>alert('Data berhasil diubah'); window.location='../admin/data-berita.php';</script>";
                exit;
            }else{
                echo "gagal";
            }
        }else if($_POST['aksi'] == "tambahReview"){
            $berhasil = tambahReview($_POST);

            if($berhasil){
                echo "<script>alert('Data berhasil ditambahkan'); window.location='../admin/data-review.php';</script>";
                exit;
            }else{
                echo "gagal";
            }
        } else if($_POST['aksi'] == "editReview"){
            $berhasil = editReview($_POST);

            if($berhasil){
                echo "<script>alert('Data berhasil diubah'); window.location='../admin/data-review.php';</script>";
                exit;
            }else{
                echo "gagal";
            }
        } else if($_POST['aksi'] == "tambahTrailer"){
            $berhasil = tambahTrailer($_POST);

            if($berhasil){
                echo "<script>alert('Data berhasil ditambahkan'); window.location='../admin/data-trailer.php';</script>";
                exit;
            }else{
                echo "gagal";
            }
        } else if($_POST['aksi'] == "editTrailer"){
            $berhasil = editTrailer($_POST);

            if($berhasil){
                echo "<script>alert('Data berhasil diubah'); window.location='../admin/data-trailer.php';</script>";
                exit;
            }else{
                echo "gagal";
            }
        }
    } 

    if(isset($_GET['hapusKategori'])){
        $berhasil = hapusKategori($_GET);

        if($berhasil){
            header("location: ../admin/data-kategori.php");
            exit;
        }else{
            echo "gagal";
        }
    }

    if(isset($_GET['hapusFilm'])){
        $berhasil = hapusFilm($_GET);

        if($berhasil){
            header("location: ../admin/data-film.php");
            exit;
        }else{
            echo "gagal";
        }
    }

    if(isset($_GET['hapusBerita'])){
        $berhasil = hapusBerita($_GET);

        if($berhasil){
            header("location: ../admin/data-berita.php");
            exit;
        }else{
            echo "gagal";
        }
    }

    if(isset($_GET['hapusReview'])){
        $berhasil = hapusReview($_GET);

        if($berhasil){
            header("location: ../admin/data-review.php");
            exit;
        }else{
            echo "gagal";
        }
    }

    if(isset($_GET['hapusTrailer'])){
        $berhasil = hapusTrailer($_GET);

        if($berhasil){
            header("location: ../admin/data-trailer.php");
            exit;
        }else{
            echo "gagal";
        }
    }
?>