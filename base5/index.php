<!-- how to use looping for list -->


<?php

// syntax = tata cara coding yg benar
// for (start from, rules, step)


// operator assignment (= assignment, operatornya + : - x)
// cara operator assignment
// variabel = variabel + berapa
// variabel+=berapa
// variabel++ (khusus untuk 1 saja)

// warna
$cerah = ["merah","kuning","biru"];
$gelap = ["hitam","coklat","ungu"];

// tipe data map
$jadwal = [
    "no" => 1,
    "nama" => "Mr Geza",
    "pelajaran" => "BK",
    "hari" => "Kamis"
];

// cara panggil tipe data map
echo $jadwal['pelajaran'], "<br>";

for ($a = 1; $a < 6; $a+=1){
    echo $a;
    echo "<br>";
}

?>