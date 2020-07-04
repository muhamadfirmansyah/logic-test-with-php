<?php

// Tugas Logika 3: Programmer IT
// Level : Medium
// We are given a string input and a array of dictionary.
// Example dictionary: ['pro', 'gram', 'merit', 'program', 'it', 'programmer']
// Find all method we can break the input string into strings inside dictionary!

// Sample Input:
// program
// Sample Output:
// pro, gram
// program

// Sample Input:
// programit
// Sample Output:
// pro, gram, it
// program, it


// Sample Input:
// programmerit
// Sample Output:
// pro, gram, merit
// program, merit
// programmer, it

// Sample Input:
// programlala
// Sample Output:
// <no way>

// ['pro', 'gram', 'merit', 'program', 'it', 'programmer']
// Sample Input:
// proletarian
// Sample Output:
// <no way>

$array = ['pro', 'gram', 'merit', 'program', 'it', 'programmer'];

echo "Please input a word : ";
$string = trim(fgets(STDIN));

$outputArray = array_filter($array, function($x) use ($string){
    return stripos($string, $x) !== false;
});

print_r($outputArray);
echo "\n";

// if (!$outputArray) {
//     echo "<no way>\n";
// } else{
//     echo implode(", ", $outputArray);
//     echo "\n";
// }