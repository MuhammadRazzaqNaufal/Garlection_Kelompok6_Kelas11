<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Navbar </title>
  <style>
    /* Masukkan CSS di sini */
    /* Style untuk navbar */
.navbar {
  background-color: #ffffff; /* warna background */
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* shadow */
}

.navbar-brand {
  color: #007bff; /* warna teks */
  font-weight: bold; /* tebal */
  font-size: 24px; /* ukuran font */
}

.nav-link {
  color: #6c757d; /* warna teks */
  font-weight: bold; /* tebal */
  transition: all 0.2s ease-in-out; /* efek transisi */
}

/* efek hover untuk link */
.nav-link:hover {
  color: #007bff; /* warna teks saat hover */
  transform: scale(1.1); /* memperbesar saat hover */
}

/* menghilangkan background color untuk link yang aktif */
.navbar .active > .nav-link {
  background-color: transparent;
}

/* menambahkan border bottom saat hover */
.nav-link:hover::after {
  content: "";
  display: block;
  width: 0%;
  height: 2px;
  background-color: #007bff;
  transition: width 0.2s ease-in-out;
}

.nav-link:hover::after {
  width: 100%;
}

.navbar-toggler {
  border: none;
  background-color: transparent;
}

.navbar-toggler-icon {
  background-color: #007bff;
}

  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
          <a class="nav-link" href="../profile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../berita.php">Berita Terkini</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../request.php">Request Pengangkutan Sampah</a>
        </li>
      </ul>
    </div>
  </nav>
</body>
</html>
