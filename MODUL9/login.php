<?php
// ===================================================
// 1. BAGIAN LOGIKA PHP (Keamanan & Validasi Input Kosong)
// ===================================================

function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Inisialisasi variabel awal agar tidak memicu error notice di VS Code
$nameErr = $passErr = "";
$name = $pass = "";
$sukses_login = false;

// Proses validasi dilakukan HANYA saat form disubmit (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Pengecekan Username
    if (empty($_POST["u"])) {
        $nameErr = "Username tidak boleh kosong!";
    } else {
        $name = bersihkan_input($_POST["u"]);
    }
    
    // Pengecekan Password
    if (empty($_POST["p"])) {
        $passErr = "Password wajib diisi!";
    } else {
        $pass = bersihkan_input($_POST["p"]);
    }

    // Jika setelah dicek kedua kolom aman (tidak ada error), tandai login berhasil
    if (empty($nameErr) && empty($passErr)) {
        $sukses_login = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Login Validasi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fdf2f2; /* Latar belakang kemerahan super soft */
            padding: 40px;
            color: #333;
        }
        .card-login {
            background-color: white;
            max-width: 380px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 12px;
            border-top: 6px solid #c0392b; /* Garis atas warna Merah Crimson */
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        }
        h2 {
            margin-top: 0;
            color: #c0392b;
            text-align: center;
            margin-bottom: 25px;
            letter-spacing: 1px;
        }
        .grup-form {
            margin-bottom: 18px;
        }
        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            color: #4a4a4a;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        /* Style pesan error warna merah cerah di bawah kolom */
        .pesan-error {
            color: #e74c3c;
            font-size: 12px;
            font-weight: bold;
            display: block;
            margin-top: 4px;
        }
        input[type="submit"] {
            background-color: #c0392b;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            font-size: 15px;
            margin-top: 5px;
            transition: background 0.2s;
        }
        input[type="submit"]:hover {
            background-color: #a93226;
        }
        /* Box sukses warna hijau di bagian paling atas card */
        .box-sukses {
            background-color: #d4edda;
            color: #155724;
            padding: 12px;
            border-radius: 4px;
            margin-bottom: 20px;
            font-size: 14px;
            text-align: center;
            font-weight: bold;
            border-left: 4px solid #28a745;
        }
    </style>
</head>
<body>

<div class="card-login">
    <h2>SISTEM LOGIN</h2>

    <?php if ($sukses_login) { ?>
        <div class="box-sukses">
            Login Berhasil!<br>
            Selamat datang, <?php echo $name; ?>
        </div>
    <?php } ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        
        <div class="grup-form">
            <label>Username:</label>
            <input type="text" name="u" placeholder=>
            <?php if (!empty($nameErr)) { ?>
                <span class="pesan-error">⚠️ <?php echo $nameErr; ?></span>
            <?php } ?>
        </div>
        
        <div class="grup-form">
            <label>Password:</label>
            <input type="password" name="p" placeholder=>
            <?php if (!empty($passErr)) { ?>
                <span class="pesan-error">⚠️ <?php echo $passErr; ?></span>
            <?php } ?>
        </div>
        
        <input type="submit" value="Masuk Aplikasi">
    </form>
</div>

</body>
</html>