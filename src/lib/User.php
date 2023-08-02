<?php

namespace src\lib;

class User{

    public function isLogined(){
        return isset($_SESSION['Login']) ? true : false;
    }

    public function Logout(){
        if($this->isLogined()){
            unset($_SESSION['Login']);
        }
    }

    
}
