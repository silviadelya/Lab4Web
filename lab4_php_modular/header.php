<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Latihan Modularisasi</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div id="container">
    <header>
        <h1>Pratikum 4</h1>
    </header>
    <nav>
        <a href="home.php">Home</a>
        <a href="tambah.php">Tambah Barang</a>
    </nav>
    