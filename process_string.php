<?php
require 'string_functions.php';

if (isset($_POST['inputString']) && isset($_POST['operation'])) 
{
    $inputString = $_POST['inputString'];
    $operation = $_POST['operation'];

    switch ($operation) 
    {
        case 'length':
            echo "Length of the string is: " . findStringLength($inputString);
            break;

        case 'vowels':
            echo "Total number of vowels: " . countVowels($inputString);
            break;

        case 'tolowercase':
            echo "Lowercase: " . strtolower($inputString) . "<br>";
            echo "Title Case: " . ucwords(strtolower($inputString));
            break;

        case 'pad':
            echo "Padded string: " . padString($inputString);
            break;

        case 'trim':
            echo "String after removing leading whitespaces: '" . trimLeadingSpaces($inputString) . "'";
            break;

        case 'reverse':
            echo "Reversed string: " . strrev($inputString);
            break;

        default:
            echo "Invalid operation.";
            break;
    }
} else {
    echo "Please enter a string and select an operation.";
}
?>
