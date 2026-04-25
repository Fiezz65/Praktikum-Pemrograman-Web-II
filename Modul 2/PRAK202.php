<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK202 - Hafiz Perdana 2410817210027</title>
</head>
<body>

<?php
$nama = "";
$nim = "";
$jenisKelamin = "";

$errorNama = "";
$errorNim = "";
$errorJenisKelamin = "";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    if (isset($_POST['jenis_kelamin'])) {
        $jenisKelamin = $_POST['jenis_kelamin'];
    } else {
        $jenisKelamin = "";
    }

    if ($nama == "") {
        $errorNama = "nama tidak boleh kosong";
    }
    if ($nim == "") {
        $errorNim = "nim tidak boleh kosong";
    }
    if ($jenisKelamin == "") {
        $errorJenisKelamin = "jenis kelamin tidak boleh kosong";
    }

}
?>

<form method="post">
    <label>Nama: <input type="text" name="nama" value="<?= $nama ?>"> <span style="color:red;">*</span></label>
    <?php if ($errorNama != "") echo "<span style='color:red;'>" . $errorNama . "</span>"; ?>
    <br>

    <label>Nim: <input type="text" name="nim" value="<?= $nim ?>"> <span style="color:red;">*</span></label>
    <?php if ($errorNim != "") echo "<span style='color:red;'>" . $errorNim . "</span>"; ?>
    <br>

    Jenis Kelamin :*
    <?php if ($errorJenisKelamin != "") echo "<span style='color:red;'>" . $errorJenisKelamin . "</span>"; ?>
    <br>

    <label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?= ($jenisKelamin == "Laki-laki") ? "checked" : "" ?>> Laki-Laki</label><br>
    <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?= ($jenisKelamin == "Perempuan") ? "checked" : "" ?>> Perempuan</label><br>

    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit']) && $errorNama == "" && $errorNim == "" && $errorJenisKelamin == "") {
    echo "<br>" . $nama . "<br>";
    echo $nim . "<br>";
    echo $jenisKelamin;
}
?>

</body>
</html>