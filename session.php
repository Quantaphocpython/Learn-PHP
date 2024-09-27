<?php
echo "Session in PHP<br/>";
session_start();
if (isset($_POST['submit'])) { // kiểm tra xem đã bấm submit chưa
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = $_POST['password'];
    if ($email == 'quan123@gmail.com' && $password = '123456') {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        header('Location: ./dashboard.php');
    } else {
        echo "Incorrect email/password";
    }
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
    <h1>Login to your account</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div>
            <label for="email" style="display: block;">Email</label>
            <input type="email" name="email" id="email" />
        </div>
        <div>
            <label for="password" style="display: block;">Password</label>
            <input type="password" name="password" id="password" />
        </div>
        <input type="submit" name="submit" value="submit" />
    </form>
</body>

</html>