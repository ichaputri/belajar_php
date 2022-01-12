<!DOCTYPE html>
<html>
    <head>
        <title>PHP Output</title>
    </head>
    <body>
        <?php
        echo "<p>Kode progam yang ditulis dalam bahasa PHP memungkinkan elemen-elemen di dalamnya untuk dimanipulasi secara otomatis atau pun dengan menggunakan action tertentu (klik, reload, hover, dsb </p>";
        //Ini bagian output dengan menggunakan PHP
            echo "Hello world pakai echo <br />";
            print "Hello world pakai print";

            echo "<h1>Ini Judul</h1>";

            echo "<h2>Table di bawah ini dibuat dengan PHP</h2>";
            echo "<table border = 1>";
            echo "<tr><th>No</th><th>Nama</th></tr>";
            echo "<tr><th>1</th><th>Icha</th></tr>";
            echo "</table> <br />"; 

            //Ini bagian Variable
            echo "<h2>Menampilkan nilai variabel</h2>";
            $i = 189.7; //membuat variabel dengan nama i bernilai 189.7
            $j = 225; //jika nilai variabel berupa angka atau numerik, maka tidak perlu tanda kutip
            $s = "String 1"; //jika nilai dari variabel itu adalah teks / string maka harus menggunakan tanda kutip

            //variabel itu case sensitive (besar kecil huruf berpengaruh)
            $warna = "hitam";
            $WARNA = "kuning" ;
            $Warna = "pink" ;

            echo ("Nilai variabel i adalah ".$i . " dan variabel j adalah " . $j . " dan variabel s adalah " . $s);

            echo ("<br>Motorku warnanya ". $warna . " tembokku warnanya " . $WARNA ." bajuku warnanya ". $Warna);

            echo("<br /> Nilai " . $j . " dibagi nilai " .$i. " adalah " .$j/$i);

        ?>
        <h1>Heading ini diluar PHP</h1>
        <p>Kode progam yang ditulis dalam HTML bersifat statis (tetap) dan tidak bisa di manipulasi</p>
        <table border="1" cellspacing="0" cellpadding="1"> 
            <tr>
                <th>Nis</th>
                <th>Nama</th>
            </tr>
            <tr>
                <th>5845</th>
                <th>Icha</th>
            </tr>
        </table>

        <?php
        echo "ini PHP lain setelah kode HTML";
        ?>
        
    </body>
</html>