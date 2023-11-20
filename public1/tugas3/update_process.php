<?php
require_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $full_name = $_POST["full_name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nim = $_POST["nim"];
    $email = $_POST["email"];
    $agama = $_POST["agama"];
    $gender = $_POST["gender"];

    $sql = "UPDATE users SET full_name=?, username=?, password=?, nim=?, email=?, agama=?, gender=? WHERE id=?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("sssssssi", $full_name, $username, $password, $nim, $email, $agama, $gender, $id);

    if ($stmt->execute()) {
        header("Location: read.php");
    } else {
        echo "Gagal memperbarui data: " . $db->error;
    }

    $stmt->close();
} else {
    echo "Permintaan tidak valid.";
}

$db->close();
?>
