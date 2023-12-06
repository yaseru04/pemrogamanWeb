<!DOCTYPE html>
<html>
<head>
    <title>Formulir Validasi</title>
</head>
<body>
    <h2>Formulir Validasi</h2>
    <form method="post" action="" >
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
            <label for="nim">NIM:</label>
            <input type="nim" id="nim"name="nim">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["nim"])) {
                echo "<span style='color: red;'>NIM wajib diisi</span>";
            }
            ?>
        </div>
        <div>
            <label for="prodi">Prodi:</label>
            <input type="prodi" id="prodi"name="prodi">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["prodi"])) {
                echo "<span style='color: red;'>Prodi wajib diisi</span>";
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
            <label for="alamat">Alamat:</label>
            <input type="alamat" id="alamat" name="alamat">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["alamat"])) {
                echo "<span style='color: red;'>Alamat wajib diisi</span>";
            }
            ?>
        <div>
        <div>
            <label for="no_hp">No_Hp:</label>
            <input type="no_hp" id="no_hp" name="no_hp">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($_POST["no_hp"])) {
                echo "<span style='color: red;'>No Hp wajib diisi</span>";
            }
            ?>
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $nim = $_POST["nim"];
        $prodi = $_POST["prodi"];
        $alamat = $_POST["alamat"];
        $no_hp = $_POST["no_hp"];

        if (empty($nama) || empty($email) || empty($nim) || empty($prodi) || empty($alamat) || empty($no_hp)) {
            echo "<p>Harap isi semua field.</p>";
            exit;
        }else {
            echo "<p>Data yang Anda masukkan:</p>";
            echo "<p>Nama: " . $nama . "</p>";
            echo "<p>Email: " . $email . "</p>";
            echo "<p>NIM: " . $nim . "</p>";
            echo "<p>Prodi: " . $prodi . "</p>";
            echo "<p>Alamat: " . $alamat . "</p>";
            echo "<p>No_Hp: " . $noHp . "</p>";
        }
    }
    ?>
</body>
</html>