<?php
//koneksi ke database
include'connect.php';

//ambil data dari form
$username = $_POST['username'];
$password_lama = $_POST['password_lama'];
$password_baru = $_POST['password_baru'];

//mencocokkan data dengan database
$query = "SELECT * FROM users WHERE username='$username' AND password='$password_lama'";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

if ($count == 1) {
    //update password baru pada database
    $query = "UPDATE users SET password='$password_baru' WHERE username='$username'";
    mysqli_query($conn, $query);

    //arahkan ke halaman profil
    header("Location: ../profile.php");
} else {
    //pesan jika username atau password lama salah
    echo "Username atau password lama salah!";
}
?>
