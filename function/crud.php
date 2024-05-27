<?php
function read($table){
    include "function/conn.php";
    $hasil = mysqli_query($conn, "SELECT * FROM ".$table);
    return $hasil;
}
function readWhere($table, $name, $atribut){
    include "function/conn.php";
    $hasil = mysqli_query($conn, "SELECT * FROM ".$table." WHERE ".$name." = '".$atribut."'");
    return $hasil;
}
function readWhere2($table, $name, $atribut, $name2, $atribut2){
    include "function/conn.php";
    $hasil = mysqli_query($conn, "SELECT * FROM ".$table." WHERE ".$name." = '".$atribut."' AND ".$name2." = '".$atribut2."'");
    return $hasil;
}
function insert5($table, $name, $atribut, $name2, $atribut2, $name3, $atribut3, $name4, $atribut4, $name5, $atribut5){
    include "function/conn.php";
    $hasil = mysqli_query($conn, "INSERT INTO ".$table." (".$name.", ".$name2.", ".$name3.", ".$name4.", ".$name5.") VALUES ('".$atribut."', '".$atribut2."', '".$atribut3."', '".$atribut4."', '".$atribut5."')");
    return $hasil;
}

function update2($table, $name, $atribut, $name2, $atribut2, $name3, $atribut3){
    include "function/conn.php";
    $hasil = mysqli_query($conn, "UPDATE ".$table." SET ".$name2." = '".$atribut2."', ".$name3." = '".$atribut3."' WHERE ".$name." = '".$atribut."';");
    return $hasil;
}
function update4($table, $name, $atribut, $name2, $atribut2, $name3, $atribut3, $name4, $atribut4, $name5, $atribut5){
    include "function/conn.php";
    $hasil = mysqli_query($conn, "UPDATE ".$table." SET ".$name2." = '".$atribut2."', ".$name3." = '".$atribut3."', ".$name4." = '".$atribut4."', ".$name5." = '".$atribut5."' WHERE ".$name." = '".$atribut."';");
    return $hasil;
}


