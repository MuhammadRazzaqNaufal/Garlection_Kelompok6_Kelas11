<?php
include'../proses/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jadwal Pengangkutan Sampah</title>
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
  
  </div>
</head>
    
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
          <a class="nav-link" href="../berita.php">Berita Terkini</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dftr_permintaan_pengangkutan.php"> Daftar Permintaan Pengangkutan</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-light">Jadwal Pengangkutan Sampah</h2>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col-md-12">
      <div style="background-color: #fff;">
        <table class="table table-bordered table-striped" style="color: dark;">
          <thead>
            <tr>
              <th>Hari</th>
              <th>Jam mulai</th>
              <th>Jam berakhir</th>
              <th>Lokasi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Check connection
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

            // Select data from table
            $sql = "SELECT * FROM jadwal_pengangkutan_sampah";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // Output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["hari"] . "</td>";
                echo "<td>" . $row["jam_mulai"] . "</td>";
                echo "<td>" . $row["jam_berakhir"] . "</td>";
                echo "<td>" . $row["lokasi"] . "</td>";
                echo "</tr>";
              }
            } else {
              echo "0 results";
            }

            $conn->close();
            ?>
          </tbody>
        </table>
        <a href="../admin/updatejdwl.php" class="btn btn-primary">Update Jadwal</a>
      </div>
    </div>
  </div>
</div>


</body>
</html>
