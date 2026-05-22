<?php
$panjang = "";
$lebar = "";
$nilai = "";

if (isset($_POST["cetak"])) {
    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];
    $nilai = $_POST["nilai"];
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<form action="" method="POST">
    Panjang: <input type="text" name="panjang" value="<?= $panjang; ?>"><br>
    Lebar: <input type="text" name="lebar" value="<?= $lebar; ?>"><br>
    Nilai: <input type="text" name="nilai" value="<?= $nilai; ?>"><br>
    <button type="submit" name="cetak">Cetak</button>
</form>
<br>

<?php
if (isset($_POST["cetak"])) {
    $isiNilai = explode(" ", $nilai);
    $panjang = (int)$panjang;
    $lebar = (int)$lebar;

    if (count($isiNilai) != ($panjang * $lebar)) {
        echo "Panjang nilai tidak sesuai dengan ukuran matriks";
    } else {
        echo "<table>";
        $index = 0;
        for ($i = 0; $i < $panjang; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $lebar; $j++) {
                echo "<td>" . $isiNilai[$index] . "</td>";
                $index++;
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>

</body>
</html>