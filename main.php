<?php

// user-defined functions
function calculate($a, $b, $command): mixed {
    switch($command) {
        case 'add':
            return $a + $b;
        case 'subtract':
            return $a - $b;
        case 'product':
            return $a * $b;
        case 'quotient':
            return $a / $b;
        default:
            return "invalid operation";
    }
}

echo calculate(10, 5, 'add');
echo "\n";
echo calculate(20, 10, 'subtract');
echo "\n";
echo calculate(5, 2, 'product');
echo "\n";
echo calculate(7, 2, 'quotient');
echo "\n";

// built-in functions
$str = "web system technologies it204";
echo strlen($str);
?>
