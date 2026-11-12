<?php
function cek_data($data){
    if(isset($_GET[$data]) == true){
        if($_GET[$data] == NULL){
            return 0;
        }else{
            return $_GET[$data];
        }
    }else{
        return 0;
    }
}

function db(){
    $koneksi = mysqli_connect(
        "localhost",
        "root",
        "",
        "buah",
    );
    if($koneksi->connect_errno == 1){
        return $koneksi->connect_error;
    }else{
        return $koneksi;
    }
}

function tampil(){
    $query = "SELECT * FROM teman WHERE nama LIKE '%$data%' ";
    $ekstrak = mysqli_query(db(), $query);
    return $ekstrak;
}

if (cek_data("dor") == "Cari" ){
    cek_data("nama");
    
}
?>
<html>
<head>
    <title>Searching Using SQL</title>
</head>
<body>
    <h1>Mencari Teman Terbaik</h1>
    <form action="" method="get">
        <label>Nama</label>
        <input type="text" name="nama">
        <br>
        <input type="submit" name="dor" value="Cari">
    </form>
</body>
</html>