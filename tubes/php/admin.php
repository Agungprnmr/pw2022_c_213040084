<?php
require 'functions.php';

$entertainment = query("SELECT * FROM  entertainment");

//query sesaui dengan keyword pencarian

if(isset($_GET["cari"])) {
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM entertainment WHERE nama LIKE '%$keyword%' OR genre LIKE '%$keyword%' ";
    $entertainment = query($query);
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
    <title>ADMIN</title>
</head>

<body>
    <!-- Awal Navbar-->
    <nav class="navbar navbar-expand-lg" style="background-color: #086F79 ;">
    <div class="container">
      <a class="navbar-brand">
        Mintira <strong>Movies</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav" class="">
      <form action="" method="GET" class="mt-4" role="search">
      <!-- Search -->
      <div class="input-group">
        <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Masukan Keyword Pencarian..." autocomplete="off">
        <button class="btn btn-primary" type="submit" name="cari">Cari</button>
      </div>
      </form>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="homeadmin.php">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div class="container-xl mt-5 fs-5">
    <div class="home-admin">
      <h1>~ Hallo Bang Ganteng ~</h1>
      <h5>Jangan Lupa Senyum ya :)</h5>
    </div>
    <a href="tambah.php" class="btn btn-primary">Tambah Data</a>
    <a href="admin.php" class="btn btn-primary">Refresh</a>
    <form action="" method="get" class="mt-4"></form>
  <table class="table">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">Genre</th>
            <th scope="col">Rating</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php $i = 1; foreach ($entertainment as $ent) {  ?>
          <tr>
            <th scope="row"><?= $i++;  ?></th>
            <td>
                <img src="../img/<?= $ent ['gambar'];?>"
                height="100" class="img-review">
            </td>
            <td><?= $ent ['nama']; ?></td>
            <td><?= $ent ['genre']; ?></td>
            <td><?= $ent ['rating']; ?></td>
            <td><?= $ent ['deskripsi']; ?></td>

            <td>
                <a href="ubah.php?id=<?= $ent ["id"];?>" class="btn badge bg-primary">Ubah</a>
                <a href="hapus.php?id=<?= $ent ["id"];?>" class="btn badge bg-danger" onclick="return confirm ('Yakin bang ???');">Hapus</a>
            </td>
          </tr>
        <?php }?>
    </tbody>
  </table>

    <div class="container">
        <button class="hidden btn btn-danger mt-3" onclick="window.print()">
        <i class="bi bi-journal-plus">Cetak PDF</i>
    </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>
