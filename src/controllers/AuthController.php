<?php


namespace src\controllers;

use mysqli;
use src\core\Controller;
use src\core\Model;

Class AuthController extends Controller{

    public function SendMailAction(){
        if(
        isset($_POST['Login']) &&
        isset($_POST['Email']) && 
        isset($_POST['Password']) && 
        isset($_POST['Re_Password']) &&
        strlen($_POST['Login']) >= 3 && 
        strlen($_POST['Login']) <= 16 &&
        preg_match('/^[a-zA-Z0-9]+$/', $_POST['Login']) &&
        preg_match('/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/', $_POST['Email']) &&
        strlen($_POST['Password']) >= 8 &&
        $_POST['Password'] === $_POST['Re_Password']){

            if(mysqli_num_rows($this->Model->getUserFromLoginOrEmail($_POST['Login'], $_POST['Email'])) >= 1){exit();}
            
            $code = '';
            for($i=0; $i<4; $i++){
                $code = $code.rand(0,9);
            }
            $Token = hash('sha256', $code);
            $Token = str_replace('a', 'b', $Token);

            $_POST['Password'] = hash('sha256', $_POST['Password']);
            $this->Model->addSignup($_POST['Login'], $_POST['Email'], $_POST['Password'], $Token);

            echo 1;
        }
        
   
    }   

    public function CheckTokenAction(){
        if(
            isset($_POST['Code']) &&
            isset($_POST['Login']) &&
            isset($_POST['Email']) && 
            isset($_POST['Password']) && 
            isset($_POST['Re_Password']) &&
            strlen($_POST['Login']) >= 3 && 
            strlen($_POST['Login']) <= 16 &&
            preg_match('/^[a-zA-Z0-9]+$/', $_POST['Login']) &&
            preg_match('/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/', $_POST['Email']) &&
            strlen($_POST['Password']) >= 8 &&
            $_POST['Password'] === $_POST['Re_Password']){

            $Token = hash('sha256', $_POST['Code']);
            $Token = str_replace('a', 'b', $Token);

            $_POST['Password'] = hash('sha256', $_POST['Password']);

            if($this->Model->checkToken($_POST['Login'], $_POST['Email'], $_POST['Password'], $Token)){
                $this->Model->addUser($_POST['Login'], $_POST['Email'], $_POST['Password']);
            }
            
        }
        
   
    } 
} 