<?php
// memanggil class Database dari file Database.php
require_once 'Database.php';
$db = new Database();
$con = $db->getConnection();

// mengecek apakah di url ada nilai GET idDosen
if (isset($_GET['idDosen'])) {
    // ambil nilai idDosen dari url
    $id = $_GET['idDosen'];

    // menampilkan data t_dosen dari database yang mempunyai idDosen $id
    // menggunakan prepared statement untuk keamanan input
    $stmt = $con->prepare("SELECT * FROM t_dosen WHERE idDosen = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // mengecek apakah query gagal
    if (!$result) {
        die("Query Error: " . $con->errno . " - " . $con->error);
    }

    // mengambil data dari database dan membuat variabel-variabel utk menampung data
    $data = $result->fetch_assoc();
    $idDosen   = $data['idDosen'];
    $namaDosen = $data['namaDosen'];
    $noHP      = $data['noHP'];

    $stmt->close();
} else {
    // apabila tidak ada data GET id akan di redirect ke viewdosen.php
    header("location: viewdosen.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="viewdosen.php">Kembali ke Tabel</a>
    </nav>
    <h1>Edit Data</h1>
    <div class="container">
        <form id="form_dosen" action="proses_editdosen.php" method="post">
            <fieldset>
                <legend>Edit Data Dosen</legend>
                <p>
                    <label for="idDosenDisabled">ID: </label>
                    <input type="hidden" name="idDosen" value="<?php echo $idDosen; ?>">
                    <input type="text" name="idDosenDisabled" id="idDosenDisabled" value="<?php echo $idDosen; ?>" disabled>
                </p>
                <p>
                    <label for="namaDosen">Nama Dosen: </label>
                    <input type="text" name="namaDosen" id="namaDosen" value="<?php echo $namaDosen; ?>" required>
                </p>
                <p>
                    <label for="noHP">No HP: </label>
                    <input type="text" name="noHP" id="noHP" value="<?php echo $noHP; ?>" required>
                </p>
            </fieldset>
            <p>
                <input type="submit" name="edit" value="Simpan Perubahan">
            </p>
        </form>
    </div>
</body>
</html>