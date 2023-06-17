<?php
date_default_timezone_set("Asia/Jakarta");
function koneksi(){
    $ip = "localhost";
    $user = "root";
    $password = "";
    $database = "2109010051_patric_webdasara2";
    $koneksi = mysqli_connect($ip,$user,$password,$database);
    return $koneksi;   
}

function q($nilai){
    $koneksi = koneksi();
    return mysqli_query($koneksi,$nilai);
}

function prodi(){
    return q("SELECT * FROM prodi_umsu ORDER BY id ASC");
}
