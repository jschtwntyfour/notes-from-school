<?php
$a = "justyn"; //variabel
echo $a; // menampilkan
echo "<br>";

class Mobil{
    //access modifier
    //variabel = attribute
    public $merek = "HRV";

    // function = methods
    function jalan($move){
        return $move;


    }
}

//instansiasi = instance
$a = new Mobil;

//object
echo $a->merek;
echo "<br>";
echo $a->jalan("jalan ke kanan");

?>