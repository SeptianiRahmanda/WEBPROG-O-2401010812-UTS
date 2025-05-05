<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tambah Barang</h2>
    <form method="post">
        <label>Id</label><input type="number" name="id" required><br>
        <label>Nama Barang</label><input type="text" name="nama_barang" required><br>
        <label>Jumlah</label><input type="number" name="jumlah" required><br>
        <label>Kondisi</label><input type="text" name="kondisi" required><br>
        <label>Lokasi</label><input type="text" name="lokasi" required><br>
        <button type="submit" name="simpan">Simpan</button>
    </form>
    <a href="index.php">Kembali</a>
    <?php
    if (isset($_POST['simpan'])) {
        $Id = $_POST['id'];
        $nama = $_POST['nama_barang'];
        $jumlah = $_POST['jumlah'];
        $kondisi = $_POST['kondisi'];
        $lokasi = $_POST['lokasi'];
        $sql = "INSERT INTO barang (id,nama_barang, jumlah, kondisi, lokasi) VALUES ('$Id','$nama', '$jumlah', '$kondisi', '$lokasi')";
        if ($conn->query($sql)) {
            echo "<p class='success'>Data berhasil disimpan</p>";
        } else {
            echo "<p class='error'>Gagal menyimpan data: " . $conn->error . "</p>";
        }
    }
    ?>
</body>
</html>