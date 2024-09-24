<?php
echo "Super golbals in PHP<br/>";
// echo $_GET['name'] . '<br/>' ?? 'empty';
// echo $_GET['age'] ?? 'empty';
echo htmlspecialchars($_POST['email'] ?? 'empty');
echo '<br/>';
echo htmlspecialchars($_POST['password'] ?? 'empty');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div>
            <label for="email" style="display: block;">Email</label>
            <input type="email" name="email" id="email" />
        </div>
        <div>
            <label for="password" style="display: block;">Password</label>
            <input type="password" name="password" id="password" />
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>