
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Berita Terkini</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <div class="background"></div>
    <style>
        .background {
            background-image: url("assets/gambar3.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        
        #map {
            height: 400px;
        }
    </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php">
      <img src="assets/garlection behbroh (1) 1.svg" alt="" width="49">
      Garlection</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="profile.php"><i class="bi bi-person"></i> Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="berita.php"><i class="bi bi-newspaper"></i> Berita Terkini</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="request.php"><i class="bi bi-truck"></i> Request Pengangkutan Sampah</a>
        </li>
      </ul>
    </div>
  </nav>

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Berita Terkini</h1>
      <p class="lead">Dapatkan informasi terbaru mengenai lingkungan sekitar dan update terbaru mengenai pembuangan sampah di sini.</p>
    </div>
  </div>

  <!-- Berita -->
  <div class="container">
    <div class="row">

      <!-- Berita 1 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="assets/berita1.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Penanaman Pohon di Taman Kota</h4>
            <p class="card-text">Pemerintah setempat melakukan penanaman pohon di taman kota sebagai bagian dari upaya pelestarian lingkungan.</p>
          </div>
          <div class="card-footer">
            <a href="detail/hlmberita1.php" class="btn btn-primary">Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Berita 2 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="assets/berita1.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Banda Aceh, mengelola sampah untuk menghijaukan kota</h4>
            <p class="card-text">TPA Gampong Jawa Banda Aceh terdapat 14 hidrolisis, tempat tersebut digunakan untuk 
          pembusukan sampah organik yang dikutip dari pasar dan perumahan masyarakat, kemudian 
          disulap menjadi pupuk kompos.</p>
          </div>
          <div class="card-footer">
            <a href="detail/hlmberita2.php" class="btn btn-primary">Selengkapnya</a>
          </div>
        </div>
      </div>

      <!-- Berita 3 -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="assets/berita1.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Produksi Sampah Banda Aceh Capai 240 Ton Per Hari</h4>
            <p class="card-text">DLHK3 Banda Aceh mencatat, sampah yang dikumpulkan per hari di kota tersebut 
          lebih kurang mencapai 24 ton per hari baik itu organik maupun an organik.</p>
          </div>
          <div class="card-footer">
            <a href="detail/hlmberita3.php" class="btn btn-primary">Selengkapnya</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi4jq7Y"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/esm/popper-base"
    integrity="sha256-wopxtwmpjr2zCgnrdiJysMz6H+yU6BjlU6B0gECgi2k=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

<!-- Konten tambahan -->
<footer>
  <p></p>
</footer>

</html>
