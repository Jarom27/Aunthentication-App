<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Log in</h2>
    <form action="LoginController.php" method="post">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" id="" placeholder="Password">
        <input type="submit" value="Log in">
        <a href="/signup.php">Register</a>
    </form>
</body>
</html>