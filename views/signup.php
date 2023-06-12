<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <?php include("bootstrap.php")?>
</head>
<body>
    <div id="form-container" class="container vh-100 d-flex justify-content-center align-items-md-center">
        <form action="/signup" method="post" class="card d-flex flex-column justify-content-md-center justify-content-start text-center px-5 py-5 rounded rounded-4" style="width: 475px;">
            <div class="d-flex">
                <img src="../public/devchallenges.svg" alt="">
            </div>
            <div class="text-start" style="width: 85%;">
                <h2 class="fs-4">Join thousands of learners from around the world </h2>
                <p>Master web development by making real-life projects. There are multiple paths for you to choose</p>
            </div>
            <div class="d-flex flex-column row-gap-3">
                <div>
                    <input name="email" class="form-control" type="email" placeholder="Email" required>
                </div>
                <div>
                    <input name="password" class="form-control" type="password" placeholder="Password" required>
                </div>
            </div>
            <input name="enviar" class="btn btn-primary mt-4" type="submit" value="Start coding now ">
            <p>or continue with these social profile</p>
            <div class="d-flex">

            </div>
            <p>Already a member? <a class="text-decoration-none" href="/login">Login</a></p>
        </form>
    </div>
</body>
</html>