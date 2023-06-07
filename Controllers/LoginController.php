<?php
    include("../Services/PersonService.php");
    if($_SERVER["REQUEST_METHOD"] == 'GET'){
        require_once "../Views/login.php";
    }
    if($_SERVER["REQUEST_METHOD"]== 'POST'){
        $person_service;
        if( isset($_POST["email"]) && isset($_POST["password"])){
            $person_service = new PersonService();
            $usuario = $person_service->findUserByEmail($_POST["email"]);
            if(!$usuario){
                echo "No se encontro al usuario";
            }
            else{
                echo "Usuario Encontrado";
                echo print_r($usuario);
            }
        }
        session_start();
        
    }
    
?>