<?php include "koneksi.php"; ?>
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
            $search = mysqli_real_escape_string($link, $_GET['search']);
            $query = "SELECT * FROM t_matakuliah WHERE namaMK LIKE '%$search%' ORDER BY kodeMK ASC";
        } else {
            $query = "SELECT * FROM t_matakuliah ORDER BY kodeMK ASC";
        }

        $result = mysqli_query($link, $query);
        while ($data = mysqli_fetch_assoc($result)) {
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
        ?>
    </table>
</body>
</html>