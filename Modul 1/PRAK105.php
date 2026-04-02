<?php

$daftarSmartphoneSamsung = [
    "HP1" => "Samsung Galaxy S22",
    "HP2" => "Samsung Galaxy S22+",
    "HP3" => "Samsung Galaxy A03",
    "HP4" => "Samsung Galaxy Xcover 5"
];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>PRAK105</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        th {
            background-color: red;
            font-size: 24px;
            padding: 20px 3px;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    <?php foreach ($daftarSmartphoneSamsung as $kunci => $smartphone) : ?>
        <tr>
            <td><?= $smartphone ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>