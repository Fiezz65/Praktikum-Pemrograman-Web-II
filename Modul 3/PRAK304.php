<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK304</title>
</head>
<body>
<?php
$bintang = 0;

if (isset($_POST['bintang'])) {
    $bintang = (int)$_POST['bintang'];
}
if (isset($_POST['tambah'])) {
    $bintang++;
}
if (isset($_POST['kurang'])) {
    $bintang--;
}
?>

<?php if ($bintang == 0): ?>
    <form action="" method="POST">
        <label for="bintang">Jumlah bintang</label>
        <input type="number" name="bintang" id="bintang" required> <br>
        <button type="submit" name="submit">Submit</button>
    </form>
<?php else: ?>
    <p>Jumlah bintang <?= $bintang ?></p>

    <?php
    for ($i = 0; $i < $bintang; $i++) {
        echo "<img src='Image/Star.png' style='width: 50px; height: 50px;'> ";
    }
    ?>

    <form action="" method="POST">
        <input type="hidden" name="bintang" value="<?= $bintang ?>">
        <button type="submit" name="tambah">Tambah</button>
        <button type="submit" name="kurang">Kurang</button>
    </form>
<?php endif; ?>
</body>
</html>