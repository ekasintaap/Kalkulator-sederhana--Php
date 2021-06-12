<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana | </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php
// deklarasi variabel
$bil1 = 9 ;
$bil2 = 3 ;

echo " bilangan 1: $bil1";
echo "<br>";
echo " bilangan 2: $bil2";
echo "<br>";
echo "==========================";

//fungsi untuk penjumlahan
function penjumlahan($bil1, $bil2){
    $tambah= $bil1 + $bil2;
    return $tambah;
}
//fungsi untuk pengurangan
function pengurangan($bil1, $bil2){
    $kurang= $bil1 - $bil2;
    return $kurang;
}
//fungsi untuk perkalian
function perkalian($bil1, $bil2){
    $kali= $bil1 * $bil2;
    return $kali;
}
//fungsi untuk pembagian
function pembagian($bil1, $bil2){
    $bagi= $bil1 / $bil2;
    return $bagi;
}

echo "<br>";
echo " hasil penjumlahan adalah :" . penjumlahan($bil1, $bil2);//memanggil fungsi penjumlahan
echo "<br>";
echo " hasil pengurangan adalah :" . pengurangan($bil1, $bil2);//memanggil fungsi pengurangan
echo "<br>";
echo " hasil perkalian adalah :" . perkalian($bil1, $bil2);//memanggil fungsi perkalian
echo "<br>";
echo " hasil pembagian adalah :" . pembagian($bil1, $bil2);//memanggil fungsi pembagian
 ?>

</body>
</html>

