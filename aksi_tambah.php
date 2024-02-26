    <?php
    //menghubungkan php dengan database
        include "koneksi.php";

        //menangkap data yg dikirim dari form login
        $kategori = $_POST['kategoriID'];
        $foto = $_POST['foto'];
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $penerbit= $_POST['penerbit'];
        $tahun= $_POST['tahunterbit'];
        $sinopsis= $_POST['sinopsis'];
        $stok = $_POST['stok'];

        $input = mysqli_query($koneksi, "INSERT INTO buku VALUES('', '$kategori', '$foto', '$judul', '$penulis', '$penerbit', '$tahun', '$sinopsis', '$stok')");
        if(!empty($input)){
            echo '<script>
                alert("Daftar Berhasil");
                location.href = "index.php?page=buku";
                </script>';
        }
        ?>