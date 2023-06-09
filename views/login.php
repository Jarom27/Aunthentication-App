<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include("bootstrap.php")?>
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <form action="/login" method="post" class="card d-flex flex-column justify-content-center text-center px-5 py-5 rounded rounded-4" style="width: 475px;">
            <div class="d-flex">
                <img src="../public/devchallenges.svg" alt="">
            </div>
            <div class="text-start" style="width: 85%;">
                <h2 class="fs-4">Login</h2>
                
            </div>
            <div class="d-flex flex-column row-gap-3">
                <div>
                    <input class="form-control" type="email" placeholder="Email" name="email" required>
                </div>
                <div>
                    <input class="form-control" type="password" placeholder="Password" name="password" required>
                </div>
            </div>
            <input class="btn btn-primary mt-4" type="submit" value="Login">
            <p>or continue with these social profile</p>
            <div class="d-flex">

            </div>
            <p>Don’t have an account yet? <a class="text-decoration-none" href="/signup">Register</a></p>
        </form>
    </div>
</body>
</html>