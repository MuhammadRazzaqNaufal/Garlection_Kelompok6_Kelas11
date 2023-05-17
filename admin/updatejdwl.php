<!DOCTYPE html>
<html>
<head>
	<title>Form Jadwal Pengangkutan Sampah</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #F1F1F1;
		}

		.card {
			background-color: white;
			border-radius: 5px;
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
			padding: 20px;
			margin: 20px auto;
			max-width: 500px;
		}

		h2 {
			text-align: center;
		}

		form {
			display: flex;
			flex-direction: column;
		}

		label {
			margin-bottom: 10px;
			font-weight: bold;
		}

		input[type="text"],
		select,
		input[type="time"] {
			padding: 10px;
			border-radius: 5px;
			border: none;
			margin-bottom: 20px;
			box-shadow: 0 2px 5px 0 rgba(0,0,0,0.2);
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		input[type="submit"]:hover {
			background-color: #3E8E41;
		}

	</style>
</head>
<body>
	<div class="card">
		<h2>Form Jadwal Pengangkutan Sampah</h2>
		<form action="../proses/update_jadwal.php" method="POST">
			<label for="hari">Hari:</label>
			<select id="hari" name="hari">
				<option value="Senin">Senin</option>
				<option value="Selasa">Selasa</option>
				<option value="Rabu">Rabu</option>
				<option value="Kamis">Kamis</option>
				<option value="Jumat">Jumat</option>
				<option value="Sabtu">Sabtu</option>
				<option value="Minggu">Minggu</option>
			</select>

			<label for="jam_mulai">Jam Mulai:</label>
<input type="time" id="jam_mulai" name="jam_mulai">

<label for="jam_selesai">Jam Berakhir:</label>
<input type="time" id="jam_berakhir" name="jam_berakhir">

			<label for="lokasi">Lokasi:</label>
			<input type="text" id="lokasi" name="lokasi">

			<input type="submit" value="Submit">
		</form>
	</div>
</body>
</html>