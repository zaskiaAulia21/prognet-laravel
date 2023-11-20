<?php
$hostname = "192.168.4.4";
$username = "2205551036";
$password = "2205551036";
$database = "db_2205551036";

$db = new mysqli($hostname, $username, $password, $database);

if ($db->connect_error) {
    die("Koneksi database gagal: " . $db->connect_error);
}
?>
