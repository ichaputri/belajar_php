<?php

//membuat variabel dengan tipe String
$txt1 = "Abcde12345@#$%^";
//string bisa memuat seluruh karakter dalam keyboard

echo "Variabel txt bernilai $txt1 <br />";//menampilkan nilai dari variabel $txt1
var_dump($txt1); //var_dump digunakan utk menampilkan informasi terkait sebuah variabel: tipe data,panjang,nilai

echo "<br /><h1>menghitung jumlah karakter dengan strlen</h1>";
//strlen sigunakan untuk menghitung panjang string (jumlah karakter dalam sebua string termasuk spasi)
echo strlen("Hallo, saya icha! senang bertemu dengan Anda");
$txt2 = "lorem ipsum dolor sit amet"; //string $txt2
echo "<br />";
echo strlen ($txt2); //menampilkan panjang string $txt2

//str_word_count() digunakan untuk menghitung jumlah kata
echo "<br /><h1>menghitung jumlah kata dengan str_word_count</h1>";
echo str_word_count($txt2);

//strrev() digunakan untuk membalik kata (string reverse)
echo "<br /><h1>membalik kalimat dengan strrev</h1>";
echo strrev($txt2);

//mencari posisi sebuah teks dalam kalimat
echo "<br /><h1>mencari posisi sebuah teks dalam kalimat</h1>";
echo strpos($txt2, "amet");

//mengganti karakter pada teks dengan str_replace
echo "<br /><h1>mengganti karakter pada teks dengan str_replace</h1>";
echo str_replace("a","i","Balonku ada lima");

?>