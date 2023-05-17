<?php
include'connect.php';
// Step 2: Periksa apakah form telah disubmit atau belum
if (isset($_POST['hari'])) {
    // Step 3: Ambil nilai dari form
    $hari = $_POST['hari'];
    $jammulai = $_POST['jam_mulai'];
    $jamberakhir = $_POST['jam_berakhir'];
    $lokasi = $_POST['lokasi'];

    // Step 4: Gunakan query UPDATE untuk mengubah data di database
    $sql = "UPDATE jadwal_pengangkutan_sampah SET jam_mulai='$jammulai', jam_berakhir='$jamberakhir', lokasi='$lokasi' WHERE hari='$hari'";
$result = mysqli_query($conn, $sql);


    // Berikan pesan sukses jika data berhasil diubah
    if ($result) {
        header("location: ../admin/jadwal.php");
        echo "Data berhasil diubah";
    } else {
        echo "Data gagal diubah";
    }
}
?>