<?php 
    include_once "../models/User.php";
    include "DbService.php";
    include "Crypt.php";
    class UserService 
    {
        private $dbservice;

        function __construct()
        {
            $this->dbservice = new DBService();
        }
        //Create
        function createUser($email,$password):bool{
            if($this->findUserByEmail($email) != false){
                return false;
            }
            $user = new User();
            $id = Crypt::assignUUID();
            $pass_hashed = Crypt::encrypt($password);
            
            $user->setId($id);
            $user->setEmail($email);
            $user->setPassword($pass_hashed);

            $this->dbservice->insertUser($user);
            return true;
        }
        //Read
        function findUserByEmail($email){
            $result = $this->dbservice->selectUserByEmail($email);
            if($result == null){
                return false;
            }
            return true;
        }
        function getUserId($email){
            $result = $this->dbservice->selectUserByEmail($email);
            return $result->getId();
        }
        function loginUser($email,$user_password):bool{
            $password = $this->dbservice->getPasswordFromDB($email);
            if($password == false){
                return false;
            }
            if(Crypt::verifyPassword($user_password,$password)){
                return true;
            }
            return false;
        }
        function findUserById($id){
            $result = $this->dbservice->selectUserById($id);
            if($result == null){
                return false;
            }
            return $result;
        }
        
        //Update 
        function updateUser($id){

        }

        //Delete 
        function deleteUserById($id){

        }
    
    }
    

?>