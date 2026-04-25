<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK204 - Hafiz Perdana 2410817210027</title>
</head>
<body>

<?php
$nilai = "";
$hasil = "";
?>

<form method="post">
    <label>Nilai : <input type="text" name="nilai" value="<?= $nilai ?>"></label><br>
    <input type="submit" name="konversi" value="Konversi">
</form>

<?php
if (isset($_POST['konversi'])) {
    $nilai = $_POST['nilai'];

    if ($nilai == 0) {
        $hasil = "Nol";
    } else if ($nilai >= 1 && $nilai <= 9) {
        $hasil = "Satuan";
    } else if ($nilai >= 10 && $nilai <= 19) {
        $hasil = "Belasan";
    } else if ($nilai >= 20 && $nilai <= 99) {
        $hasil = "Puluhan";
    } else if ($nilai >= 100 && $nilai <= 999) {
        $hasil = "Ratusan";
    } else {
        $hasil = "Anda Menginput Melebihi Limit Bilangan";
    }

    echo "<h3>Hasil: " . $hasil . "</h3>";
}
?>

</body>
</html>