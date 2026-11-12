<?php include 'fungsi.php'?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>KERANJANG BUAH</h1>
<form action="" method="get">
    <label for="">Nama Buah</label>
    <input type="text" name="buah">
    <input type="submit" name="dor" value="Kirim">
</form>
<a href="index.php">
    <button>
        Bersihkan
    </button>
</a>
<hr>
<table border="1">  
    <tr>
        <th>No</th>
        <th>Nama Buah</th>
        <th colspan="2" >Aksi</th>
    </tr>
    <?php
    $num = 1;
    foreach(tampil() as $z){
        ?>
        <tr>
            <td><?= $num; ?></td>
            <td><?= $z['nama']; ?></td>
            <td><a href="./hapus.php?id_buah=<?= $z['id_buah']; ?>">Hapus</a></td>
            <td><a href="./rubah.php?id_buah=<?= $z['id_buah']; ?>">Rubah</a></td>
        </tr>
    <?php
    $num++;
    } 
    ?>  
    </table>
</body>
</html>