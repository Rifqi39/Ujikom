<?php
    //menghubungkan php dengan database
    include "koneksi.php";

    //menangkap data yg dikirim dari form login
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $level = $_POST['level'];

    // Cek apakah username atau email sudah ada di database
    $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' OR email = '$email'");

    if (mysqli_num_rows($cek_data) > 0) {
        echo '<script>
            alert("Username atau Email sudah ada dalam Database!");
            location.href = "register.php";
            </script>';
    } else {
        $input = mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username', '$password', '$email', '$nama', '$alamat', '$level')");
        
        if ($input) {
            echo '<script>
                alert("Daftar Berhasil");
                location.href = "index.php";
                </script>';
        } else {
            echo '<script>
                alert("Gagal mendaftar");
                location.href = "register.php";
                </script>';
        }
    }
?>
