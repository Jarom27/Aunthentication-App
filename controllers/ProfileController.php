<?php
    session_start();
    if(!isset($_SESSION["email"])){
        header("location: /login");
    }

    require_once "../services/UserService.php";
    if($_SERVER["REQUEST_METHOD"] == "GET"){
        $userService = new UserService();
        $user = $userService->findUserById($_GET["id"]);
        require_once "../views/profile/show.php";
    }
    

?>