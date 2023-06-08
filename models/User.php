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
        function getName(){
            return $this->name;
        }
        function getEmail(){
            return $this->email;
        }
        function getPassword(){
            return $this->password;
        }
        function getBio(){
            return $this->bio;
        }
        function getPhoto(){
            return $this->photo;
        }

    }
?>