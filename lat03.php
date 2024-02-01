<?php
function belajar(){
    echo "saya belajar php";
}
function luasPersegi($p = 5, $p1 = 3){
    $luas=$p*$p1;
    echo $luas;
}
function luas($p=5, $p1=3){
    $luas=$p*$p1;
    return $luas;
}
function output(){
    return "belajar function";
}
echo luas(100, 3) * 5;
?>