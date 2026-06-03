<?php
require_once 'Database.php';
$db = new Database();
$con = $db->getConnection();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tabel Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="viewdosen.php">Data Dosen</a>
        <a href="viewmatakuliah.php">Data Matakuliah</a>
    </nav>
    <h1>Tabel Mahasiswa</h1>

    <?php if (isset($_GET['status'])): ?>
        <div class="alert alert-success">
            <?php
                if ($_GET['status'] == 'sukses_tambah') {
                    echo "Data mahasiswa baru telah berhasil ditambahkan!";
                } elseif ($_GET['status'] == 'sukses_ubah') {
                    echo "Perubahan data mahasiswa telah berhasil disimpan!";
                } elseif ($_GET['status'] == 'sukses_hapus') {
                    echo "Data mahasiswa telah berhasil dihapus!";
                }
            ?>
        </div>
    <?php endif; ?>

    <div class="table-actions">
        <a href="inputmahasiswa.php" class="btn-add">Input Mahasiswa</a>
        <form action="viewmahasiswa.php" method="get" class="search-form">
            <input type="text" name="search" placeholder="Cari nama mhs..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <input type="submit" value="Cari">
        </form>
    </div>

    <table>
        <tr>
            <th>NPM</th>
            <th>Nama Mahasiswa</th>
            <th>Prodi</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Pilihan</th>
        </tr>
        <?php
        if (isset($_GET['search']) && $_GET['search'] != '') {
            // menggunakan prepared statement untuk keamanan input pencarian
            $search = "%" . $_GET['search'] . "%";
            $stmt = $con->prepare("SELECT * FROM t_mahasiswa WHERE namaMhs LIKE ? ORDER BY npm ASC");
            $stmt->bind_param("s", $search);
        } else {
            $stmt = $con->prepare("SELECT * FROM t_mahasiswa ORDER BY npm ASC");
        }

        $stmt->execute();
        $result = $stmt->get_result();

        while ($data = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $data['npm'] . "</td>";
            echo "<td>" . $data['namaMhs'] . "</td>";
            echo "<td>" . $data['prodi'] . "</td>";
            echo "<td>" . $data['alamat'] . "</td>";
            echo "<td>" . $data['noHP'] . "</td>";
            echo "<td>
                    <a href='editmahasiswa.php?npm=" . $data['npm'] . "' class='btn-action edit'>Edit</a>
                    <a href='hapusmahasiswa.php?npm=" . $data['npm'] . "' onclick=\"return confirm('Yakin menghapus data mahasiswa ini?')\" class='btn-action delete'>Hapus</a>
                  </td>";
            echo "</tr>";
        }

        $stmt->close();
        $db->close();
        ?>
    </table>
</body>
</html>