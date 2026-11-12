<?php include 'proses.php'; ?>
<html>
    <head>
        <title>OOP SEDERHANA</title>
    </head>
    <body>
        <h1><?= $cek->tampil_nama("nama");?></h1>
        <hr>
    <form action="" method="GET">
        <label for="">MASUKKAN NAMA</label>
        <input type="text" name="nama">
        <label for="">MASUKKAN UMUR</label>
        <input type="number" name="umur">
        <label for="">MASUKKAN JENIS KELAMIN</label>
        <input type="text" name="jk">
        <input type="submit" value="KIRIM">
        <a href="index2.php">
            <button>clean</button>
        </a>
    </form>    
    </body>
</html>