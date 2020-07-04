<?php

// Tugas Logika 6: Angka ajaib
// Seorang ahli matematika bernama Kaprekars menemukan: misal ada 4 digit angka (yang terdiri
// dari minimal 2 angka berbeda) dan anda lakukan serangkaian operasi berulang, anda akan
// menghasilkan angka ajaib 6174. Operasi tersebut antara lain:

// Buatlah 2 angka dari hasil mengurutkan 2 angka tersebut naik dan turun (misalkan: input
// 3124 menjadi angka 1234 dan 4321)
// Cari selisih antara kedua angka tersebut (dalam kasus ini 4321 - 1234 = 3087)
// Ulangi langkah tersebut (dalam kasus ini, 8730 - 378 = 8352)
// Jika anda terus ulangi langkah ini, anda akan mendapatkan angka 6174; dalam kasus ini:
// (1) 4321-1234=3087; (2) 8730 - 0378 = 8352; (3) 8532-2358=6174

// Dalam kasus ini, maka konstanta kaprekars dari 3124 adalah: 3.
// Carilah konstanta kaprekars dari input 4 digit angka!

// Input 3214
// 4321 - 1234 = 3087
// 3087 - 378 = 8352
// 8532 - 2358 = 6174
// 

echo "Insert 4 numbers : ";
$number = trim(fgets(STDIN));

$hasil = countD(str_split($number), 0);
echo "$hasil\n";

function countD($number, $cons){

    asort($number);
    $awal = "";
    foreach($number as $x => $x_value){
        $awal .= $x_value;
    }

    arsort($number);
    $akhir = "";
    foreach ($number as $y => $y_value) {
        $akhir .= $y_value;
    }
    
    
    $number = $akhir - $awal;
    $cons++;

    if ($number == 6174) {
        return "$cons";
    }
    
    return countD(str_split($number), $cons);
}