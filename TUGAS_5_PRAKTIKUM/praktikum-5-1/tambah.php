<!DOCTYPE html>
<html>
<head>
    <title>Tambah ke catatan.txt</title>
</head>
<body>
    <h2>Tambah Catatan</h2>
    <form method="post">
        <textarea name="catatan" placeholder="Tambahkan catatan..."></textarea><br>
        <input type="submit" value="Tambah">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isi = $_POST["catatan"];
        $file = fopen("catatan.txt", "a");
        if ($file) {
            fwrite($file, $isi . "\n");
            fclose($file);
            echo "<p>Catatan berhasil ditambahkan ke catatan.txt</p>";
        } else {
            echo "<p>Gagal membuka file.</p>";
        }
    }
    ?>
</body>
</html>
