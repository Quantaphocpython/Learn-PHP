<?php
echo "<h1>Arrays</h1>";
$some_numbers = [1, 2, 3, 4];
$colors = [
    3 => 'red',
    5 => "green",
    7 => 'yellow'
];

$hex_colors = [
    'red' => '#FF0000',
    'green' => '#00FF00',
    'yellow' => '#FFFF00'
];

$students = [
    [
        'full_name' => 'Trần Hoàng Quân',
        'age' => '18',
        'email' => 'quan@gmail.com'
    ],
    [
        'full_name' => 'Nguyễn Quân',
        'age' => '18',
        'email' => 'quan@gmail.com'
    ],
    [
        'full_name' => 'Phạm Quân',
        'age' => '18',
        'email' => 'quan@gmail.com'
    ],
];

print_r($students);
echo $students[1]['email'];
echo json_encode($students);