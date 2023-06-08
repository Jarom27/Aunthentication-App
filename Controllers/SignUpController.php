<?php
    include("../Services/PersonService.php");
    include("../Models/Person.php");
    session_start();
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        require_once "../Views/signup.php";
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo "Hola desde post";
        $password = $_POST["password"];
        $pass_hasheada_por_clave = hash_hmac("sha256",$password,getenv("KEY"));
        $pass_haseada = password_hash($pass_hasheada_por_clave, PASSWORD_BCRYPT);
        $person = new Person($_POST["email"],$pass_haseada);

        //Añadimos al servicio
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