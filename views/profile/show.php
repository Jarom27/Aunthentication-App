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
    <?php include "header.php"?>
    <main class="h-100% container d-flex flex-column justify-content-center align-items-center">
        <div class="text-center">
            <h1>Personal info</h1>
            <p>Basic info, like your name and photo</p>
        </div>
        <div class="card d-flex flex-column profile-data">
            <div class="w-100 d-flex justify-content-between px-5">
                <div class="d-flex flex-column">
                    <h2>Profile</h2>
                    <p>Some info may be visible to other people</p>
                </div>
                <div class="d-flex align-items-center">
                    <a href=<?php echo "/profile/".$user->getId()."/edit"?> class="btn border px-5 rounded-pill">Edit</a>
                </div>
            </div>
            <div class="px-5">
                <div class="row">
                    <div class="col">
                        <p>Photo</p>
                    </div>
                    <div class="col-8">
                        <img src=<?php echo $user->getPhoto() == "" ? "../public/devchallenges.png" :  $user->getPhoto() ?> class="img-profile">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Name</p>
                    </div>
                    <div class="col-8">
                        <p><?php echo $user->getName() ? $user->getName()  : "Vacio"?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Bio</p>
                    </div>
                    <div class="col-8">
                        <p><?php echo $user->getBio() ? $user->getBio()  : "Vacio"?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Phone</p>
                    </div>
                    <div class="col-8">
                        <p><?php echo $user->getPhone() ? $user->getPhone()  : "Vacio"?></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Email</p>
                    </div>
                    <div class="col-8">
                        <p><?php echo $user->getEmail() ? $user->getEmail()  : "Vacio"?></p>
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