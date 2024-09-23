<?php
// for ($i = 0; $i <= 10; $i++) {
//     echo "i: $i<br/>";
// }
// $students = [
//     "Quân",
//     "Hương",
//     "Oanh"
// ];
// foreach ($students as $i => $student) {
//     echo $i . ': ' . $student . "<br/>";
// }
$cars = [
    "a" => "honda",
    "b" => "mesedes"
];

foreach ($cars as $k => $car) {
    echo $k . ': ' . $cars[$k] . "<br/>";
}
