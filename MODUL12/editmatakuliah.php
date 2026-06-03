<?php
// memanggil class Database dari file Database.php
require_once 'Database.php';
$db = new Database();
$con = $db->getConnection();

if (isset($_GET['kodeMK'])) {
    // ambil nilai kodeMK dari url
    $kode_get = $_GET['kodeMK'];

    // menggunakan prepared statement untuk keamanan input
    $stmt = $con->prepare("SELECT * FROM t_matakuliah WHERE kodeMK = ?");
    $stmt->bind_param("i", $kode_get);
    $stmt->execute();
    $result = $stmt->get_result();

    // mengecek apakah data ditemukan
    if (!$data = $result->fetch_assoc()) {
        header("location: viewmatakuliah.php");
        exit;
    }

    $stmt->close();
} else {
    header("location: viewmatakuliah.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Matakuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="viewmatakuliah.php">Kembali ke Tabel</a>
    </nav>
    <h1>Edit Data Matakuliah</h1>
    <div class="container">
        <form action="proses_editmatakuliah.php" method="post">
            <fieldset>
                <legend>Ubah Data Matakuliah</legend>
                <p>
                    <label>Kode MK:</label>
                    <input type="hidden" name="kodeMK" value="<?php echo $data['kodeMK']; ?>">
                    <input type="text" value="<?php echo $data['kodeMK']; ?>" disabled>
                </p>
                <p>
                    <label>Nama MK:</label>
                    <input type="text" name="namaMK" value="<?php echo $data['namaMK']; ?>" required>
                </p>
                <p>
                    <label>SKS:</label>
                    <input type="text" name="sks" value="<?php echo $data['sks']; ?>" required>
                </p>
                <p>
                    <label>Jam:</label>
                    <input type="text" name="jam" value="<?php echo $data['jam']; ?>" required>
                </p>
            </fieldset>
            <p><input type="submit" name="edit" value="Update Data"></p>
        </form>
    </div>
</body>
</html>