<?php
echo "Conditionals", "<br/>";
$age = 30;
if ($age >= 18) {
    echo "You are an adult";
} else {
    echo "You are a minor";
}
echo "<br/>";
date_default_timezone_set('Asia/Ho_Chi_Minh'); // Thiết lập múi giờ cho Việt Nam
$date_time = date("H");
echo $date_time;
