<?php

// menyambungkan databse dgn php
$db = mysqli_connect(
    "localhost", //ip hosting
    "root", //username
    "", //password
    "x_pplg_1", //db name
);

$x = 10;

//calling object
if ($db->connect_errno == 0){
    echo "database nya sudah terhubung";
}else{
    echo "databasenya bermasalah";
}

?>