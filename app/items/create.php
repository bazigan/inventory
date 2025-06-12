<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/database.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    
    $stmt = $pdo->prepare("INSERT INTO items (name, description, quantity, price) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $description, $quantity, $price]);
    
    header("Location: index.php");
    exit;
}

include 'app/includes/header.php';
?>

<h2>Tambah Barang Baru</h2>

<form method="post">
    <div class="mb-3">
        <label for="name" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">Jumlah</label>
        <input type="number" class="form-control" id="quantity" name="quantity" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Harga</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Kembali</a>
</form>

<?php include 'app/includes/footer.php'; ?>