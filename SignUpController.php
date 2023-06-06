<?php
    session_start();
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo "Hola desde post";
        $email = $_POST["email"];
        $password = $_POST["password"];
        try{
            $conexion = new PDO("mysql:dbname=miniprojecto;host=localhost","root","");
            $statement = $conexion->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
            $statement->execute([':email'=>$email]);
            if($statement->fetch() != false){
                echo "Usuario ya existe";
            }else{
                $statement = $conexion->prepare("INSERT INTO users(email,password) VALUES(:email, :password)");
                $statement->execute([":email"=>$email,":password" => $password]);
            }
        }catch(PDOException $error){
            echo "Ocurrió un error: ".$error;
        }
        
        
    }   

?>