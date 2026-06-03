<?php
// 1. AKTIFKAN ERROR REPORTING (Agar jika ada error langsung muncul, tidak blank)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// 2. MULAI SESSION
session_start();

// Fungsi membersihkan input
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$loginMsg = "";

// LOGIKA A: Proses Logout
if (isset($_GET["logout"])) {
    session_destroy();
    header("Location: session_login.php");
    exit();
}

// LOGIKA B: Proses Submit Form Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if (empty($_POST["u"])) {
            throw new Exception("Masukkan username Anda!");
        }
        if (empty($_POST["p"])) {
            throw new Exception("Masukkan password Anda!");
        }

        $username = bersihkan_input($_POST["u"]);
        $password = bersihkan_input($_POST["p"]);

        // Validasi akun simulasi
        if ($username == "admin" && $password == "admin") {
            $_SESSION["username"] = $username;
            // Alihkan kembali ke halaman ini untuk memicu tampilan Dashboard
            header("Location: session_login.php");
            exit();
        } else {
            throw new Exception("Username atau password salah!");
        }
    } catch (Exception $e) {
        // Menyimpan pesan kesalahan ke variabel agar bisa dicetak di bawah
        $loginMsg = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Login Validasi</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f6f8; padding: 40px; color: #333; }
        .card { background-color: white; max-width: 400px; margin: 30px auto; padding: 30px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .card-login { border-top: 6px solid #34495e; }
        .card-dashboard { border-top: 6px solid #2ecc71; }
        h2 { text-align: center; margin-top: 0; }
        .grup-form { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; font-size: 14px; }
        input[type="text"], input[type="password"] { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        input[type="submit"] { background-color: #34495e; color: white; padding: 12px; border: none; border-radius: 5px; cursor: pointer; width: 100%; font-weight: bold; margin-top: 10px; }
        input[type="submit"]:hover { background-color: #2c3e50; }
        .error-box { background-color: #f9ebeb; color: #c0392b; padding: 10px; border-left: 4px solid #e74c3c; border-radius: 4px; margin-bottom: 15px; font-size: 14px; text-align: center; font-weight: bold; }
        .success-box { background-color: #d4edda; color: #155724; padding: 15px; border-left: 4px solid #28a745; border-radius: 4px; margin-bottom: 15px; }
        .btn-logout { display: block; text-align: center; background-color: #e74c3c; color: white; text-decoration: none; padding: 10px; border-radius: 5px; font-weight: bold; margin-top: 20px; }
    </style>
</head>
<body>

    <?php if (isset($_SESSION["username"])) { ?>
        <div class="card card-dashboard">
            <h2>Dashboard Utama</h2>
            <div class="success-box">
                🎉 <b>Login Berhasil!</b><br>
                Selamat datang kembali, <b><?php echo $_SESSION["username"]; ?></b>.
            </div>
            <p style="font-size: 13px; color:#666;">ID Session Anda: <br><code style="word-break:break-all;"><?php echo session_id(); ?></code></p>
            <a href="session_login.php?logout=1" class="btn-logout">Keluar (Logout)</a>
        </div>

    <?php } else { ?>
        <div class="card card-login">
            <h2>Login Aplikasi</h2>
            
            <?php if (!empty($loginMsg)) { ?>
                <div class="error-box">
                    ⚠️ <?php echo $loginMsg; ?>
                </div>
            <?php } ?>

            <form method="POST" action="session_login.php">
                <div class="grup-form">
                    <label>Username:</label>
                    <input type="text" name="u" placeholder="Ketik admin...">
                </div>
                <div class="grup-form">
                    <label>Password:</label>
                    <input type="password" name="p" placeholder="Ketik admin...">
                </div>
                <input type="submit" value="Masuk Ke Aplikasi">
            </form>
            <p style="text-align: center; font-size: 12px; color: #777; margin-top: 15px;">Gunakan username: <b>admin</b> | password: <b>admin</b></p>
        </div>
    <?php } ?>

</body>
</html>