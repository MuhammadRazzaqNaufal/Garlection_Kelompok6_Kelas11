<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Profile</title>
  <!-- Library Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Fontawesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-AfdpaOcFYYxvOOF8tZ+P9xcLXSztTvp1/TiC8WfD1kuInq3V7xSsyvtdccVpKj9XFLMno7Q4nwL4iF/LyyCmRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
  
      </style>
      
    </div>
  </head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php">Garlection</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto"></ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="map.html">Lokasi Saya</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="jadwal.php">Jadwal Pengangkutan Sampah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lokasi.php">Lokasi Penampungan Sampah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="history.php">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php"><i class="fas fa-user"></i></a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="text-center mb-3">
          <img src="<?php echo $data['photo']; ?>" class="rounded-circle" alt="Profile Picture" width="150">
        </div>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title"><?php echo $_SESSION['username']; ?></h5>
            <p class="card-text">email: <?php echo $_SESSION['email'];?></p>
            <p class="card-text">No_telepon: <?php echo $_SESSION['phone'];?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="text-center">
  <a href="ubah_password.php" class="btn btn-primary">Ubah Password</a>
    <a href="login.php" class="btn btn-danger" > Log Out</a>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

