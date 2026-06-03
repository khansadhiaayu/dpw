<?php

// Fungsi sakti untuk membersihkan input agar form aman dari hacker
function bersihkan_input($data) {
    $data = trim($data);          // Menghapus spasi kosong di awal dan akhir teks
    $data = stripslashes($data);  // Menghapus tanda backslash (\) yang tidak perlu
    $data = htmlspecialchars($data); // Mengubah simbol kode (seperti < atau >) menjadi teks biasa
    return $data;
}

// Siapkan variabel kosong di awal agar tidak error saat pertama kali dibuka
$name = $email = $comment = "";
$sudah_dikirim = false;

// Cek apakah user sudah menekan tombol "Simpan" (Metode POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = bersihkan_input($_POST["name"]);
    $email = bersihkan_input($_POST["email"]);
    $comment = bersihkan_input($_POST["comment"]);
    $sudah_dikirim = true; // Penanda bahwa data berhasil diproses
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Komentar Aman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f7f7; /* Latar belakang toska super soft */
            padding: 30px;
            color: #333;
        }
        .kotak-komentar {
            background-color: white;
            max-width: 450px;
            margin: 0 auto;
            padding: 25px;
            border-radius: 10px;
            border-top: 6px solid #009688; /* Garis atas warna Teal/Toska tegas */
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        h2 {
            margin-top: 0;
            color: #009688;
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            font-size: 14px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 6px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        .grup-tombol {
            display: flex;
            gap: 10px; /* Jarak antar tombol */
        }
        input[type="submit"] {
            background-color: #009688;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            flex: 2; /* Tombol simpan lebih lebar */
            font-weight: bold;
        }
        input[type="reset"] {
            background-color: #e0e0e0;
            color: #333;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            flex: 1; /* Tombol bersihkan lebih kecil */
            font-weight: bold;
        }
        .hasil-ulasan {
            background-color: #e0f2f1;
            padding: 15px;
            border-radius: 6px;
            border-left: 4px solid #009688;
            margin-top: 20px;
            color: #004d40;
        }
        .judul-hasil {
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 15px;
            border-bottom: 1px dashed #b2dfdb;
            padding-bottom: 5px;
        }
    </style>
</head>
<body>

<div class="kotak-komentar">
    <h2>Form Komentar</h2>
    
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Nama:</label>
        <input type="text" name="name" placeholder=>

        <label>E-mail:</label>
        <input type="text" name="email" placeholder=>

        <label>Isi Komentar:</label>
        <textarea name="comment" rows="4" placeholder=></textarea>
        
        <div class="grup-tombol">
            <input type="submit" value="Simpan Komentar">
            <input type="reset" value="Clear">
        </div>
    </form>

    <?php if ($sudah_dikirim) { ?>
        <div class="hasil-ulasan">
            <h4 class="judul-hasil">Komentar Masuk:</h4>
            Nama: <b><?php echo $name; ?></b> <br>
            Email: <b><?php echo $email; ?></b> <br>
            Komentar: <br>
            <i>"<?php echo $comment; ?>"</i>
        </div>
    <?php } ?>

</div>

</body>
</html>