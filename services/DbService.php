<?php
    include_once "../models/User.php";
    class DBService{
        private $dns;
        private $host;
        private $dbname;
        private $db_user;
        private $db_password;
        private $connection;

        function __construct(){
            $this->db_user = getenv("DB_USER");
            $this->db_password = getenv("DB_PASSWORD");
            $this->dbname = getenv("DB_NAME");
            $this->host = getenv("DDBB_HOST");
            $this->dns = "".getenv("DB_CONECTION").":dbname=".$this->dbname.";"."host=".$this->host;
            try{
                $this->connection = new PDO($this->dns,$this->db_user,$this->db_password);
            }
            catch(PDOException){
                
            }
        }
        function insertUser(User $user){
            $statement = $this->connection->prepare("INSERT INTO users(id,email,password) VALUES(:id,:email,:password)");
            $statement->execute([
                ":id" => $user->getId(),
                ":email" => $user->getEmail(),
                ":password" => $user->getPassword()
            ]);
        }
        function selectUserById($id){
            $statement = $this->connection->prepare("SELECT * FROM users WHERE id = :id LIMIT 1");
            $statement->execute([":id" => $id]);
            $result = $statement->fetch();
            
            if($result == false){
                return null;
            }

            $user = new User();
            $user->setId($result["id"]);
            $user->setEmail($result["email"]);
            $user->setPassword($result["password"]);
            $user->setName($result["name"]);
            $user->setBio($result["bio"]);
            $user->setPhoto($result["photo"]);

            return $user;
        }
        function selectUserByEmail($email) {
            $statement = $this->connection->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
            $statement->execute([":email" => $email]);
            $result = $statement->fetch();
            //Verifica si hubo resultado
            if($result == false){
                return null;
            }

            $user = new User();
            $user->setId($result["id"]);
            $user->setEmail($result["email"]);
            $user->setPassword($result["password"]);
            $user->setName($result["name"]);
            $user->setBio($result["bio"]);
            $user->setPhoto($result["photo"]);

            return $user;
            
        }
        function getPasswordFromDB($email){
            $statement = $this->connection->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
            $statement->execute([":email" => $email]);
            $result = $statement->fetch();
            return $result["password"];
        }
    }
?>