<?php


namespace src\controllers;

use mysqli;
use src\core\Controller;
use src\core\Model;

Class AccountController extends Controller{

    public function IndexAction(){
        
   
        $this->View->render();
    }   

    public function CustomizationAction(){

        $this->View->render();
    }

    public function SecurityAction(){

        $this->View->render();
    }

    public function StatsAction(){

        $this->View->render();
    }

    

    public function LogoutAction(){
        $this->Model->Logout();
    }
} 