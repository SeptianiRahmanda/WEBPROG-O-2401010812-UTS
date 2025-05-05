<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Inventaris Kantor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Inventaris Barang Kantor</h1>
    <a href="tambah.php" class="btn">+ Tambah Barang</a>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Kondisi</th>
            <th>Lokasi</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $result = $conn->query("SELECT * FROM barang");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nama_barang']}</td>
                    <td>{$row['jumlah']}</td>
                    <td>{$row['kondisi']}</td>
                    <td>{$row['lokasi']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}'>Edit</a> | 
                        <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>
                    </td>
                  </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>
