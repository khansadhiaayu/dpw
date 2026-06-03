<!DOCTYPE html>
<html>
<head>
    <title>Input Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="viewmahasiswa.php">Tabel Mahasiswa</a>
    </nav>
    <h1>Input Mahasiswa</h1>
    <div class="container">
        <form action="proses_inputmahasiswa.php" method="post">
            <fieldset>
                <legend>Form Input Mahasiswa</legend>
                <p>
                    <label for="npm">NPM: </label>
                    <input type="text" name="npm" id="npm" required>
                </p>
                <p>
                    <label for="namaMhs">Nama Mahasiswa: </label>
                    <input type="text" name="namaMhs" id="namaMhs" required>
                </p>
                <p>
                    <label for="prodi">Program Studi: </label>
                    <input type="text" name="prodi" id="prodi" required>
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <input type="text" name="alamat" id="alamat" required>
                </p>
                <p>
                    <label for="noHP">No HP: </label>
                    <input type="text" name="noHP" id="noHP" placeholder="Contoh: 081234567890" required>
                </p>
            </fieldset>
            <p><input type="submit" name="input" value="Simpan Mahasiswa"></p>
        </form>
    </div>
</body>
</html>