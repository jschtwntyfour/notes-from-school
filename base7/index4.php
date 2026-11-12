<?php

function cek_data($data){
    if(isset($_GET[$data])== true){
        return $_GET[$data];
    }else{
        return 0;
    }
}

function hasil($a, $b){
    if(cek_data("dor") == "tambah"){
        return cek_data($a) + cek_data($b);
    }else if(cek_data("dor") == "kurang"){
        return cek_data($a) - cek_data($b);
    }else if(cek_data("dor") == "kali"){
        return cek_data($a) * cek_data($b);
    }else if(cek_data("dor") == "bagi"){
        return cek_data($a) / cek_data($b);
    }else{
        return 0;
    }
}

?>

<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
        <h1>angka 1 = <?php echo cek_data("angka1"); ?></h1>
        <h1>angka 2 = <?php echo cek_data("angka2"); ?></h1>
        <h1>hasil = <?php echo cek_data("angka1", "angka2") ?></h1>
        <hr>
        <form action="" method="get">
            <label for=""> Angka Pertama </label>
            <input type="number" name="angka1">
            <label for=""> Angka Kedua</label>
            <input type="number" name="angka2">
            <input type="submit" name="dor" value="tambah">
            <input type="submit" name="dor" value="kurang">
            <input type="submit" name="dor" value="kali">
            <input type="submit" name="dor" value="bagi">
        </form>
        
        
    </body>
</html>