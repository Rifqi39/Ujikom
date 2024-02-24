<?php
    include 'koneksi.php';

    if(isset($_GET['kategoriID'])){
        $id = $_GET ['kategoriID'];

        $query = "DELETE FROM `kategoribuku` WHERE kategoriID = '$id'";
        $hasil = mysqli_query($koneksi, $query);

        echo '<script>
              alert("Data Terhapus");
              window.location = "d_kategori.php";
              </script>';
    }    
?>