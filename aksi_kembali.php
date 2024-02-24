<?php
    include "Koneksi.php";
        $id = $_GET['peminjamanID'];
        if(isset($_POST['submit'])) {
            $id_buku = $_POST['bukuID'];
            $id_user = $_SESSION['user']['userID'];
            $status_peminjaman = $_POST['status'];
            $query = mysqli_query($koneksi, "UPDATE peminjaman set bukuID='$id_buku', status='$status_peminjaman' WHERE peminjamanID=$id");

            if($query) {
                echo '<script>alert("data berhasil diubah.");window.location="index.php";</script>';
            }else{
                echo '<script>alert("data gagal diubah.");</script>';
            }
        }
?>