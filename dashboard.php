<?php
session_start();
if (isset($_SESSION['email'])) {
    echo "Authenticated";
    echo "email: " . $_SESSION['email'];
} else {
    echo "guest";
    echo "<br/><a href='/logout.php'>Logout</a>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Dashboard page</h1>
</body>

</html>