<?php
include'proses/connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Ambil data dari form
  $email = $_POST['email'];
  $username = $_POST['username'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];

  // Validasi data
  $errors = array();
  if (empty($email)) {
    $errors[] = 'email tidak boleh kosong';
  }
  if (empty($username)) {
    $errors[] = 'Username tidak boleh kosong';
  }
  if (empty($phone)) {
    $errors[] = 'Nomor handphone tidak boleh kosong';
  }
  if (!preg_match('/^[0-9]{10,12}$/', $phone)) {
    $errors[] = 'Format nomor handphone salah';
  }
  if (empty($password)) {
    $errors[] = 'Password tidak boleh kosong';
  }
  if (strlen($password) < 8) {
    $errors[] = 'Password minimal 8 karakter';
  }
  if ($password !== $confirm_password) {
    $errors[] = 'Password dan konfirmasi password tidak sama';
  }

  // Jika tidak ada error, maka simpan data ke database
  if (empty($errors)) {
    // Koneksi ke database
    

    // Query INSERT
    $query = "INSERT INTO users (email ,username, phone, password) VALUES ('$email','$username', '$phone', '$password')";
    $result = mysqli_query($conn, $query);

    // Tutup conn
    mysqli_close($conn);

    if ($result) {
      // Redirect ke halaman login
      header('Location: login.php');
      exit;
    } else {
      $errors[] = 'Terjadi kesalahan saat menyimpan data';
    }
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Daftar Akun</title>
  <!-- library Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Garlection</a>
        
      </nav>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h4>Daftar Akun</h4>
        </div>
        <div class="card-body">
          <div class="text-center">
            <img src="assets/garlection behbroh (1) 1.svg" alt="">
          </div>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <?php if (!empty($errors)) : ?>
    <div class="alert alert-danger">
      <ul>
        <?php foreach ($errors as $error) : ?>
          <li><?php echo $error; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>
  <div class="form-group">
    <label for="email">E-mail:</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="form-group">
    <label for="phone">Nomor Handphone:</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group">
    <label for="confirm_password">Ulangi Password:</label>
    <input type="password" class="form-control" id="confirm_password" name="confirm_password">
  </div>
  <button type="submit" class="btn btn-primary">Daftar</button>
  <p class="text-center mt-3">Sudah punya akun? <a href="login.php">Login di sini</a></p>

</form>
