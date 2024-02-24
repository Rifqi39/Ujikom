<?php
session_start();
$login =isset( $_SESSION ['login']);
if ($login == 1) {
       include "koneksi.php";


       $cookie_name = "user";
       $cookie_value = "user";
       Setcookie ($cookie_name, $cookie_value, time()+1000, "/");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Perpustakaan Digital</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<style>
    body, table{
      background-color: lgray;
    }   
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
</style>

    
    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
<h1 align="center">Detail Buku</h1>
   <?php
    $id = $_GET['bukuID'];
    $judul = mysqli_query($koneksi, "SELECT * FROM buku JOIN kategoribuku ON kategoribuku.kategoriID=buku.kategoriID WHERE bukuID='$id'");
    while($buku = mysqli_fetch_array($judul)){
   ?>
    <form>
        <div class="card">
            <div class="card-body">
            <div class="row mb-3">
                    <div class="col-md-2">
                        <img src="assets/img/<?php echo $buku['foto']?>" width="150" height="200">
                      </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Kategori</div>
                        <div class="col-md-8">
                          <?php
                            echo $buku ['namakategori']
                          ?>
                        </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Judul</div>
                        <div class="col-md-8">
                            <?php echo $buku['judul']; ?>
                            <input type="hidden" name = "bukuID" value="<?php echo $buku['bukuID']; ?>">
                        </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Penulis</div>
                        <div class="col-md-8">
                            <?php
                                echo $buku['penulis'];
                                
                            ?>
                        </div>
                    
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Penerbit</div>
                        <div class="col-md-8">
                            <?php
                                echo $buku['penerbit'];
                                
                            ?>
                        </div>
                    
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Tahun Terbit</div>
                        <div class="col-md-8">
                            <?php
                                echo $buku['tahun_terbit'];
                                
                            ?>
                        </div>
                    
                </div>
                <div class="row mb-3">
                    <div class="col-md-2">Sinopsis</div>
                        <div class="col-md-8">
                            <?php
                                echo $buku['sinopsis'];
                                }
                            ?>
                        </div>
                    
                </div>
                <div class="row mb-3">
                    <div class="col-md-2"><a href="d_buku.php" class="btn btn-primary">Kembali</a></div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>

<?php 
}
?>