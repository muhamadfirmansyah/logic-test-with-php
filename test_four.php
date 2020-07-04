<?php

// Tugas Logika 4: Hasil Palindrome Terbesar
// Palindrom adalah angka yang sama jika dibaca dari kiri atau kanan (misalnya 12321, 6226, dsb).
// Saat ini diketahui bahwa hasil palindrom terbesar dari perkalian 2 bilangan 2 digit adalah 9009 = 91 * 99
// Dengan berbekal input integer n sebagai jumlah digit (asumsikan n ≤ 4), carilah palindrom terbesar dari perkalian angka n
// tersebut!

// Sample Input:
// 1
// Sample Output:
// 9

// Sample Input:
// 2
// Sample Output:
// 9009

// Sample Input:
// 3
// Sample Output:
// 906609 

echo "Insert the number : ";
$number = trim(fgets(STDIN));
for ($x=0; strlen($x) <= $number; $x++) { 
    for ($y=0; strlen($y) <= $number; $y++) { 
        if(strrev($x * $y) == $x * $y){
            $data[] = $x * $y;
        }
    }
}

echo max($data);
echo "\n";