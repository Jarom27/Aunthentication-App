<?php
    include("../Services/PersonService.php");
    include("../Models/Person.php");
    include("../Services/PasswordCrypt.php");
    session_start();
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        require_once "../Views/signup.php";
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo "Hola desde post";
        $pass_haseada = PasswordCrypt::encriptar($_POST["password"]);
        $person = new Person($_POST["email"],$pass_haseada);

        $personService = new PersonService();
        $status_service = $personService->addUser($person);
        if($status_service){
            echo "Usuario registrado exitosamente";
        }
        else{
            echo "No se pudo registrar el usuario";
        }
        
    }   

?>