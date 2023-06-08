<?php
    class PasswordCrypt{
        static function encriptar($password){
            $pass_hasheada_por_clave = hash_hmac("sha256",$password,getenv("KEY"));
            $pass_haseada = password_hash($pass_hasheada_por_clave, PASSWORD_BCRYPT);
            return $pass_haseada;
        }
    }

?>