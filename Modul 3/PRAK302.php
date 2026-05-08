<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK302</title>
</head>
<body>
<form action="" method="POST">
    <label for="tinggi">Tinggi :</label>
    <input type="number" name="tinggi" id="tinggi" value="<?= isset($_POST['tinggi']) ? $_POST['tinggi'] : '' ?>"> <br>
    <label for="gambar">Alamat Gambar :</label>
    <input type="text" name="gambar" id="gambar" value="<?= isset($_POST['gambar']) ? $_POST['gambar'] : 'https://cdn0.iconfinder.com/data/icons/web-and-mobile-icons-volume-2/128/52-512.png' ?>"> <br>
    <button type="submit" name="cetak">Cetak</button>
</form>
<br>

<?php
if (isset($_POST['cetak'])) {
    $tinggi = $_POST['tinggi'];
    $gambar = $_POST['gambar'];
    $i = 1;

    while ($i <= $tinggi) {
        $j = 1;
        while ($j < $i) {
            echo "<img src='$gambar' style='width: 20px; visibility: hidden;'>";
            $j++;
        }

        $k = $tinggi;
        while ($k >= $i) {
            echo "<img src='$gambar' style='width: 20px;'>";
            $k--;
        }
        echo "<br>";
        $i++;
    }
}
?>
</body>
</html>