<?php
    include 'koneksi.php';

    if(isset($_GET['bukuID'])){
        $id = $_GET ['bukuID'];

        $query = "DELETE FROM `buku` WHERE bukuID = '$id'";
        $hasil = mysqli_query($koneksi, $query);

        echo '<script>
              alert("Data Terhapus");
              window.location = "d_buku.php";
              </script>';
    }    
?>