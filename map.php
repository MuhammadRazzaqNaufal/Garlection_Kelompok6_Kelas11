<!DOCTYPE html>
<html>
<head>
    <title>Lokasi User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .background {
            background-image: url("assets/gambar3.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        
        #map {
            height: 400px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">
          <img src="assets/garlection behbroh (1) 1.svg" alt="" width="49">
          Garlection</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="profile.php">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="berita.php">Berita Terkini</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="request.php">Request Pengangkutan Sampah</a>
            </li>
          </ul>
        </div>
    </nav>
  
    <div class="background"></div>

    <div class="container">
        <h1 class="text-white" class="mt-4 mb-4">Lokasi User Saat Ini</h1>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Latitude: <span id="latitude"></span></h4>
                        <h4>Longitude: <span id="longitude"></span></h4>
                    </div>
                    <div class="col-md-6">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showPosition(position) {
            // Display latitude and longitude
            document.getElementById("latitude").innerHTML = position.coords.latitude.toFixed(6);
            document.getElementById("longitude").innerHTML = position.coords.longitude.toFixed(6);
            
            // Display map
            var map = L.map('map').setView([position.coords.latitude, position.coords.longitude], 14);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);
            L.marker([position.coords.latitude, position.coords.longitude]).addTo(map);
        }

        function showError(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    alert("User denied the request for Geolocation.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("Location information is unavailable.");
                    break;
                case error.TIMEOUT:
                    alert("The request to get user location timed out.");
                    break;
                case error.UNKNOWN_ERROR:
                    alert("An unknown error occurred.");
                    break;
                    }
                    }

                        // Get user's current location
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        alert("Geolocation is not supported by this browser.");
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>

</body>
</html>
