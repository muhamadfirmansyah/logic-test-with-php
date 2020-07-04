<?php

// Tugas Logika 1: Perfect Two 💖
// Level: Easy
// Diberikan array berisi n integer. Berikan index dari kedua angka yang jika dijumlahkan bisa
// menjadi sama dengan target yang diberikan.
// Asumsikan bahwa semua input ini akan memberikan 1 solusi saja. Jangan mengulang angka
// yang sama!

$array = [2,7,11,15];
echo "Please input the number : ";
$inputNumber = trim(fgets(STDIN));

$output = [];
for ($i=0; $i < count($array); $i++) { 
    for ($x=0; $x < count($array); $x++) { 
        $jumlahSementara = $array[$i] + $array[$x];
        if ($inputNumber == $jumlahSementara) {
            $output[] = "[$i, $x]";
        }
    }
}

if (!$output) {
    echo "Output : <no way> \n";
} else{
    echo "Output : $output[0] \n";
}
