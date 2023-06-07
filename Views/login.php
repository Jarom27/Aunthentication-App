<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <form action="login" method="post" class="card border border-black p-4" style="width:20rem">
            <h2>Log in</h2>
            <input class="form-control" type="email" name="email" placeholder="Email">
            <input class="form-control" type="password" name="password" id="" placeholder="Password">
            <input class="btn btn-primary" type="submit" value="Log in">
            <a href="signup">Register</a>
        </form>
    </div>
    
</body>
</html>