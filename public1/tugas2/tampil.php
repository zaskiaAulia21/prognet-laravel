<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Hasil Biodata Diri</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil data dari formulir
            $full_name = $_POST["full_name"];
            $username = $_POST["username"];
            $nim = $_POST["nim"];
            $email = $_POST["email"];
            $agama = $_POST["agama"];
            $jenis_kelamin = $_POST["jenis_kelamin"];

            // Menampilkan hasil biodata
            echo "<p><strong>Full Name:</strong> $full_name</p>";
            echo "<p><strong>Username:</strong> $username</p>";
            echo "<p><strong>NIM:</strong> $nim</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Agama:</strong> $agama</p>";
            echo "<p><strong>Jenis Kelamin:</strong> $jenis_kelamin</p>";
        } else {
            echo "Permintaan tidak valid.";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>