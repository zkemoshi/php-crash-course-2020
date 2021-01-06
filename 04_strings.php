<?php

// Create simple string
$name = 'Moshi';
$string = 'Hello ' . $name;
$string2 = "Hello  I am $name and am 28";

echo $string . '<br>';
echo $string2 . '<br>';

// String concatenation

echo 'Hello' . ' World' . ' and PHP ' . '<br>';

// String functions
$string = "Hello  World    ";

echo "1 - " . strlen($string) . '<br>';
echo "2 - " . trim($string) . '<br>';
echo "3 - " . ltrim($string) . '<br>';
echo "3 - " . rtrim($string) . '<br>';
echo "3 - " . str_word_count($string) . '<br>';
echo "3 - " . strrev($string) . '<br>';
echo "3 - " . strtoupper($string) . '<br>';
echo "3 - " . strtolower($string) . '<br>';
echo "3 - " . ucfirst($string) . '<br>';
echo "3 - " . lcfirst($string) . '<br>';
echo "3 - " . strpos($string, 'world') . '<br>';
echo "3 - " . stripos($string, 'world') . '<br>';
echo "3 - " . ucwords('hello world') . '<br>';



// Multiline text and line breaks

// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php