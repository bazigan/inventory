<?php
require_once 'app/config/database.php';
include 'app/includes/header.php';

// Ambil semua data barang
$stmt = $pdo->query("SELECT * FROM items ORDER BY created_at DESC");
$items = $stmt->fetchAll();
?>

<h2>Daftar Barang</h2>
<a href="create.php" class="btn btn-primary mb-3">Tambah Barang Baru</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Deskripsi</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($items as $item): ?>
        <tr>
            <td><?= htmlspecialchars($item['id']) ?></td>
            <td><?= htmlspecialchars($item['name']) ?></td>
            <td><?= htmlspecialchars($item['description']) ?></td>
            <td><?= htmlspecialchars($item['quantity']) ?></td>
            <td><?= number_format($item['price'], 2) ?></td>
            <td><?= htmlspecialchars($item['created_at']) ?></td>
            <td>
                <a href="edit.php?id=<?= $item['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete.php?id=<?= $item['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php include 'app/includes/footer.php'; ?>