<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        require_once "../views/login.php";
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include_once "../services/UserService.php";
        $userService = new UserService();
        if($userService->loginUser($_POST["email"],$_POST["password"])){
            echo "Logeo exitoso";
        }
        else{
            echo "Contraseña incorrecta";
        }
    }

?>