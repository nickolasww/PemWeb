<!DOCTYPE html>
<html>
<head>
    <title>Tulis ke catatan.txt</title>
</head>
<body>
    <h2>Tulis Catatan (Overwrite)</h2>
    <form method="post">
        <textarea name="catatan" placeholder="Tulis catatan baru..."></textarea><br>
        <input type="submit" value="Simpan">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isi = $_POST["catatan"];
        file_put_contents("catatan.txt", $isi . "\n");
        echo "<p>Catatan berhasil ditulis ulang ke catatan.txt</p>";
    }
    ?>
</body>
</html>
