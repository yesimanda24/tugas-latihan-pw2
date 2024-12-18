<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Tabel Akademik</title>
</head>
<body>
    <h2>Buat Tabel "tb_akademik" di Database</h2>
    <form method="post">
        <label for="dbname">Nama Database:</label>
        <input type="text" id="dbname" name="dbname" required>
        <br><br>
        <input type="submit" name="create_table" value="Buat Tabel">
    </form>

    <?php
    if (isset($_POST['create_table'])) {
        // Konfigurasi koneksi ke database
        $servername = "localhost";
        $username = "root";
        $password = ""; // Sesuaikan dengan password database Anda
        $dbname = $_POST['dbname']; // Mengambil nama database dari form

        // Membuat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Cek koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // SQL untuk membuat tabel
        $sql = "CREATE TABLE tb_akademik (
            id INT(11) NOT NULL AUTO_INCREMENT,
            nim VARCHAR(20) NOT NULL,
            nama VARCHAR(100) NOT NULL,
            kelas VARCHAR(10) NOT NULL,
            alamat VARCHAR(255) NOT NULL,
            jenis_kelamin VARCHAR(10) NOT NULL,
            agama VARCHAR(20) NOT NULL,
            tgl_lahir DATE NOT NULL,
            PRIMARY KEY (id)
        )";

        // Eksekusi query
        if ($conn->query($sql) === TRUE) {
            echo "<p>Tabel <strong>tb_akademik</strong> berhasil dibuat di database <strong>$dbname</strong>.</p>";
        } else {
            echo "<p>Error membuat tabel: " . $conn->error . "</p>";
        }

        // Tutup koneksi
        $conn->close();
    }
    ?>
</body>
</html>