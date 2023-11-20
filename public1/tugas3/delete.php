<?php
require_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        header("Location: read.php");
    } else {
        echo "Gagal menghapus data: " . $db->error;
    }
    $stmt->close();
} else {
    echo "Permintaan tidak valid.";
}

$db->close();
?>
