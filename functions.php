<?php
echo 'Functions <br/>';
// function sayHello($hello = "Hello")
// {
//     echo $hello;
// }
// sayHello();

$sum = function ($a, $b) {
    return $a + $b;
};

$multiply = fn($a, $b) => $a * $b;

echo $multiply(3, 4);
