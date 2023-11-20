<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Edit Data Pengguna</h1>
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
                <form method="post" action="update_process.php">
                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                    <div class="mb-3">
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo $row["full_name"]; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php echo $row["username"]; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="<?php echo $row["password"]; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $row["nim"]; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $row["email"]; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="agama">Agama</label>
                        <select class="form-control" id="agama" name="agama" required>
                            <option value="Islam" <?php echo ($row["agama"] == "Islam") ? "selected" : ""; ?>>Islam</option>
                            <option value="Kristen" <?php echo ($row["agama"] == "Kristen") ? "selected" : ""; ?>>Kristen</option>
                            <option value="Hindu" <?php echo ($row["agama"] == "Hindu") ? "selected" : ""; ?>>Hindu</option>
                            <option value="Buddha" <?php echo ($row["agama"] == "Buddha") ? "selected" : ""; ?>>Buddha</option>
                            <option value="Konghucu" <?php echo ($row["agama"] == "Konghucu") ? "selected" : ""; ?>>Konghucu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender_male" value="Laki-laki" <?php echo ($row["gender"] == "Laki-laki") ? "checked" : ""; ?> required>
                            <label class="form-check-label" for="gender_male">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="gender_female" value="Perempuan" <?php echo ($row["gender"] == "Perempuan") ? "checked" : ""; ?> required>
                            <label class="form-check-label" for="gender_female">Perempuan</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
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