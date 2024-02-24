<?php
    include 'koneksi.php';

    if(isset($_GET['peminjamanID'])){
        $id = $_GET ['peminjamanID'];

        $query = "DELETE FROM `peminjaman` WHERE peminjamanID = '$id'";
        $hasil = mysqli_query($koneksi, $query);

        echo '<script>
              alert("Data Terhapus");
              window.location = "index.php";
              </script>';
    }    
?>