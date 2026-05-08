<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK303</title>
</head>
<body>
<form action="" method="POST">
    <label for="bawah">Batas Bawah :</label>
    <input type="number" name="bawah" id="bawah" value="<?= isset($_POST['bawah']) ? $_POST['bawah'] : '' ?>"> <br>
    <label for="atas">Batas Atas :</label>
    <input type="number" name="atas" id="atas" value="<?= isset($_POST['atas']) ? $_POST['atas'] : '' ?>"> <br>
    <button type="submit" name="cetak">Cetak</button>
</form>
<br>

<?php
if (isset($_POST['cetak'])) {
    $bawah = $_POST['bawah'];
    $atas = $_POST['atas'];

    do {
        if (($bawah + 7) % 5 == 0) {
            echo "<img src='Image/Star.png' style='width: 15px;'> ";
        } else {
            echo "$bawah ";
        }
        $bawah++;
    } while ($bawah <= $atas);
}
?>
</body>
</html>