<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Jadi Lebih Mudah & Asyik</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>/assets/css/custom.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top ">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<?= base_url() ?>/assets/img/logo-ksoscisi.png" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Flash Sale</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Patungan</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kelas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Kelas 1</a></li>
            <li><a class="dropdown-item" href="#">Kelas 2</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Alur Belajar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tips Terbaru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="bi bi-search"></i></a>
        </li>
      </ul> -->
    </div>
  </div>
</nav>

<!-- Main Content -->
<div class="container">
  <h1 class="mb-4 section-title">Selamat Datang di <span class="best-sale">Portal Aplikasi KSO SCISI</span></h1>
  <p class="mb-4 section-subtitle">Silahkan pilih aplikasi yang anda inginkan. Kepuasan anda merupakan hadiah <br>terindah dari kerja keras kami.</p>
  
  <!-- Search Bar -->
  <div class="search-container">
    <select name="" id="" class="form-select search-select">
      <option selected>Cari Bagian</option>
    </select>
    <button class="btn btn-primary">Search</button>
    <button class="btn btn-danger ms-2">Reset</button>
  </div>

  <!-- Card Section -->
  <div class="row">
    <!-- Card 1 -->
    <div class="col-md-3">
      <div class="card">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Course 1">
        <div class="card-body">
          <h5 class="card-title">Android Jetpack Compose : Jello eCommerce</h5>
          <p><span class="price">Rp 550,000</span> <span class="discount-price">Rp 229,000</span></p>
          <p class="ratings">★★★★★ (6)</p>
        </div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3">
      <div class="card">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Course 2">
        <div class="card-body">
          <h5 class="card-title">Android Developer : Bangun Apps Score Permainan</h5>
          <p><span class="price">Rp 150,000</span> <span class="discount-price">Rp 69,000</span></p>
          <p class="ratings">★★★★★ (7)</p>
        </div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3">
      <div class="card">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Course 3">
        <div class="card-body">
          <h5 class="card-title">Bangun Web Booking Kos Modern dengan Laravel 11</h5>
          <p><span class="price">Rp 690,000</span> <span class="discount-price">Rp 219,000</span></p>
          <p class="ratings">★★★★★ (7)</p>
        </div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3">
      <div class="card">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Course 4">
        <div class="card-body">
          <h5 class="card-title">Laravel 11, Service Repository, Filament: Web Event</h5>
          <p><span class="price">Rp 550,000</span> <span class="discount-price">Rp 189,000</span></p>
          <p class="ratings">★★★★★ (15)</p>
        </div>
      </div>
    </div>
    <!-- Card 5 -->
    <div class="col-md-3">
      <div class="card">
        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Course 4">
        <div class="card-body">
          <h5 class="card-title">Laravel 11, Service Repository, Filament: Web Event</h5>
          <p><span class="price">Rp 550,000</span> <span class="discount-price">Rp 189,000</span></p>
          <p class="ratings">★★★★★ (15)</p>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
