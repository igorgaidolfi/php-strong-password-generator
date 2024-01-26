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
            if(strlen($pwd) < $pwd_length){
                $pwd.=substr(str_shuffle($letters),0,1);
            }
        }
        return $pwd;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Random Password Generator</title>
    </head>
    <body>
        <form action="./index.php" method="get">
            <label for="">Inserire la lunghezza della password:</label>
            <input type="text" name="password" placeholder="Lunghezza">
            <button type="submit">Invia</button>
    </form>
    <?php echo pwdGenerator($_GET['password']); ?>
    </body>
</html>