<?php
//menghubungkan php dengan database
    include "koneksi.php";
    if(isset($_POST['submit'])){
    $bukuID = $_POST['bukuID'];
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit= $_POST['penerbit'];
    $tahun= $_POST['tahunterbit'];
    $sinopsis = $_POST['sinopsis'];
    $stok = $_POST['stok'];

    $input = mysqli_query($koneksi,"UPDATE buku SET judul='$judul', 
                                                    penulis='$penulis', 
                                                    penerbit='$penerbit', 
                                                    tahun_terbit='$tahun', 
                                                    sinopsis='$sinopsis', 
                                                    stok='$stok' WHERE bukuID='$bukuID'");
    }
    if(!empty($input)){
        echo '<script>
              alert("Data Telah di Edit");
              window.location = "d_buku.php";
              </script>';
        }
    
?>