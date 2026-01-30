<?php

$c = $f = $k = $r = 0;  

function cek_data($data){
    if(isset($_GET[$data])==true){
        if($_GET[$data] == NULL){
            return 0;
            }else{
      return $_GET[$data];
    }
}else{
    return 0;
}
}

//di dalam fungsi tidak bisa memanggil apapaun diluar fungsi, tapi bisa pakai global
// global berfungsi memanggil variabel di luar fungsi

// CONVERT CELCIUS KE SUHU LAIN
function cel_conv($cel){
    global $c, $f, $k, $r;
    $c = $cel;
    $f = ($cel * 9/5) + 32;
    $k = $cel + 273.15;
    $r = $cel * 4/5;
}

// CONVERT FAHRENHEIT KE SUHU LAIN
function fare_conv($fare){
    global $c, $f, $k, $r;
    $c = ($fare - 32) * 5/9;
    $f = $fare;
    $k = ($fare + 459.67) * 5/9;
    $r = ($fare - 32) * 4/9 ;
}

// CONVERT KELVIN KE SUHU LAIN
function kelv_conv($kelv){
    global $c, $f, $k, $r;
    $f = 9/5 * ($kelv-273.15) + 32;
    $c = $kelv - 273.15;
    $k = $kelv;
    $r = ($kelv - 273.15) * 4/5;
}

// CONVERT REAMUR KE SUHU LAIN
function rea_conv($rea){
    global $c, $f, $k, $r;
    $r = $rea;
    $c = $rea * 5/4;
    $f = $rea * 9/4;
    $k = $rea * 5/4 + 273;
}

// IF ELSE
$dor = cek_data('dor');

if($dor == "celci"){
    cel_conv(cek_data("celcius"));
} elseif ($dor == "fare"){
    fare_conv(cek_data("fahrenheit"));
} elseif ($dor == "kelv") {
    kelv_conv(cek_data("kelvin"));
} elseif ($dor == "rea") {
    rea_conv(cek_data('reamur'));
}



?>
