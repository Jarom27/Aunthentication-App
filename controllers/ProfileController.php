<?php
    session_start();
    if(!isset($_SESSION["email"])){
        header("location: /login");
    }

    require_once "../services/UserService.php";
    
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
        $userService->updateUser($id);
    }
    
    

?>