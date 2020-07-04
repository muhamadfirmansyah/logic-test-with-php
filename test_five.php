<?php

// Tugas Logika 5: Jual-beli Saham
// Harga saham tiap hari diberikan dalam sebuah array.
// Carilah profit tertinggi yang bisa didapatkan dari membeli dan menjual. Hari beli < Hari Jual.
// Algoritma cukup untuk mencari 1 kali pembelian dan 1 kali penjualan

// Sample Input:
// [5, 6, 15, 3, 10,  22, 15]
// Sample Output:
// 19

// Sample Input:
// [10, 15, 8, 7, 14]
// Sample Output:
// 7

// Sample Input:
// [100, 90, 80, 75, 65]
// Sample Output:
// Harga selalu turun

echo "Silahkan masukan array : ";
$string = trim(fgets(STDIN));
$string = trim($string, '[]');
$array = explode(", ", $string);

$sum = [];
for ($i=0; $i < count($array); $i++) { 
    for ($x=$i + 1; $x < count($array); $x++) { 
        $sum[] = $array[$x] - $array[$i];
    }
}

if (max($sum) < 0) {
    echo "Harga selalu turun";
} else{
    echo max($sum);
}

echo "\n";