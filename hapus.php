<?php include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM barang WHERE id=$id";
if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus: " . $conn->error;
}
?>