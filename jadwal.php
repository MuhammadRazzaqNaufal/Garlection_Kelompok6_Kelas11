<?php
include'proses/connect.php';
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
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Garlection</a>
  </nav>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-12">
        <h2>Jadwal Pengangkutan Sampah</h2>
      </div>
      </div>
		<div class="row mt-5">
			<div class="col-md-12">
				<table class="table table-bordered table-striped">
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
        
      </div>
    </div>
  </div>
</body>
</html>
