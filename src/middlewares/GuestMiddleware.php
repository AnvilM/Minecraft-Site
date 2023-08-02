<?php

namespace src\middlewares;

use src\lib\Funcs;
use src\lib\User;

class GuestMiddleware{
    public $User;

    public function __construct(){
        $this->User = new User();
        if($this->User->isLogined()){
            Funcs::Redirect('/Account');
        }
    }

}