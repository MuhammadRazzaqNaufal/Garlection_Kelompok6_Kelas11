<?php
// Memunculkan error jika terjadi kesalahan
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

// Cek apakah user telah melakukan login
if (!isset($_SESSION['username'])) {
  // Jika belum, redirect ke halaman login
  header('Location: home.php');
  exit();
}

// Jika user sudah login, simpan username ke dalam variabel
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
  <!-- library Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <div class="background"></div>
    <style>
      .background {
    background-image: url("../assets/gambar3.jpg");
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
  
      </style>
      
  </head>


<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php">
      <img src="../assets/garlection behbroh (1) 1.svg" alt="" width="49">
      Garlection</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../profile.php"> Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="berita.php">Berita Terkini</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="request.php">Request Pengangkutan Sampah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../petugas/dftr_permintaan_pengangkutan.php"> Daftar Permintaan Pengangkutan</a>
        </li>
      </ul>
    </div>
  </nav>


  <body>

  <div class="d-flex flex-row justify-content-center">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3">
          <a href="map.php">
            <img style="border:7px solid black;" src="../assets/mapsicon.jpg" class="card-img-top" alt="image" height="200" width="200">
            <div class="card-body">
              <h5 class="card-title text-center text-dark">Lokasi Saat Ini</h5>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3">
          <a href="jadwal.php">
            <img style="border:7px solid black;" src="../assets/garbagetrckikon.jpg" class="card-img-top" alt="image" height="200" width="200">
            <div class="card-body">
              <h5 class="card-title text-center text-dark">Jadwal Pengangkutan Sampah</h5>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3">
          <a href="../lokasi.php">
            <img style="border:7px solid black;" src="../assets/tngsmph.jpg" class="card-img-top" alt="image" height="200" width="200">
            <div class="card-body">
              <h5 class="card-title text-center text-dark">Lokasi Penampungan Sampah</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <?php
    if (isset($_POST['submit'])) {
      $latitude = $_POST['latitude'];
      $longitude = $_POST['longitude'];
      echo "Latitude: $latitude<br>";
      echo "Longitude: $longitude";
    }
  ?>

  <button onclick="getLocation()">Get Location</button>

  <script>
    function getLocation() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
      } else {
        alert("Geolocation is not supported by this browser.");
      }
    }

    function showPosition(position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;

      document.getElementById("latitude").innerHTML = "Latitude: " + latitude;
      document.getElementById("longitude").innerHTML = "Longitude: " + longitude;

      // submit form
      document.getElementById("myForm").submit();
    }

    // tambahkan event click pada card
    const myLocationCard = document.querySelector('#my-location-card');

    myLocationCard.addEventListener('click', () => {
      getLocation();
    });
  </script>

  <form id="myForm" method="post">
    <input type="hidden" name="latitude" id="latitude-input">
    <input type="hidden" name="longitude" id="longitude-input">
    <input type="submit" name="submit" value="Submit">
  </form>

</body>

</html>
