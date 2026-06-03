<!DOCTYPE html>
<html>
<head>
    <title>Input Matakuliah</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="viewmatakuliah.php">Tabel Matakuliah</a>
    </nav>
    <h1>Input Matakuliah</h1>
    <div class="container">
        <form action="proses_inputmatakuliah.php" method="post">
            <fieldset>
                <legend>Form Input Mata Kuliah</legend>
                <p>
                    <label for="kodeMK">Kode MK: </label>
                    <input type="text" name="kodeMK" id="kodeMK" required>
                </p>
                <p>
                    <label for="namaMK">Nama MK: </label>
                    <input type="text" name="namaMK" id="namaMK" required>
                </p>
                <p>
                    <label for="sks">SKS: </label>
                    <input type="text" name="sks" id="sks" required>
                </p>
                <p>
                    <label for="jam">Jam: </label>
                    <input type="text" name="jam" id="jam" required>
                </p>
            </fieldset>
            <p><input type="submit" name="input" value="Simpan MK"></p>
        </form>
    </div>
</body>
</html>