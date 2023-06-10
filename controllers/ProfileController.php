<?php
    session_start();
    if(!isset($_SESSION["email"])){
        header("location: /login");
    }

    require_once "../services/UserService.php";
    require_once "../models/User.php";
    require_once "../services/Crypt.php";

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["mode"])) {
        $userService = new UserService();
        $user = $userService->findUserById($_GET["id"]);
        require_once "../views/profile/edit.php";
    }
    else if($_SERVER["REQUEST_METHOD"] == "GET"){
        $userService = new UserService();
        $user = $userService->findUserById($_GET["id"]);
        require_once "../views/profile/show.php";
    }
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["PUT"])){
        $userService = new UserService();
        $id = $userService->getUserId($_SESSION["email"]);
        $user = new User();
        $user->setId($id);
        $user->setBio($_POST["bio"]);
        $user->setEmail($_POST["email"]);
        $user->setPassword($_POST["password"]);
        $user->setName($_POST["name"]);
        $user->setPhone($_POST["phone"]);
        $isUpdated = $userService->updateUser($id,$user);
        if($isUpdated){
            $_SESSION["email"] = $userService->getUserEmail($id);
            echo "Usuario Actualizado exitosamente";
        }
        else{
            echo "No se pudo actualizar al usuario";
        }
    }
    if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["logout"])){
        session_destroy();
        header("Location: /login");
    }
    
    

?>