<?php
$conn = mysqli_connect("localhost", "root", "", "garlection_db");
if (!$conn) {
    echo "Gagal koneksi database";
}
