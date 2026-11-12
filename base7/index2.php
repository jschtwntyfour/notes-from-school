<?php
function angka(){
    echo 17;//echo itu menampilkan
}
function angka1(){
    return 17;//return itu berisi 17
}

$umur = 17;
// angka1 jadi variabel yang isinya 17
if (angka1() >= 17){
    echo "KTP";
}else{
    echo "Tidak punya KTP";
}


function cek_data($target){
    if (isset($_GET[$target]) == true){
        echo $_GET[$target];
    }else{
        echo "data belum ada !";
    }
}
?>
<html>
    <head>
        <title>Function isset</title>
    </head>
    <body>
        <h1>ISSET</h1>
        <h3>isset = apakah sudah di set?</h3>
        <hr>
        <h1><?php cek_data('nama'); ?></h1>
        <h1><?php cek_data('umur'); ?></h1>
        <hr>
        <form action="" method="GET">
            <label for="">NAMA</label>
            <input type="text" name="nama">
            <label for="">UMUR</label>
            <input type="number" name="umur">
            <input type="submit" value="Kirim">
        </form>
    </body>
</html>

