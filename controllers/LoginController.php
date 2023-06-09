<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        require_once "../views/login.php";
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include_once "../services/UserService.php";
        $userService = new UserService();
        if(isset($_POST["email"]) && isset($_POST["password"])){
            if($userService->loginUser($_POST["email"],$_POST["password"])){
                session_start();
                $_SESSION["email"] =  $_POST["email"];
                $id = $userService->getUserId($_POST["email"]);
                header("location: /profile/".$id);
            }
            else{
                echo "Contraseña incorrecta";
            }
        }
    }

?>