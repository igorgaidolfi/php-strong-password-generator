<?php
    if(isset($_GET['password'])){
        function pwdGenerator($pwd_length){
            $letters= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $numbers= '0123456789';
            $signs= '!$%&()=.?';
            $pwd= '';
        
            while(strlen($pwd)<$pwd_length){
                if(strlen($pwd) < $pwd_length){
                    $pwd.= substr(str_shuffle($letters),0,1);
                }
                if(strlen($pwd) < $pwd_length){
                    $pwd.=rand(0,9);
                }
                if(strlen($pwd) >= ($pwd_length/2) && strlen($pwd) < $pwd_length){
                    $pwd.=substr(str_shuffle($signs),0,1);
                }
                str_shuffle($pwd);
            }
            return $pwd;
        }
    }
?>