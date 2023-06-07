<?php
    class PersonService{
        private $conexion;
        private $statement;
        function __construct()
        {   
            $db_adapter = getenv("DB_CONECTION");
            $db_host = getenv("DDBB_HOST");
            $db_name = getenv("DB_NAME");
            $db_user = getenv("DB_USER");
            $db_pass = getenv("DB_PASSWORD");
            $dns = "$db_adapter:dbname=$db_name;host=$db_host";
            $this->conexion = new PDO($dns,$db_user,$db_pass);
        }
        function addUser(Person $person){
            $status = false;
            if($this->findUserByEmail($person->getEmail()!=false)){
                return $status;
            }
            
            
            $status = true;

        }
        function findUserbyId($id){
            $this->statement = $this->conexion->prepare("SELECT * from users WHERE id = :id LIMIT 1");
            $this->statement->execute([":id" => $id]);
        }
        function findUserByEmail($email){
            $this->statement = $this->conexion->prepare("SELECT * from users WHERE email = :email LIMIT 1");
            $this->statement->execute([":email" => $email]);
            return $this->statement->fetch();
        }
    }

?>