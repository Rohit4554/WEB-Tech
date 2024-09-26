<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['num1']) && isset($_GET['num2'])) 
{
    $n1 = intval($_GET['num1']);
    $n2 = intval($_GET['num2']);

    function mod($n1, $n2) 
    {
        if ($n2 == 0) 
        {
            return "undefined (division by zero)";
        }
        return $n1 % $n2;
    }

    function power($n1, $n2) 
    {
        return pow($n1, $n2);
    }

    function firstnsum($n1) 
    {
        return ($n1 * ($n1 + 1) / 2);
    }

    function factorial($n2) 
    {
        $f = 1;
        for ($i = 1; $i <= $n2; $i++) 
        {
            $f *= $i;
        }
        return $f;
    }

    // Output the results
    echo "Mod of $n1 and $n2 is: ".mod($n1, $n2) . "<br>";
    echo "Power of $n1 raised to $n2 is: ".power($n1, $n2) . "<br>";
    echo "Sum of first $n1 numbers is: ".firstnsum($n1) . "<br>";
    echo "Factorial of $n2 is: ".factorial($n2) . "<br>";
} else {
    // Display the form if the numbers are not set or the form hasn't been submitted yet
    echo '
    <form action="" method="GET">
        <label for="num1">First Number:</label>
        <input type="text" id="num1" name="num1" required><br><br>
        <label for="num2">Second Number:</label>
        <input type="text" id="num2" name="num2" required><br><br>
        <input type="submit" value="Submit">
    </form>';
}
?>




