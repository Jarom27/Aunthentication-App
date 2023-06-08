<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("bootstrap.php")?>
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <form class="card d-flex flex-column justify-content-center text-center px-5 py-5 rounded rounded-4" style="width: 475px;">
            <div class="d-flex">
                <img src="../public/devchallenges.svg" alt="">
            </div>
            <div class="text-start" style="width: 85%;">
                <h2 class="fs-4">Join thousands of learners from around the world </h2>
                <p>Master web development by making real-life projects. There are multiple paths for you to choose</p>
            </div>
            <div class="d-flex flex-column row-gap-3">
                <div>
                    <input class="form-control" type="email" placeholder="Email">
                </div>
                <div>
                    <input class="form-control" type="password" placeholder="Password">
                </div>
            </div>
            <input class="btn btn-primary mt-4" type="submit" value="Start coding now ">
            <p>or continue with these social profile</p>
            <div class="d-flex">

            </div>
            <p>Already a member? <a class="text-decoration-none" href="/login">Login</a></p>
        </form>
    </div>
</body>
</html>