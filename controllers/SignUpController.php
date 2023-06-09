<?php
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        require_once "../views/signup.php";
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        require_once "../services/UserService.php";
        if(isset($_POST["email"]) && isset($_POST["password"])){
            $userService = new UserService();
            $status = $userService->createUser($_POST["email"],$_POST["password"]);
            if($status){
                echo "usuario creado exitosamente";
                header("location: /login");
            }
            else{
                echo "El usuario ya existe";
            }
            
        }
        else{
            echo "Llene todos los campos";
        }
    }
?>