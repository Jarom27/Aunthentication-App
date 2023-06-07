<?php
    class Person{
        private $id;
        private $name = null;
        private $phone = null;
        private $email;
        private $password;
        private $bio = null;
        private $photo;
        
        function __construct($id , $email, $password)
        {
            $this->id = $id;
            $this->email = $email;
            $this->password = $password;
        }
        function getId(){
            return $this->id;
        }
        function getEmail(){
            return $this->email;
        }


    }
    
    


?>