<?php
// a. Function to find the length of the string without using built-in functions
function findStringLength($str) {
    $length = 0;
    while (isset($str[$length])) {
        $length++;
    }
    return $length;
}

// b. Function to count the total number of vowels (a, e, i, o, u)
function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
    for ($i = 0; isset($str[$i]); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

// d. Function to pad the string with '*' from left and right
function padString($str) {
    return "***" . $str . "***";
}

// e. Function to remove leading whitespaces from the string
function trimLeadingSpaces($str) {
    return ltrim($str);
}
?>
