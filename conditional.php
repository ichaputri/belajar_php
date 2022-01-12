<?php

$var1 = 75;

//if statement menjalankan kode progam jika kondisi terpenuhi, jika tidk trpenuhi maka progam tdk mnjalankan apapun
if ($var1>80){
    echo "$var1 lebih dari 80<br />";
}

//if..else mengeksekusi beberapa code jika kondisinya benar, dan beberapa kode lain jika kondisinya salah

if($var1 >80){
    echo "$var1 lebih dari 80<br />";
}else {
    echo "$var1 tidak lebih dari 80<br />";
}

//if..elseif..else statememt - mengeksekusi beberapa kode yang berbeda beda sesuai dengan kondisi

if ($var1 <= 40){
    echo "$var1 kurang dari 40<br />";
}elseif($var1 >=40 && $var1 <=60){
    echo "$var1 lebih dari atau sama dengan 40 dan kurang dari atau sama dengan 60<br />";
}elseif($var1 > 60 && $var1 <=80){
    echo "$var1 lebih dari 60 dan kurang dari atau sama dengan 80<br />";
}else{
    echo "$var1 lebih dari 80 <br />";
}

//switch statement - menyeleksi salah satu dari beberapa blok kode progam untuk dijalankan

$nilai = "C";

switch($nilai){
    case "A":
        echo "Selamat anda mendapat nilai terbaik, yaitu nilai A";
        break;
    case "B": 
        echo "Selamat anda mendapat nilai baik, yaitu B";
        break;
    case "C":
        echo "Belajar lagi ya, Anda mendapat nilai Cukup / C";
        break;
    default:
        echo "Maaf, Anda tidak lulus";
}
?>