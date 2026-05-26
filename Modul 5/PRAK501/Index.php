<?php
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - PRAK501</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body { background-color: #f8f9fa; }

        .wrapper { min-height: calc(100vh - 60px); display: flex; flex-direction: column; justify-content: center; }

        .card-hover { transition: transform 0.3s ease; border-radius: 15px; }
        .card-hover:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.08) !important; }
        .icon-box { display: inline-flex; align-items: center; justify-content: center; width: 60px; height: 60px; border-radius: 15px; margin-bottom: 0.8rem; }
        .desc-text { font-size: 0.9rem; margin-bottom: 1.2rem; }

        @media (max-width: 767.98px) {
            .hero-title { font-size: 1.2rem !important; margin-bottom: 5px !important; }
            .icon-box { width: 40px; height: 40px; font-size: 1.2rem !important; margin-bottom: 4px; border-radius: 10px; }
            .card-body { padding: 10px 15px !important; }
            .card-title { font-size: 0.9rem; margin-bottom: 4px; }
            .desc-text { font-size: 0.65rem; margin-bottom: 8px; line-height: 1.2; }
            .btn-buka { padding: 4px 28px !important; font-size: 0.8rem !important; }
            .g-mobile { --bs-gutter-y: 0.5rem; }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm">
    <div class="container d-flex justify-content-center justify-content-lg-start">
        <a class="navbar-brand fw-bold m-0" href="index.php">PRAK501</a>
    </div>
</nav>

<div class="container wrapper py-2">
    <div class="text-center mb-2 mb-md-5">
        <h2 class="fw-bold text-dark hero-title">Sistem Manajemen Perpustakaan</h2>
    </div>

    <div class="row g-mobile g-md-4 justify-content-center">

        <div class="col-10 col-md-4">
            <div class="card h-100 border-0 shadow-sm card-hover p-1 p-md-3">
                <div class="card-body text-center">
                    <div class="icon-box bg-primary bg-opacity-10 text-primary fs-2">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h5 class="card-title fw-bold text-dark">Member</h5>
                    <p class="card-text text-muted desc-text">Kelola data keanggotaan dan registrasi pengguna perpustakaan.</p>
                    <a href="Member.php" class="btn btn-primary btn-buka rounded-pill px-4">Buka</a>
                </div>
            </div>
        </div>

        <div class="col-10 col-md-4">
            <div class="card h-100 border-0 shadow-sm card-hover p-1 p-md-3">
                <div class="card-body text-center">
                    <div class="icon-box bg-success bg-opacity-10 text-success fs-2">
                        <i class="bi bi-book-half"></i>
                    </div>
                    <h5 class="card-title fw-bold text-dark">Buku</h5>
                    <p class="card-text text-muted desc-text">Kelola inventaris, tambah judul baru, dan perbarui daftar buku.</p>
                    <a href="Buku.php" class="btn btn-success btn-buka rounded-pill px-4">Buka</a>
                </div>
            </div>
        </div>

        <div class="col-10 col-md-4">
            <div class="card h-100 border-0 shadow-sm card-hover p-1 p-md-3">
                <div class="card-body text-center">
                    <div class="icon-box bg-warning bg-opacity-10 text-warning fs-2">
                        <i class="bi bi-arrow-left-right"></i>
                    </div>
                    <h5 class="card-title fw-bold text-dark">Pinjam</h5>
                    <p class="card-text text-muted desc-text">Catat dan pantau tanggal peminjaman serta pengembalian buku.</p>
                    <a href="Peminjaman.php" class="btn btn-warning btn-buka rounded-pill px-4 text-dark fw-semibold">Buka</a>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>