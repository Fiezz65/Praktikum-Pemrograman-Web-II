<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK305</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="teks" required>
    <button type="submit" name="submit">submit</button>
</form>
<br>

<?php
if (isset($_POST['submit'])) {
    $teks = $_POST['teks'];
    $panjang = strlen($teks);

    echo "<b>Input:</b><br>";
    echo "$teks<br><br>";
    echo "<b>Output:</b><br>";

    for ($i = 0; $i < $panjang; $i++) {
        $huruf = strtolower($teks[$i]);
        echo ucfirst(str_repeat($huruf, $panjang));
    }
}
?>
</body>
</html>