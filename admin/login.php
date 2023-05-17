<?php
session_start();
include'../proses/connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Ambil data dari form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Cari pengguna berdasarkan username dan password
  $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  // Jika pengguna ditemukan
  if (mysqli_num_rows($result) == 1) {
    // Ambil data pengguna
    $user = mysqli_fetch_assoc($result);

    // Simpan data pengguna ke session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['phone'] = $user['phone'];
    $_SESSION['email'] = $user['email'];

    // Redirect ke halaman dashboard
    header('Location: home.php');
    exit;
  } else {
    // Jika pengguna tidak ditemukan
    $error = 'Username atau password salah';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Admin</title>
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
            <h4>Login admin</h4>
          </div>
          <div class="text-center">
            <img src="../assets/garlection behbroh (1) 1.svg" alt="">
          </div>
          <div class="card-body">
            <?php
              if (isset($errorMessage)) {
                echo '<div class="alert alert-danger">' . $errorMessage . '</div>';
              }
            ?>
            <img src="gambar.png" alt="" class="mx-auto d-block">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

              <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" minlength="8" required>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
