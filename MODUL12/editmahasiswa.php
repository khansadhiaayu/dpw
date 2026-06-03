<?php
// memanggil class Database dari file Database.php
require_once 'Database.php';
$db = new Database();
$con = $db->getConnection();

if (isset($_GET['npm'])) {
    // ambil nilai npm dari url
    $npm_get = $_GET['npm'];

    // menggunakan prepared statement untuk keamanan input
    $stmt = $con->prepare("SELECT * FROM t_mahasiswa WHERE npm = ?");
    $stmt->bind_param("i", $npm_get);
    $stmt->execute();
    $result = $stmt->get_result();

    // mengecek apakah data ditemukan
    if (!$data = $result->fetch_assoc()) {
        header("location: viewmahasiswa.php");
        exit;
    }

    $stmt->close();
} else {
    header("location: viewmahasiswa.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="viewmahasiswa.php">Kembali ke Tabel</a>
    </nav>
    <h1>Edit Data Mahasiswa</h1>
    <div class="container">
        <form action="proses_editmahasiswa.php" method="post">
            <fieldset>
                <legend>Ubah Data Mahasiswa</legend>
                <p>
                    <label>NPM:</label>
                    <input type="hidden" name="npm" value="<?php echo $data['npm']; ?>">
                    <input type="text" value="<?php echo $data['npm']; ?>" disabled>
                </p>
                <p>
                    <label>Nama Mahasiswa:</label>
                    <input type="text" name="namaMhs" value="<?php echo $data['namaMhs']; ?>" required>
                </p>
                <p>
                    <label>Prodi:</label>
                    <input type="text" name="prodi" value="<?php echo $data['prodi']; ?>" required>
                </p>
                <p>
                    <label>Alamat:</label>
                    <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" required>
                </p>
                <p>
                    <label>No HP:</label>
                    <input type="text" name="noHP" value="<?php echo $data['noHP']; ?>" required>
                </p>
            </fieldset>
            <p><input type="submit" name="edit" value="Update Data"></p>
        </form>
    </div>
</body>
</html>