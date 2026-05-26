<?php
require_once 'Model.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;
$data = $id ? getBukuById($id) : null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    if ($id) {
        updateBuku($id, $judul, $penulis, $penerbit, $tahun);
    } else {
        insertBuku($judul, $penulis, $penerbit, $tahun);
    }
    header("Location: Buku.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku - PRAK501</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f6f9; }
        .wrapper-center {
            min-height: calc(100vh - 40px);
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center align-items-center wrapper-center p-3">

    <div class="card border-0 shadow-sm p-4 w-100" style="max-width: 500px; border-radius: 12px;">
        <h4 class="fw-bold text-dark mb-4 text-center"><?= $id ? 'Edit' : 'Tambah' ?> Data Buku</h4>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label small fw-semibold text-secondary">Judul Buku</label>
                <input type="text" name="judul" class="form-control" value="<?= isset($data['judul_buku']) ? $data['judul_buku'] : '' ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold text-secondary">Penulis</label>
                <input type="text" name="penulis" class="form-control" value="<?= isset($data['penulis']) ? $data['penulis'] : '' ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold text-secondary">Penerbit</label>
                <input type="text" name="penerbit" class="form-control" value="<?= isset($data['penerbit']) ? $data['penerbit'] : '' ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold text-secondary">Tahun Terbit</label>
                <input type="number" name="tahun" class="form-control" value="<?= isset($data['tahun_terbit']) ? $data['tahun_terbit'] : '' ?>" required>
            </div>

            <div class="d-grid gap-2 mt-4">
                <button type="submit" class="btn btn-success rounded-pill">Simpan Data</button>
                <a href="Buku.php" class="btn btn-light rounded-pill border">Batal</a>
            </div>
        </form>
    </div>

</div>

</body>
</html>