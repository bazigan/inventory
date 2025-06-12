<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/inventory/config/database.php';
if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = $_GET['id'];

// Cek apakah barang ada
$stmt = $pdo->prepare("SELECT * FROM items WHERE id = ?");
$stmt->execute([$id]);
$item = $stmt->fetch();

if (!$item) {
    header("Location: index.php");
    exit;
}

// Hapus barang
$stmt = $pdo->prepare("DELETE FROM items WHERE id = ?");
$stmt->execute([$id]);

header("Location: index.php");
exit;
?>