<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Ubah Password dan Data Pengguna</title>
  <style>
    body {
      background-color: #f8f8f8;
    }
    .card {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      margin: 50px auto;
      padding: 30px;
      max-width: 500px;
    }
    h2 {
      font-size: 24px;
      margin-bottom: 30px;
      text-align: center;
    }
    label {
      display: block;
      font-size: 16px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    input[type="text"], input[type="email"], input[type="password"] {
      border: none;
      border-radius: 5px;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
      font-size: 16px;
      padding: 10px;
      width: 100%;
      margin-bottom: 20px;
    }
    input[type="submit"] {
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      color: #ffffff;
      cursor: pointer;
      font-size: 16px;
      padding: 10px 20px;
      margin-top: 20px;
    }
    input[type="submit"]:hover {
      background-color: #0069d9;
    }
  </style>
</head>
<body>

<?php
include'tampilan/navbar.php';
?>

  <div class="card">
    <h2>Form Ubah Password dan Data Pengguna</h2>
    <form action="proses/proses_ubah_password.php" method="post">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username"><br><br>

      <label for="password_lama">Password Lama:</label>
      <input type="password" id="password_lama" name="password_lama"><br><br>

      <label for="password_baru">Password Baru:</label>
      <input type="password" id="password_baru" name="password_baru"><br><br>

      <input type="submit" value="Ubah Data">
    </form>
  </div>
</body>
</html>