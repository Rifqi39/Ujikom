<?php
    //menghubungkan php dengan database
    include "koneksi.php";

    //menangkap data yg dikirim dari form login
    $username = $_POST['username'];
    $password =$_POST['password'];
    $email = $_POST['email'];
    $nama= $_POST['nama'];
    $alamat = $_POST['alamat'];
    $level = $_POST['level'];

    
    $input = mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username', '$password', '$email', '$nama', '$alamat', '$level')");


    if(!empty($input)){
      echo '<script>
            alert("Daftar Berhasil");
            window.location = "index.php";
            </script>';
    }
    ?>