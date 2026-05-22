<!DOCTYPE html>
<html lang="id">
<head>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 4px 8px; }
        th { background-color: #cccccc; font-weight: bold; text-align: left; }
    </style>
</head>
<body>
<table>
    <tr>
        <th>No</th><th>Nama</th><th>Mata Kuliah diambil</th><th>SKS</th><th>Total SKS</th><th>Keterangan</th>
    </tr>

    <?php
    $mahasiswa = [
            ["no" => 1, "nama" => "Ridho", "matkul" => [
                    ["nama_mk" => "Pemrograman I", "sks" => 2], ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
                    ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2], ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
            ]],
            ["no" => 2, "nama" => "Ratna", "matkul" => [
                    ["nama_mk" => "Basis Data I", "sks" => 2], ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
                    ["nama_mk" => "Kalkulus", "sks" => 3]
            ]],
            ["no" => 3, "nama" => "Tono", "matkul" => [
                    ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3], ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
                    ["nama_mk" => "Komputasi Awan", "sks" => 3], ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
            ]]
    ];

    foreach ($mahasiswa as $mhs) :
        $total_sks = array_sum(array_column($mhs["matkul"], "sks"));

        $ket = $total_sks < 7 ? "Revisi KRS" : "Tidak Revisi";
        $warna = $total_sks < 7 ? "red" : "#00cc66";

        foreach ($mhs["matkul"] as $index => $mk) : ?>
            <tr>
                <?php if ($index == 0) : ?>
                    <td><?= $mhs["no"]; ?></td>
                    <td><?= $mhs["nama"]; ?></td>
                    <td><?= $mk["nama_mk"]; ?></td>
                    <td><?= $mk["sks"]; ?></td>
                    <td><?= $total_sks; ?></td>
                    <td style="background-color: <?= $warna; ?>;"><?= $ket; ?></td>
                <?php else : ?>
                    <td></td><td></td>
                    <td><?= $mk["nama_mk"]; ?></td>
                    <td><?= $mk["sks"]; ?></td>
                    <td></td><td></td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
</table>

</body>
</html>