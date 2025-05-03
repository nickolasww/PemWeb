<?php
session_start(); 
if(!isset($_SESSION['username'])){ 
    header("location: login.php"); 
    exit; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang, <?= $_SESSION['username']?> (<?= $_SESSION['role']?>)</h1>
    <ul>
        <li><a href="halaman-a.php">Halaman A (Admin saja)</a></li>
        <li><a href="halaman-b.php">Halaman B (admin & member)</a></li>
        <li><a href="halaman-c.php">Halaman C (Umum)</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>