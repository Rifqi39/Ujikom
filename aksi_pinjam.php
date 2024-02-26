<?php
    include 'koneksi.php';

    if(isset($_POST['submit'])){
        $iduser = $_POST['userID'];
        $idbuku = $_POST['bukuID'];
        $tglpinjam = date('y-m-d');
        $tglkembali = date('y-m-d', strtotime($tglpinjam.'+7 days'));
        $jumlahpinjam = $_POST['jumlah'];
        $status = $_POST['status'];

        $query = mysqli_query($koneksi, "INSERT INTO peminjaman (userID, bukuID, tanggalpeminjaman, tanggalpengembalian, jumlah, status) 
                                         VALUES ('$iduser', '$idbuku', '$tglpinjam', '$tglkembali', '$jumlahpinjam', '$status') ");

        if($query){
            echo '<script>alert("Berhasil Pinjam"); 
            location.href = "index.php?page=peminjaman";
            </script>';
        }
    }
?>