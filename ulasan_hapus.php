<?php
    include 'koneksi.php';

    if(isset($_GET['ulasanID'])){
        $id = $_GET ['ulasanID'];

        $query = "DELETE FROM `ulasan` WHERE ulasanID = '$id'";
        $hasil = mysqli_query($koneksi, $query);

        echo '<script>
              alert("Data Terhapus");
             location.href = "ulasan.php";
              </script>';
    }    
?>