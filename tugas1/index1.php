<?php include 'kalkulasi.php';?>
<html>
    <head>
        <title>KONVERSI MATA UANG</title>
    </head>
    <body>
        <h1>Rp <?= $rp; ?></h1>
        <h1>$ <?= $dollar; ?></h1>
        <h1>฿ <?= $baht; ?></h1>
        <h1>¥ <?= $yen; ?></h1>
<hr>
<form action="" method="get">
<label for="">Rupiah</label>
<input type="number" name="rupiah">
<input type="submit" name="dor" value="rp">
<br>
<label for="">Dollar</label>
<input type="number" name="dollar">
<input type="submit" name="dor" value="dl">
<br>
<label for="">Baht</label>
<input type="number" name="baht">
<input type="submit" name="dor" value="bt">
<br>
<label for="">Yen</label>
<input type="number" name="yen">
<input type="submit" name="dor" value="y">
<br>
</form>
<a href="index1.php">
    <button>CLEAN</button>
</a>
    </body>
</html>