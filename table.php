<?php 
    require 'koneksi.php';
    $data = query("SELECT * FROM `barang`");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Product</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <label class="logo">Kucing_kita</label>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="table.html">Product</a></li>
                <li><a href="https://www.instagram.com/ccunbaja/">Follow Us</a></li>
            </ul>
        </div>
        <div class="table">
            <div class="row">
                <div class="cell">No</div>
                <div class="cell">Produk</div>
                <div class="cell">Harga</div>
            </div>
            <?php $i = 1; ?>
            <?php foreach ($data as $row): ?>
            <div class="row">
                <div class="cell"><?= $i; ?></div>
                <div class="cell"><img class="img" src="template-bg/<?= $row["gambar"]; ?>" alt="gambar"></div>
                <div class="cell"><?= $row["harga"]; ?></div>
            </div>
            <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>