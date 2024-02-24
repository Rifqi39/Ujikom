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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan Digital</title>
</head>
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/dashboard.css">

<style>
  a{
  text-decoration: none;
  color: black; 
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

<body>
<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="index.php">Perpustakaan Digital</a>

  <ul class="navbar-nav flex-row d-md-none">
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false" aria-label="Toggle search">
        <svg class="bi"><use xlink:href="#search"/></svg>
      </button>
    </li>
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="bi"><use xlink:href="#list"/></svg>
      </button>
    </li>
  </ul>

  <div id="navbarSearch" class="navbar-search w-100 collapse">
    <input class="form-control w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  </div>
</header>
<div class="container-fluid">
    <div class="row">
    <main align="center">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>

      </div>
      <h2>Data Peminjaman</h2>
      <?php
      if(isset($_SESSION['level'])){ ?>
     <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Username</th>
              <th scope="col">Buku</th>
              <th scope="col">Tanggal Peminjaman</th>
              <th scope="col">Tanggal Pengembalian</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
          <?php
              include "koneksi.php";
              $query = mysqli_query ($koneksi, "SELECT * FROM peminjaman LEFT JOIN user ON peminjaman.userID = user.userID LEFT JOIN buku ON peminjaman.bukuID = buku.bukuID");
              $no=0;
              while($data = mysqli_fetch_array($query)){
              $no++
          ?>
          <tr>
              <td><?php echo $no ?>
              <td><?php echo $data['username'] ?></td>
              <td><?php echo $data['judul'] ?></td>
              <td><?php echo $data['tanggalpeminjaman'] ?></td>
              <td><?php echo $data['tanggalpengembalian'] ?></td>
              <td><?php echo $data['jumlah'] ?></td>
              <td><?php echo $data['status'] ?></td>
                </tr>
                <?php
                    }
                ?>
          </tbody>
        </table>
        </div>
        <?php
          }
          ?>
    </main>
    </div>
</div>
<?php
}
?>
<script>
    window.print();
    setTimeout(function(){
        window.close();
    }, 10);
</script>
</body>
</html>