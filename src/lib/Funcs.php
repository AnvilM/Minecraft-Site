<?php

namespace src\lib;

class Funcs{

    public static function Redirect($path){
        header('Location: '.$path);
        exit();
    }

    public static function Err($code){
        echo $code;
        exit();
    }
    
}
