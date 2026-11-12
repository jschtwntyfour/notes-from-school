<?php
$a = 9;
// ternary operator
// echo ($a == 10) ? "Angka Sepuluh" : "Bukan Angka Sepuluh!"
// if($a == 10){
//     echo "Angka Sepuluh!";
// }else{
//     echo "Bukan Angka Sepuluh!";
// }

$rp = $dollar = $baht = $yen = 0;
function cek_data($data){
    return (isset($_GET[$data]) == TRUE) ? ($_GET[$data] == NULL) ? 0 : $_GET[$data] : 0;
// kalau $_GET [$data] ada, cek isinya null atau engga. kalau null = 0,
//  kalau ada isinya, ambil isinya. kalau dari awal gada maka 0.
}

//fungsi
function konversi_rp($rupiah){
    global $rp,$dollar,$baht,$yen;
    $rp = $rupiah;
    $dollar = $rupiah * 0.000059;// 1/16.900
    $baht = $rupiah * 0.0018;// 1/555
    $yen = $rupiah * 0.0093;// 1/107
}
//logika
if(cek_data("dor") == "rp"){
    konversi_rp(cek_data("rupiah"));
}

?>