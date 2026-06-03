<?php
include 'koneksi.php';

if (isset($_GET['kodeMK'])) {
    $kode_get = $_GET['kodeMK'];
    $query = "SELECT * FROM t_matakuliah WHERE kodeMK='$kode_get'";
    $result = mysqli_query($link, $query);
    $data = mysqli_fetch_assoc($result);
} else {
    header("location:viewmatakuliah.php");
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