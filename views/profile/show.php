<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <?php include("bootstrap.php")?>
</head>
<body>
    <header>

    </header>
    <main class="h-100% container d-flex flex-column justify-content-center align-items-center">
        <div class="text-center">
            <h1>Personal info</h1>
            <p>Basic info, like your name and photo</p>
        </div>
        <div class="card d-flex flex-column" style="width:846px;">
            <div class="w-100 d-flex justify-content-between px-5">
                <div class="d-flex flex-column">
                    <h2>Profile</h2>
                    <p>Some info may be visible to other people</p>
                </div>
                <div class="d-flex align-items-center">
                    <button class="btn border px-5 rounded-pill">Edit</button>
                </div>
            </div>
            <div class="px-5">
                <div class="row">
                    <div class="col">
                        <p>Photo</p>
                    </div>
                    <div class="col-8">
                        <img style="width: 72px; height: 72px">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Name</p>
                    </div>
                    <div class="col-8">
                        <p>Xan Neal</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Bio</p>
                    </div>
                    <div class="col-8">
                        <p>I am a software developer and a big fan of devchallenges...</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Phone</p>
                    </div>
                    <div class="col-8">
                        <p>908249274292</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Email</p>
                    </div>
                    <div class="col-8">
                        <p>xanthe.neal@gmail.com</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Password</p>
                    </div>
                    <div class="col-8">
                        <p>************</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>