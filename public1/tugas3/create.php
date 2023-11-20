<?php
require_once("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $nim = $_POST["nim"];
    $email = $_POST["email"];
    $agama = $_POST["agama"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO users (full_name, username, password, nim, email, agama, gender) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("sssssss", $full_name, $username, $password, $nim, $email, $agama, $gender);

    if ($stmt->execute()) {
        header("Location: read.php");
    } else {
        echo "Error: " . $db->error;
    }

    $stmt->close();
}
?>
