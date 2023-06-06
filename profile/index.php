<?php
    session_start();
    if(isset($_SESSION["email"])){
        header("location: show.php");
    }
    else{
        header("location: ../index.php");
    }
    
?>