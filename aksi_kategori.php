<?php
//menghubungkan php dengan database
    include "koneksi.php";

    //menangkap data yg dikirim dari form login
    if(isset($_POST['submit'])){
    $namakategori = $_POST['kategori'];

    $input = mysqli_query($koneksi, "INSERT INTO kategoribuku VALUES('', '$namakategori')");
    }
    if(!empty($input)){
        echo '<script>
              alert("Daftar Berhasil");
              location.href = "index.php?page=d_kategori";
              </script>';
    }
    ?>