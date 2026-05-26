<?php
require_once 'Model.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;
$data = $id ? getPeminjamanById($id) : null;
$members = getMembers();
$buku = getBuku();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_member = $_POST['id_member'];
    $id_buku = $_POST['id_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];

    if ($id) {
        updatePeminjaman($id, $id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
    } else {
        insertPeminjaman($id_member, $id_buku, $tgl_pinjam, $tgl_kembali);
    }
    header("Location: Peminjaman.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman - PRAK501</title>
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
        <h4 class="fw-bold text-dark mb-4 text-center"><?= $id ? 'Edit' : 'Tambah' ?> Peminjaman</h4>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label small fw-semibold text-secondary">Nama Member</label>
                <select name="id_member" class="form-select" required>
                    <option value="">Pilih Member...</option>
                    <?php foreach ($members as $m): ?>
                        <option value="<?= $m['id_member'] ?>" <?= (isset($data) && $data['id_member'] == $m['id_member']) ? 'selected' : '' ?>>
                            <?= $m['nama_member'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label small fw-semibold text-secondary">Judul Buku</label>
                <select name="id_buku" class="form-select" required>
                    <option value="">Pilih Buku...</option>
                    <?php foreach ($buku as $b): ?>
                        <option value="<?= $b['id_buku'] ?>" <?= (isset($data) && $data['id_buku'] == $b['id_buku']) ? 'selected' : '' ?>>
                            <?= $b['judul_buku'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label small fw-semibold text-secondary">Tanggal Pinjam</label>
                <input type="date" name="tgl_pinjam" class="form-control" value="<?= isset($data['tgl_pinjam']) ? $data['tgl_pinjam'] : '' ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label small fw-semibold text-secondary">Tanggal Kembali</label>
                <input type="date" name="tgl_kembali" class="form-control" value="<?= isset($data['tgl_kembali']) ? $data['tgl_kembali'] : '' ?>" required>
            </div>

            <div class="d-grid gap-2 mt-4">
                <button type="submit" class="btn btn-warning rounded-pill fw-semibold text-dark">Simpan Transaksi</button>
                <a href="Peminjaman.php" class="btn btn-light rounded-pill border">Batal</a>
            </div>
        </form>
    </div>

</div>

</body>
</html>