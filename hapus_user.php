<?php
    include 'koneksi.php';

    if(isset($_GET['userID'])){
        $id = $_GET ['userID'];

        $query = "DELETE FROM `user` WHERE userID = '$id'";
        $hasil = mysqli_query($koneksi, $query);

        echo '<script>
              alert("Data Terhapus");
              window.location = "d_user.php";
              </script>';
    }    
?>