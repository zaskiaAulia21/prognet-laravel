<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Detail Data Pengguna</h1>
        <?php
        require_once("koneksi.php");

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
            $id = $_GET["id"];
            $sql = "SELECT * FROM users WHERE id = ?";
            $stmt = $db->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
        ?>
                <table class="table">
                    <tr>
                        <th>Full Name</th>
                        <td><?php echo $row["full_name"]; ?></td>
                    </tr>
                    <tr>
                        <th>Username</th>
                        <td><?php echo $row["username"]; ?></td>
                    </tr>
                    <tr>
                        <th>NIM</th>
                        <td><?php echo $row["nim"]; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $row["email"]; ?></td>
                    </tr>
                    <tr>
                        <th>Agama</th>
                        <td><?php echo $row["agama"]; ?></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td><?php echo $row["gender"]; ?></td>
                    </tr>
                </table>
        <?php
            } else {
                echo "Data tidak ditemukan.";
            }
            $stmt->close();
        } else {
            echo "Permintaan tidak valid.";
        }

        $db->close();
        ?>
        <a href="read.php">Kembali ke Data Pengguna</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
