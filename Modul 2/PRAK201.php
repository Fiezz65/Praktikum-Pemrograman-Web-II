<!DOCTYPE html>
<html lang="en">
<head>
    <title>PRAK201 - Hafiz Perdana 2410817210027</title>
</head>
<body>

<form method="post">
    <label>Nama: 1 <input type="text" name="nama1"></label><br>
    <label>Nama: 2 <input type="text" name="nama2"></label><br>
    <label>Nama: 3 <input type="text" name="nama3"></label><br>
    <input type="submit" name="submit" value="Urutkan">
</form>

<?php
if (isset($_POST['submit'])) {
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];

    if ($nama1 > $nama2) {
        $temp = $nama1;
        $nama1 = $nama2;
        $nama2 = $temp;
    }

    if ($nama2 > $nama3) {
        $temp = $nama2;
        $nama2 = $nama3;
        $nama3 = $temp;
    }

    if ($nama1 > $nama2) {
        $temp = $nama1;
        $nama1 = $nama2;
        $nama2 = $temp;
    }

    echo "<br>" . $nama1 . "<br>";
    echo $nama2 . "<br>";
    echo $nama3;
}
?>

</body>
</html>