<?php

//What is an Array


// Create array
//$fruit = array('banana','Ndizi','orage');
$fruits = ['Banana','Apple','Orange'];

// Print the whole array
echo '<pre>';
var_dump($fruits);
print_r($fruits);
echo '</pre>';

// Get element by index
echo $fruits[2];

// Set element by index
$fruits[1] = 'Mangos';
echo '<pre>';
var_dump($fruits);
print_r($fruits);
echo '</pre>';

// Check if array has element at index 2
if (isset($fruits[4])){
    echo 'true';
}
// Append element
$fruits[] = 'Nanasi';

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits);


// Add element at the end of the array

// Remove element from the end of the array

// Add element at the beginning of the array

// Remove element from the beginning of the array

// Split the string into an array

// Combine array elements into string

// Check if element exist in the array

// Search element index in the array

// Merge two arrays

// Sorting of array (Reverse order also)


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays