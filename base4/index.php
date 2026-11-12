<?php

include 'connect.php';

$data = mysqli_query(
    $db,
  "SELECT * FROM jadwal"
);

//tipe data list 1 dimensi

$jadwal = [
    "Dpplg1"
    "Dpplg2"
    "Informatika"
    "B-inggris"
    "Sejarah"
];

// list multidimensional
$buah = [
    ["jambu","melon","anggur ijo"]
    ["pear","apel","klengkeng"]
];

echo $buah[0][0];
echo "<br>";
echo $buah[0][1];
echo "<br>";
echo $buah[0][2];
echo "<br>";

for   ($a =0 ; $a <= 2; $a + +){
    echo $a
    echo "<br>";
}

?>

<html>
<head>
    <title>mengambil data dari database</title>
</head>
<body>

</body>