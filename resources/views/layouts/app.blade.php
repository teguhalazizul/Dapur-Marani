{{-- untuk definisikan struktur html --}}
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dapur Marani</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <style>
    /* Custom Navbar Styles */
    .navbar {
      padding: 15px 30px; /* Mengatur padding navbar */
      background-color: #343a40; /* Warna navbar */
    }

    /* Logo Styles - Membuat logo bulat dan teratur */
    .navbar-brand img {
      height: 50px;
      width: 50px;
      border-radius: 50%;
      margin-right: 15px;
    }

    /* Styling untuk nav links */
    .nav-link {
      font-size: 18px; /* Ukuran font lebih besar */
      font-weight: 600;
      color: #fff !important;
      transition: all 0.3s ease-in-out;
      letter-spacing: 1px; /* Jarak antar huruf untuk tampilan lebih rapi */
      padding: 10px 15px; /* Memberikan ruang pada menu */
    }

    /* Hover effect untuk menu */
    .nav-link:hover {
      color: #f39c12 !important; /* Warna saat hover */
      background-color: rgba(243, 156, 18, 0.1); /* Memberikan background saat hover */
      border-radius: 5px;
    }

    /* Navbar Toggler Icon */
    .navbar-toggler-icon {
      background-color: #f39c12; /* Warna icon toggler */
    }

    /* Menyesuaikan jarak navbar-nav */
    .navbar-nav {
      margin-left: auto;
    }

    /* Styling untuk menu yang aktif */
    .nav-link.active {
      color: #f39c12 !important;
      font-weight: 700;
      border-bottom: 2px solid #f39c12; /* Menambahkan garis bawah untuk link aktif */
    }

    /* Menambah jarak antar menu */
    .navbar-nav .nav-item {
      margin-left: 25px;
    }

    /* Responsif untuk navbar */
    @media (max-width: 991px) {
      .navbar-nav .nav-item {
        margin-left: 15px;
      }
    }

    /* Styling background untuk body */
    body {
      background-color: #f5f5f5; /* Warna latar belakang abu muda */
      color: #333; /* Menyesuaikan warna teks agar kontras dengan latar belakang */
    }
  </style>
</head>

<body>
  {{-- Navbar --}}
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('build/assets/logo.jpg') }}" alt="Dapur Marani">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  {{-- Konten utama --}}
  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
