<?php
    class User{
        private $id;
        private $name;
        private $email;
        private $password;
        private $bio;
        private $photo;

        function getId(){
            return $this->id;
        }
        function setId($id){
            $this->id = $id;
        }
        function getName(){
            return $this->name;
        }
        function setName($name){
            $this->name = $name;
        }
        function getEmail(){
            return $this->email;
        }
        function setEmail($email){
            $this->email = $email;
        }
        function getPassword(){
            return $this->password;
        }
        function setPassword($password){
            $this->password = $password;
        }
        function getBio(){
            return $this->bio;
        }
        function setBio($bio){
            $this->bio =  $bio;
        }
        function getPhoto(){
            return $this->photo;
        }
        function setPhoto($photo){
            $this->photo = $photo;
        }

    }
?>