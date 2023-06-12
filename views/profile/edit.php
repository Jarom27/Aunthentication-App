<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <?php include("bootstrap.php") ?>
</head>
<body>
    <?php include("header.php")?>
    <main class="container d-flex h-100 w-100 justify-content-center align-items-center ">
        <form id="put" action=<?php echo "/profile/".$user->getId()?> method="post" class="card profile-data" enctype="multipart/form-data">
            <div class="card-title">
                <h2>Change Info</h2>
                <p>Changes will be reflected to every services</p>
            </div>
            <div class="d-flex flex-column container px-5 row-gap-3">
                
                <div class="d-flex columng-gap-3">
                    <img src=<?php echo $user->getPhoto() == "" ? "../public/devchallenges.png" : "../../assets/".$user->getPhoto() ?> class="img-profile">
                    <input formaction="put" id="image" class="" name="photo" type="file">
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Enter your name" name="name">
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Enter your Bio" name= "bio">
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Enter your phone" name="phone">
                </div>
                <div>
                    <input type="email" class="form-control" placeholder="Enter your Email" name="email">
                </div>
                <div>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password">
                </div>
                <input type="submit" value="Enviar" name="PUT">
            </div>
            
        </form>
    </main>
</body>
</html>