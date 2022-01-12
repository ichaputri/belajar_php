<?php

//Integer atau bilangan bulat
//membuat variabel bilangan bulat
$num1 = 78;
echo "Apakah $num1 integer? :";
var_dump(is_int($num1)); //untuk memeriksa tipe data apakah integer atau bukan
echo "<br />";
var_dump($num1);

$num2 = 76.896;
echo "<br />";
echo "Apakah $num2 integer? :";
var_dump(is_int($num2));
echo "<br />";
var_dump($num2);

//membuat variabel float
$num3 = 616.978736;
echo "<br />";
echo "Apakah $num3 float? :"; 
var_dump(is_float($num3)); //untuk memeriksa tipe data apakah float atau bukan
echo "<br />";
var_dump($num3);

//Casting = merubah tipe data
//merubah float ke integer
$var1 = 8675.5443;
$int_cast_var1 = (int)$var1;//var1 diubah ke integer
echo "<br />Hasil perubahan $var1 ke integer adalah $int_cast_var1";

//merubah string ke integer
$var2 = "1234.86753"; //string
$int_cast_var2 = (int)$var2;
echo "<br /> Hasil perubahan string $var2 ke integer adalah $int_cast_var2";
?>