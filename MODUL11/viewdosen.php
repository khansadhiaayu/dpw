<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Dosen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="viewmahasiswa.php">Mahasiswa</a>
        <a href="viewmatakuliah.php">Matakuliah</a>
    </nav>
    <h1>Tabel Dosen</h1>

    <?php if (isset($_GET['status'])): ?>
        <div class="alert alert-success">
            <?php 
                if ($_GET['status'] == 'sukses_tambah') {
                    echo "Data dosen baru telah berhasil ditambahkan!";
                } elseif ($_GET['status'] == 'sukses_ubah') {
                    echo "Perubahan data dosen telah berhasil disimpan!";
                } elseif ($_GET['status'] == 'sukses_hapus') {
                    echo "Data dosen telah berhasil dihapus!";
                }
            ?>
        </div>
    <?php endif; ?>

    <div class="table-actions">
        <a href="inputdosen.php" class="btn-add">Input Data</a>
        <form action="viewdosen.php" method="get" class="search-form">
            <input type="text" name="search" placeholder="Cari nama dosen..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
            <input type="submit" value="Cari">
        </form>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama Dosen</th>
            <th>No HP</th>
            <th>Pilihan</th>
        </tr>
        <?php
        if (isset($_GET['search']) && $_GET['search'] != '') {
            $search = mysqli_real_escape_string($link, $_GET['search']);
            $query = "SELECT * FROM t_dosen WHERE namaDosen LIKE '%$search%' ORDER BY idDosen ASC";
        } else {
            $query = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
        }

        $result = mysqli_query($link, $query);
        while ($data = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $data['idDosen'] . "</td>";
            echo "<td>" . $data['namaDosen'] . "</td>";
            echo "<td>" . $data['noHP'] . "</td>";
            echo "<td>
                    <a href='editdosen.php?idDosen=" . $data['idDosen'] . "' class='btn-action edit'>Edit</a>
                    <a href='hapusdosen.php?idDosen=" . $data['idDosen'] . "' onclick=\"return confirm('Anda yakin akan menghapus data ini?')\" class='btn-action delete'>Hapus</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>