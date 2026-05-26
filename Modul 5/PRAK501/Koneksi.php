<?php
function getKoneksi() {
    $host = 'sql206.infinityfree.com';
    $db   = 'if0_42025413_prak501';
    $user = 'if0_42025413';
    $pass = 'lixie6705';
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Koneksi gagal: " . $e->getMessage());
    }
}
?>