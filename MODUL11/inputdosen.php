<!DOCTYPE html>
<html>
<head>
    <title>Input Data Dosen PNM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="index.php">Beranda</a>
        <a href="viewdosen.php">Tabel Dosen</a>
    </nav>
    <h1>Input Data</h1>
    <div class="container">
        <form id="form_dosen" action="proses_inputdosen.php" method="post"> 
            <fieldset>
                <legend>Input Data Dosen</legend> 
                <p>
                    <label for="namaDosen">Nama Dosen: </label> 
                    <input type="text" name="namaDosen" id="namaDosen" required> 
                </p>
                <p>
                    <label for="noHP">No HP: </label> 
                    <input type="text" name="noHP" id="noHP" placeholder="Contoh: 081222333444" required> 
                </p>
            </fieldset>
            <p>
                <input type="submit" name="input" value="Simpan"> 
            </p>
        </form>
    </div>
</body>
</html>