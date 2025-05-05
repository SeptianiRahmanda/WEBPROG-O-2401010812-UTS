<?php include 'config.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM barang WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Barang</h2>
    <form method="post">
        <label>Id</label><input type="number" name="id" value="<?= $data['id'] ?>" required><br>
        <label>Nama Barang</label><input type="text" name="nama_barang" value="<?= $data['nama_barang'] ?>" required><br>
        <label>Jumlah</label><input type="number" name="jumlah" value="<?= $data['jumlah'] ?>" required><br>
        <label>Kondisi</label><input type="text" name="kondisi" value="<?= $data['kondisi'] ?>" required><br>
        <label>Lokasi</label><input type="text" name="lokasi" value="<?= $data['lokasi'] ?>" required><br>
        <button type="submit" name="update">Update</button>
    </form>
    <a href="index.php">Kembali</a>
    <?php
    if (isset($_POST['update'])) {
        $Id = $_POST['id'];
        $nama = $_POST['nama_barang'];
        $jumlah = $_POST['jumlah'];
        $kondisi = $_POST['kondisi'];
        $lokasi = $_POST['lokasi'];
        $sql = "UPDATE barang SET id='$Id', nama_barang='$nama', jumlah='$jumlah', kondisi='$kondisi', lokasi='$lokasi' WHERE id=$id";
        if ($conn->query($sql)) {
            echo "<p class='success'>Data berhasil diperbarui</p>";
        } else {
            echo "<p class='error'>Gagal memperbarui data: " . $conn->error . "</p>";
        }
    }
    ?>
</body>
</html>