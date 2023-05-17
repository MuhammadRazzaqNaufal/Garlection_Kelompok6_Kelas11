<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>History - Garlection</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
              <a class="nav-link" href="request.php"><i class="bi bi-file-earmark-plus"></i> Request Pengangkutan Sampah</a>
            </li>
          </ul>
        </div>
      </nav>
    <!-- Main content -->
    <div class="container mt-3">
  <h1 style="color: white;">History Request Pengangkutan Sampah</h1>
  <hr>
  <div style="background-color: #fff;">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal Request</th>
          <th>Alamat Penjemputan</th>
          <th>Alamat Tujuan</th>
          <th>Status</th>
        </tr>
      </thead>

      <tbody>
        <?php
        // Membuat array riwayat request pengangkutan sampah
        $requests = array(
          array(1, "3 Mei 2023", "Jalan Kenanga No. 23", "TPA Bantar Gebang", "Dalam Proses"),
          array(2, "2 Mei 2023", "Jalan Jati Baru No. 5", "TPA Rawa Kucing", "Selesai"),
          array(3, "1 Mei 2023", "Jalan Kebon Jeruk No. 10", "TPA Bantar Gebang", "Ditolak")
        );
        // Menampilkan data request pengangkutan sampah dalam tabel
        foreach ($requests as $request) {
          echo "<tr>";
          echo "<td>".$request[0]."</td>";
          echo "<td>".$request[1]."</td>";
          echo "<td>".$request[2]."</td>";
          echo "<td>".$request[3]."</td>";
          echo "<td>".$request[4]."</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Include Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
