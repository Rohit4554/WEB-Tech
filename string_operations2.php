<?php
if (isset($_POST['inputString']) && isset($_POST['operation'])) 
{
    $inputString = $_POST['inputString'];
    $operation = $_POST['operation'];

    // a. Function to find the length of the string without built-in functions
    function findStringLength($str) 
    {
        $length = 0;
        while (isset($str[$length])) 
        {
            $length++;
        }
        return $length;
    }

    // b. Function to count vowels (a, e, i, o, u)
    function countVowels($str) 
    {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $count = 0;
        for ($i = 0; isset($str[$i]); $i++) 
        {
            if (in_array($str[$i], $vowels)) 
            {
                $count++;
            }
        }
        return $count;
    }

    // Switch to handle different operations
    switch ($operation) 
    {
        case 'length':
            echo "Length of the string is: " . findStringLength($inputString);
            break;

        case 'vowels':
            echo "Total number of vowels: " . countVowels($inputString);
            break;

        case 'tolowercase':
            $lower = strtolower($inputString);
            $titleCase = ucwords($lower);
            echo "Lowercase: " . $lower . "<br>";
            echo "Title Case: " . $titleCase;
            break;

        case 'pad':
            echo "Padded string: ***" . $inputString . "***";
            break;

        case 'trim':
            echo "String after removing leading whitespaces: '" . ltrim($inputString) . "'";
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
