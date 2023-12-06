<!DOCTYPE html>
<html>
<head>
    <title>Formulir Validasi</title>
</head>
<body>
    <h2>Formulir Validasi</h2>
    <form method="post" action="">
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["nama"])) {
                echo "<span style='color: red;'>Nama wajib diisi</span>";
            }
            ?>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["email"])) {
                echo "<span style='color: red;'>Email wajib diisi</span>";
            }
            ?>
        </div>
        <div>
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-laki">
            <label for="laki_laki">Laki-laki</label>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
            <label for="perempuan">Perempuan</label>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["jenis_kelamin"])) {
                echo "<span style='color: red;'>Jenis Kelamin wajib dipilih</span>";
            }
            ?>
        </div>
        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $jenis_kelamin = $_POST["jenis_kelamin"];
        $operasi = $_POST["operasi"];

        if (empty($nama) || empty($email) || empty($jenis_kelamin)) {
            echo "<p>Harap isi semua field.</p>";
            exit;
        }else {
            echo "<p>Data yang Anda masukkan:</p>";
            echo "<p>Nama: " . $nama . "</p>";
            echo "<p>Email: " . $email . "</p>";
            echo "<p>Jenis Kelamin: " . $jenis_kelamin . "</p>";
        }
    }
    ?>
</body>
</html>