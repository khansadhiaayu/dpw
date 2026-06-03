<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi Academic</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Murni mengatur tata letak kotak dashboard agar rapi di tengah halaman */
        .dashboard-grid {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
        }
        
        .menu-box {
            background: white;
            padding: 25px 20px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(255, 179, 193, 0.15);
            width: 250px;
            text-align: center;
            border: 1px solid #ffe5ec;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .menu-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(255, 133, 161, 0.25);
        }
        
        .menu-box h3 {
            color: #ff758f;
            margin-bottom: 10px;
            font-size: 18px;
        }
        
        .menu-box p {
            font-size: 13px;
            color: #7d6668;
            margin-bottom: 15px;
            line-height: 1.5;
        }
        
        .menu-box .btn-link {
            display: inline-block;
            background-color: #ffb3c1;
            color: white;
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: bold;
            transition: background 0.3s;
        }
        
        .menu-box .btn-link:hover {
            background-color: #ff85a1;
        }
    </style>
</head>
<body>
    <h1>POLIAKAD</h1>
    <h1>Politeknik Academic Information System</h1>

    <nav>
        <a href="viewdosen.php">Data Dosen</a>
        <a href="viewmahasiswa.php">Data Mahasiswa</a>
        <a href="viewmatakuliah.php">Data Matakuliah</a>
    </nav>

    <div style="text-align: center; max-width: 900px; margin: 0 auto; padding: 0 10px;">
        <p style="font-size: 15px; color: #7d6668; font-weight: 500;">
            Selamat datang di Sistem Informasi Akademik Politeknik. Silakan pilih menu di bawah ini.
        </p>

        <div class="dashboard-grid">
            <div class="menu-box">
                <h3>Data Dosen</h3>
                <a href="viewdosen.php" class="btn-link">Buka Tabel</a>
            </div>

            <div class="menu-box">
                <h3>Data Mahasiswa</h3>
                <a href="viewmahasiswa.php" class="btn-link">Buka Tabel</a>
            </div>

            <div class="menu-box">
                <h3>Data Matakuliah</h3>
                <a href="viewmatakuliah.php" class="btn-link">Buka Tabel</a>
            </div>
        </div>
    </div>
</body>
</html>