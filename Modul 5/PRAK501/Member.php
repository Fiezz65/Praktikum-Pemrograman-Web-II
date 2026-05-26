<?php
require_once 'Model.php';

if (isset($_GET['delete'])) {
    deleteMember($_GET['delete']);
    header("Location: Member.php");
    exit;
}
$members = getMembers();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member - PRAK501</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; font-family: 'Segoe UI', sans-serif; }
        .container-card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            margin-top: 30px;
            margin-bottom: 30px;
        }
        .table th { background-color: #2c3e50; color: white; }

        @media (max-width: 767.98px) {
            .container-card {
                padding: 15px 10px;
            }
            .table-fit-mobile {
                font-size: 10px;
            }
            .table-fit-mobile th, .table-fit-mobile td {
                padding: 4px 2px !important;
                vertical-align: middle;
            }
            .table-fit-mobile .btn {
                font-size: 9px !important;
                padding: 3px 5px !important;
                margin: 1px 0;
            }
            .header-title { font-size: 1.2rem; }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">PRAK501</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                <li class="nav-item"><a class="nav-link active" href="Member.php">Member</a></li>
                <li class="nav-item"><a class="nav-link" href="Buku.php">Buku</a></li>
                <li class="nav-item"><a class="nav-link" href="Peminjaman.php">Peminjaman</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container container-card">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold text-dark m-0 header-title">Data Member</h2>
        <a href="FormMember.php" class="btn btn-primary rounded-pill px-3 shadow-sm btn-sm">+ Tambah</a>
    </div>

    <div>
        <table class="table table-hover table-bordered align-middle text-center table-fit-mobile w-100">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nomor Member</th>
                <th>Alamat</th>
                <th>Tgl Mendaftar</th>
                <th>Tgl Bayar</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php if (empty($members)): ?>
                <tr>
                    <td colspan="7" class="text-muted py-4">Belum ada data member.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($members as $row): ?>
                    <tr>
                        <td><?= $row['id_member'] ?></td>
                        <td class="text-start fw-semibold"><?= $row['nama_member'] ?></td>
                        <td><?= $row['nomor_member'] ?></td>
                        <td class="text-start"><?= $row['alamat'] ?></td>
                        <td><?= $row['tgl_mendaftar'] ?></td>
                        <td><?= $row['tgl_terakhir_bayar'] ?></td>
                        <td>
                            <a href="FormMember.php?id=<?= $row['id_member'] ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="Member.php?delete=<?= $row['id_member'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data member ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>