<?php
    $num = rand(1,18);
    $al= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $an= '0123456789';
    $as= '!$%&()=.?';
    $apw= '';

    // if(strlen($apw) < $num){
    //     $apw= substr(str_shuffle($al),0,1);
    // }
    // var_dump($apw);
    // var_dump(strlen($apw));
    // $apw.=substr(str_shuffle($al),0,1);
    // var_dump($apw);
    // var_dump(strlen($apw));

    //     die();
    while(strlen($apw)<$num){
        if(strlen($apw) < $num){
            $apw.= substr(str_shuffle($al),0,1);
        }
        if(strlen($apw) < $num){
            $apw.=rand(0,9);
        }
        if(strlen($apw) < $num){
            $apw.=substr(str_shuffle($al),0,1);
        }
    }
    var_dump($apw);
            // $count = 3;
            // $str = str_replace("abcdefghijklmnopqrstuvwxyz", "", "ciao", $count);
            // var_dump(stristr('01123abcdefghijklmnopqrstuvwxyz456789', 'g'));
            // var_dump("/[0-9]+/");
        ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Random Password Generator</title>
    </head>
    <body>
    </body>
</html>