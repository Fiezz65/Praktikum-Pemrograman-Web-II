<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK203 - Hafiz Perdana 2410817210027</title>
</head>
<body>

<?php
$nilai = "";
$dari  = "";
$ke    = "";
?>

<form method="post">
    <label>Nilai : <input type="text" name="nilai" value="<?= $nilai ?>"></label><br>

    Dari :<br>
    <label><input type="radio" name="dari" value="Celcius"    <?= ($dari == "Celcius")    ? "checked" : "" ?>> Celcius</label><br>
    <label><input type="radio" name="dari" value="Fahrenheit" <?= ($dari == "Fahrenheit") ? "checked" : "" ?>> Fahrenheit</label><br>
    <label><input type="radio" name="dari" value="Rheamur"    <?= ($dari == "Rheamur")    ? "checked" : "" ?>> Rheamur</label><br>
    <label><input type="radio" name="dari" value="Kelvin"     <?= ($dari == "Kelvin")     ? "checked" : "" ?>> Kelvin</label><br>

    Ke :<br>
    <label><input type="radio" name="ke" value="Celcius"    <?= ($ke == "Celcius")    ? "checked" : "" ?>> Celcius</label><br>
    <label><input type="radio" name="ke" value="Fahrenheit" <?= ($ke == "Fahrenheit") ? "checked" : "" ?>> Fahrenheit</label><br>
    <label><input type="radio" name="ke" value="Rheamur"    <?= ($ke == "Rheamur")    ? "checked" : "" ?>> Rheamur</label><br>
    <label><input type="radio" name="ke" value="Kelvin"     <?= ($ke == "Kelvin")     ? "checked" : "" ?>> Kelvin</label><br>

    <input type="submit" name="konversi" value="Konversi">
</form>

<?php
if (isset($_POST['konversi'])) {
    $nilai = $_POST['nilai'];
    $dari  = $_POST['dari'];
    $ke    = $_POST['ke'];

    if ($dari == "Celcius") {
        $celcius = $nilai;
    } else if ($dari == "Fahrenheit") {
        $celcius = ($nilai - 32) * 5 / 9;
    } else if ($dari == "Rheamur") {
        $celcius = $nilai * 5 / 4;
    } else if ($dari == "Kelvin") {
        $celcius = $nilai - 273;
    }

    if ($ke == "Celcius") {
        $hasil = $celcius;
        $simbol = "C";
    } else if ($ke == "Fahrenheit") {
        $hasil = ($celcius * 9 / 5) + 32;
        $simbol = "F";
    } else if ($ke == "Rheamur") {
        $hasil = $celcius * 4 / 5;
        $simbol = "Re";
    } else if ($ke == "Kelvin") {
        $hasil = $celcius + 273;
        $simbol = "K";
    }

    $hasil = round($hasil, 1);

    echo "<h3>Hasil Konversi: " . $hasil . " &deg;" . $simbol . "</h3>";
}
?>

</body>
</html>