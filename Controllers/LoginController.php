<?php
    include("../Services/PersonService.php");
    include("../Services/PasswordCrypt.php");
    if($_SERVER["REQUEST_METHOD"] == 'GET'){
        require_once "../Views/login.php";
    }
    if($_SERVER["REQUEST_METHOD"]== 'POST'){
        $person_service;
        if( isset($_POST["email"]) && isset($_POST["password"])){
            $person_service = new PersonService();
            $usuario = $person_service->findUserByEmail($_POST["email"]);
            $pass = PasswordCrypt::encriptar($_POST["password"]);
            if(!$usuario){
                echo "No se encontro al usuario";
            }
            else{
                if(password_verify($pass,$usuario->getPassword())){
                    echo "Login exitoso";
                }
                else{
                    print_r($usuario);
                }
            }
        }
        session_start();
        
    }
    
?>