<?php
    class Crypt{
       
        static function assignUUID(){
            return bin2hex(openssl_random_pseudo_bytes(10));
        }
        static function encrypt($password){
            $KEY = getenv("KEY");
            $password_pepper = hash_hmac("sha256",$password,$KEY);
            $password_hashed = password_hash($password_pepper, PASSWORD_ARGON2I);
            return $password_hashed;
        }
        static function verifyPassword($password,$password_hashed){
            $KEY = getenv("KEY");
            $pasword_peppered = hash_hmac("sha256",$password,$KEY);
            if(password_verify($pasword_peppered,$password_hashed)){
                return true;
            }
            return false;
        }
    }

?>