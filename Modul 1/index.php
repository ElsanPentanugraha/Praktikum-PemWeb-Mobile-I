<?php
    //pembuatan variabel array dengan isi datanya
    $nmkeluarga= ["Wuliam", "Yurni", "Enni Teresia", "Efta Fila","Eka Triwahyuno","Elwineri Prihatin","Elsan Pentanugraha"];
    
    //function untuk menghitung huruf vokal yang ada pada array
    function hitung_vokal($kalimat) {
        $a = substr_count($kalimat, 'a');
        $i = substr_count($kalimat, 'i');
        $u = substr_count($kalimat, 'u');
        $e = substr_count($kalimat, 'e');
        $o = substr_count($kalimat, 'o');
        $A = substr_count($kalimat, 'A');
        $I = substr_count($kalimat, 'I');
        $U = substr_count($kalimat, 'U');
        $E = substr_count($kalimat, 'E');
        $O = substr_count($kalimat, 'O');
  
        $count = ($a+$i+$u+$e+$o+$A+$I+$U+$E+$O);
  
        return $count;
      }
  
    //function untuk menghitung huruf konsonan yang ada pada array
      function hitung_Konsonan($kalimat) {
        $jumlah = strlen($kalimat)-substr_count($kalimat, ' ');
        $a = substr_count($kalimat, 'a');
        $i = substr_count($kalimat, 'i');
        $u = substr_count($kalimat, 'u');
        $e = substr_count($kalimat, 'e');
        $o = substr_count($kalimat, 'o');
        $A = substr_count($kalimat, 'A');
        $I = substr_count($kalimat, 'I');
        $U = substr_count($kalimat, 'U');
        $E = substr_count($kalimat, 'E');
        $O = substr_count($kalimat, 'O');
  
        $count = $jumlah - ($a+$i+$u+$e+$o+$A+$I+$U+$E+$O);
  
        return $count;
    }

    function jumlahTanpaSpasi($kalimat){
        return strlen($kalimat) - substr_count($kalimat, ' ');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Praktikum PemWeb&Mobile I</title>
        <style>
          /* style header yang digunakan pada web */
          header{
	          background: lightblue;
	          color: black;
	          padding-top: 20px;
	          min-height: 70px;
	          border-bottom: black 3px solid;
	          text-align: center;
	          position: relative;
          }
          
          /* style body yang digunakan pada web */
          body{
            font-size: 20px;
            font-family: sans-serif;
	          padding:0;
	          margin:0;
	          background-color: white;
          }
        </style>
    </head>
    <body>
        <header>
            <h2>Daftar Nama Anggota Keluarga</h2>
        </header>
        <?php
       echo "</br>";
        ?>
        <?php foreach ($nmkeluarga as $name) :  ?>
            <?php 
                echo "Nama            : ". $name."<br>";
                echo "Jumlah Huruf    : ". jumlahTanpaSpasi($name)."<br>";
                echo "Jumlah Kata     : ". str_word_count($name)."<br>";
                echo "Kebalikan Nama  : ". strrev($name)."<br>";
                echo "Huruf Vokal     : ". hitung_vokal($name). "</br>";
                echo "Huruf Konsonan  : ". hitung_konsonan($name). "</br>"; 
                echo "</br>";
            ?>

        <?php endforeach; ?>
  </body>
</html>