<?php
    session_start();
    if(isset($_SESSION["email"])){
        header("location: /profile/index.php");
    }
    else{
        header("location: signup.php");
    }


?>