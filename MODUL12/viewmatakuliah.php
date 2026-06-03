<?php
require_once 'Database.php';
$db = new Database();
$con = $db->getConnection();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tabel Matakuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="viewdosen.php">Data Dosen</a>
        <a href="viewmahasiswa.php">Data Mahasiswa</a>
    </nav>
    <h1>Tabel Matakuliah</h1>

    <?php if (isset($_GET['status'])): ?>
        <div class="alert alert-success">
            <?php
                if ($_GET['status'] == 'sukses_tambah') {
                    echo "Data mata kuliah baru telah berhasil ditambahkan!";
                } elseif ($_GET['status'] == 'sukses_ubah') {
                    echo "Perubahan data mata kuliah telah berhasil disimpan!";
                } elseif ($_GET['status'] == 'sukses_hapus') {
                    echo "Data mata kuliah telah berhasil dihapus!";
                }
            ?>
        </div>
    <?php endif; ?>

    <div class="table-actions">
        <a href="inputmatakuliah.php" class="btn-add">Input Matakuliah</a>
        <form action="viewmatakuliah.php" method="get" class="search-form">
            <input type="text" name="search" placeholder="Cari nama MK..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <input type="submit" value="Cari">
        </form>
    </div>

    <table>
        <tr>
            <th>Kode MK</th>
            <th>Nama MK</th>
            <th>SKS</th>
            <th>Jam</th>
            <th>Pilihan</th>
        </tr>
        <?php
        if (isset($_GET['search']) && $_GET['search'] != '') {
            // menggunakan prepared statement untuk keamanan input pencarian
            $search = "%" . $_GET['search'] . "%";
            $stmt = $con->prepare("SELECT * FROM t_matakuliah WHERE namaMK LIKE ? ORDER BY kodeMK ASC");
            $stmt->bind_param("s", $search);
        } else {
            $stmt = $con->prepare("SELECT * FROM t_matakuliah ORDER BY kodeMK ASC");
        }

        $stmt->execute();
        $result = $stmt->get_result();

        while ($data = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $data['kodeMK'] . "</td>";
            echo "<td>" . $data['namaMK'] . "</td>";
            echo "<td>" . $data['sks'] . "</td>";
            echo "<td>" . $data['jam'] . "</td>";
            echo "<td>
                    <a href='editmatakuliah.php?kodeMK=" . $data['kodeMK'] . "' class='btn-action edit'>Edit</a>
                    <a href='hapusmatakuliah.php?kodeMK=" . $data['kodeMK'] . "' onclick=\"return confirm('Yakin menghapus data MK ini?')\" class='btn-action delete'>Hapus</a>
                  </td>";
            echo "</tr>";
        }

        $stmt->close();
        $db->close();
        ?>
    </table>
</body>
</html>