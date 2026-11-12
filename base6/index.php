<?php include 'db.php' ?>
<html>
    <head>
        <title>Ambil data dari db</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Daftar Guru Kesayangan</h1>
        <a href="tambah.php">Tambah Guru</a>
        <table border=1>
            <th>Nomor</th>
            <th>Nama Guru</th>
            <th>Mata Pelajaran</th>
            <th>Hari</th>
            <?php
        // query = permintaan, kita minta data ke db
        $data = mysqli_query(
            $db,
            "SELECT * FROM jadwal"
        );
        // cara mengambil data sesuai kolom
        foreach ($data as $item){
            ?>
        <tr>
            <td><?= $item['nomor'] ?></td>
            <td><?= $item['nama_guru'] ?></td>
            <td><?= $item['mata_pelajaran'] ?></td>
            <td><?= $item['hari'] ?></td>
        </tr>
        <?php
        }
        ?>
        </table>

        <hr>
        <h1>Daftar Teman Kesayangan</h1>
        <a href="tambah_teman.php">Tambah Teman</a>
        
        
        
    </body>
</html>