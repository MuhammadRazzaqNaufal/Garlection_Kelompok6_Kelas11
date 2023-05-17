<!DOCTYPE html>
<html>
<head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="assets/garlection behbroh (1) 1.svg" alt="" width="49">
      Garlection</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="profile.php"> Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="berita.php">Berita Terkini</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="request.php">Request Pengangkutan Sampah</a>
        </li>
      </ul>
    </div>
	<title>Daftar Permintaan Pengangkutan Sampah</title>
	
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f5f5f5;
			margin: 0;
			padding: 0;
		}	h1 {
		margin-top: 30px;
		text-align: center;
		color: #333;
	}

	table {
		margin: 30px auto;
		border-collapse: collapse;
		background-color: #fff;
		box-shadow: 0 0 20px rgba(0,0,0,0.15);
	}

	th, td {
		padding: 12px 15px;
		text-align: left;
		border-bottom: 1px solid #ddd;
	}

	th {
		background-color: #555;
		color: #fff;
		font-weight: bold;
	}

	tbody tr:hover {
		background-color: #f2f2f2;
	}

	tbody tr:nth-child(even) {
		background-color: #f9f9f9;
	}
	
</style>

</head>
<body>

  </nav>
	<h1>Daftar Permintaan Pengangkutan Sampah</h1>
	<table>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Pelapor</th>
				<th>Alamat Pelapor</th>
				<th>Nomor Handphone</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
			<?php
			//koneksi ke database
			include'../proses/connect.php';
					//cek koneksi
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			exit();
		}

		//query data permintaan pengangkutan sampah
		$sql = "SELECT * FROM permintaan_pengangkutan_sampah";
		$result = mysqli_query($conn, $sql);

		//menampilkan data permintaan pengangkutan sampah
		if (mysqli_num_rows($result) > 0) {
			$i = 1;
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>" . $i . "</td>";
				echo "<td>" . $row["nama"] . "</td>";
				echo "<td>" . $row["alamat"] . "</td>";
				echo "<td>" . $row["nohp"] . "</td>";
				echo "</tr>";
				$i++;
			}
		} else {
			echo "<tr><td colspan='5'>Tidak ada data permintaan pengangkutan sampah</td></tr>";
		}

		?>
	</tbody>
</table>
</body>
</html>