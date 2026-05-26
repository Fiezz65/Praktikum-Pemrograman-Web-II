<?php
require_once 'Model.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;
$data = $id ? getMemberById($id) : null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama_member'];
    $nomor = $_POST['nomor_member'];
    $alamat = $_POST['alamat'];
    $tgl_daftar = $_POST['tgl_mendaftar'];
    $tgl_bayar = $_POST['tgl_terakhir_bayar'];

    if ($id) {
        updateMember($id, $nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar);
    } else {
        insertMember($nama, $nomor, $alamat, $tgl_daftar, $tgl_bayar);
    }
    header("Location: Member.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Member - PRAK501</title>
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
        <h4 class="fw-bold text-dark mb-4 text-center"><?= $id ? 'Edit' : 'Tambah' ?> Data Member</h4>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label small fw-semibold text-secondary">Nama Member</label>
                <input type="text" name="nama_member" class="form-control" value="<?= isset($data['nama_member']) ? $data['nama_member'] : '' ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold text-secondary">Nomor Member</label>
                <input type="text" name="nomor_member" class="form-control" value="<?= isset($data['nomor_member']) ? $data['nomor_member'] : '' ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold text-secondary">Alamat</label>
                <textarea name="alamat" class="form-control" rows="3" required><?= isset($data['alamat']) ? $data['alamat'] : '' ?></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold text-secondary">Tanggal Mendaftar</label>
                <input type="datetime-local" name="tgl_mendaftar" class="form-control" value="<?= isset($data['tgl_mendaftar']) ? $data['tgl_mendaftar'] : '' ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label small fw-semibold text-secondary">Tanggal Terakhir Bayar</label>
                <input type="date" name="tgl_terakhir_bayar" class="form-control" value="<?= isset($data['tgl_terakhir_bayar']) ? $data['tgl_terakhir_bayar'] : '' ?>" required>
            </div>

            <div class="d-grid gap-2 mt-4">
                <button type="submit" class="btn btn-primary rounded-pill">Simpan Data</button>
                <a href="Member.php" class="btn btn-light rounded-pill border">Batal</a>
            </div>
        </form>
    </div>

</div>

</body>
</html>