<?php
include'proses/connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Get form data
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];
  $nohp = $_POST['nohp'];
  
  // SQL query to insert data
  $sql = "INSERT INTO permintaan_pengangkutan_sampah (nama, alamat, nohp) VALUES ('$nama', '$alamat', '$nohp')";
  
  if ($conn->query($sql) === TRUE) {
    header('Location: hlmkonfirmasi.php');
    echo "Data berhasil ditambahkan";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form Permintaan Pengangkutan Sampah</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../style/request.CSS" />
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.html">Garlection</a>
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
          <a class="nav-link" href="jadwal.html">Jadwal Pengangkutan Sampah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lokasi.html">Lokasi Penampungan Sampah</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="history.html">History</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php"><i class="fas fa-user"></i></a>
        </li>
      </ul>
    </div>
  </nav>

    <div class="container">
      <h2>Form Permintaan Pengangkutan Sampah</h2>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input
            type="text"
            class="form-control"
            id="nama"
            name="nama"
            placeholder="Masukkan nama"
          />
        </div>
        <div class="form-group">
          <label for="nama">email:</label>
          <input
            type="text"
            class="form-control"
            id="email"
            name="email"
            placeholder="Masukkan nama"
          />
        </div>
        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <input
            type="text"
            class="form-control"
            id="alamat"
            name="alamat"
            placeholder="Masukkan alamat"
          />
        </div>
        <div class="form-group">
          <label for="nohp">No. HP:</label>
          <input
            type="text"
            class="form-control"
            id="nohp"
            name="nohp"
            placeholder="Masukkan nomor HP"
          />
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </form>
    </div>
  </body>
</html>
