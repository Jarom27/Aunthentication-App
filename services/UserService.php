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
        function getUserEmail($id){
            $result = $this->dbservice->selectUserById($id);
            return $result->getEmail();
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
        function getPassword($id){
            $result = $this->dbservice->selectUserById($id);
            return $result->getPassword();
        }
        function findUserById($id){
            $result = $this->dbservice->selectUserById($id);
            if($result == null){
                return false;
            }
            return $result;
        }
        
        //Update 
        function updateUser($id,User $userToUpdate){
            $user = $this->findUserById($id);
            $user->setName($userToUpdate->getName() == "" ? $user->getName() :  $userToUpdate->getName());
            $user->setEmail($userToUpdate->getEmail() == "" ? $user->getEmail() : $userToUpdate->getEmail());
            $password = $userToUpdate->getPassword() == "" ? $user->getPassword() : Crypt::encrypt($userToUpdate->getPassword());
            $user->setPassword($password);
            $user->setPhone($userToUpdate->getPhone() == "" ? $user->getPhone() : $userToUpdate->getPhone());
            $user->setBio($userToUpdate->getBio() == "" ? $user->getBio() : $userToUpdate->getBio());
            $status = $this->dbservice->updateUser($user);
            return $status;
        }

        //Delete 
        function deleteUserById($id){

        }
    
    }
    

?>