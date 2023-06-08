<?php
    class Person{
        private $id;
        private $name = null;
        private $phone = null;
        private $email;
        private $password;
        private $bio = null;
        private $photo;
        
        function __construct($email, $password)
        {
            $this->id = bin2hex(openssl_random_pseudo_bytes(10));
            $this->email = $email;
            $this->password = $password;
        }
        function getId(){
            return $this->id;
        }
        function getEmail(){
            return $this->email;
        }
        function getPassword(){
            return $this->password;
        }


    }
    
    


?>