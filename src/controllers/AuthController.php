<?php


namespace src\controllers;

use mysqli;
use src\core\Controller;
use src\core\Model;
use src\lib\Funcs;

Class AuthController extends Controller{
    // (
    //     isset($_POST['Login']) &&
    //     isset($_POST['Email']) && 
    //     isset($_POST['Password']) && 
    //     isset($_POST['Re_Password']) &&
    //     strlen($_POST['Login']) >= 3 && 
    //     strlen($_POST['Login']) <= 16 &&
    //     preg_match('/^[a-zA-Z0-9]+$/', $_POST['Login']) &&
    //     preg_match('/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/', $_POST['Email']) &&
    //     strlen($_POST['Password']) >= 8 &&
    //     $_POST['Password'] === $_POST['Re_Password'])


    public function SendMailAction(){

        if(!isset($_POST['Login']) || $_POST['Login'] === ''){Funcs::Err('Login not specified');}
        if(!isset($_POST['Email']) || $_POST['Email'] === ''){Funcs::Err('Email not specified');}
        if(!isset($_POST['Password']) || $_POST['Password'] === ''){Funcs::Err('Password not specified');}
        if(!isset($_POST['Re_Password']) || $_POST['Re_Password'] === ''){Funcs::Err('Re_Password not specified');}
        if(strlen($_POST['Login']) < 3){Funcs::Err('Login length less than 3');}
        if(strlen($_POST['Login']) > 16){Funcs::Err('Login length more than 16');}
        if(!preg_match('/^[a-zA-Z0-9]+$/', $_POST['Login'])){Funcs::Err('Login contains invalid characters');}
        if(!preg_match('/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/', $_POST['Email'])){Funcs::Err('Invalid Email');}
        if(strlen($_POST['Password']) < 8){Funcs::Err('Password length less than 8');}
        if($_POST['Password'] !== $_POST['Re_Password']){Funcs::Err('Password != Re_Password');}
        if(mysqli_num_rows($this->Model->getUserFromLogin($_POST['Login'])) >= 1){Funcs::Err('Login taken');}
        if(mysqli_num_rows($this->Model->getUserFromEmail($_POST['Email'])) >= 1){Funcs::Err('Email taken');}
        
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

    public function CheckTokenAction(){
        if(!isset($_POST['Code'])){Funcs::Err('Code not specified');}
        if(!isset($_POST['Login'])){Funcs::Err('Login not specified');}
        if(!isset($_POST['Email'])){Funcs::Err('Email not specified');}
        if(!isset($_POST['Password'])){Funcs::Err('Password not specified');}
        if(!isset($_POST['Re_Password'])){Funcs::Err('Re_Password not specified');}
        if(strlen($_POST['Login']) < 3){Funcs::Err('Login length less than 3');}
        if(strlen($_POST['Login']) > 16){Funcs::Err('Login length more than 16');}
        if(!preg_match('/^[a-zA-Z0-9]+$/', $_POST['Login'])){Funcs::Err('Login contains invalid characters');}
        if(!preg_match('/^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/', $_POST['Email'])){Funcs::Err('Invalid Email');}
        if(strlen($_POST['Password']) < 8){Funcs::Err('Password length less than 8');}
        if($_POST['Password'] !== $_POST['Re_Password']){Funcs::Err('Password != Re_Password');}
        if(mysqli_num_rows($this->Model->getUserFromLogin($_POST['Login'])) >= 1){Funcs::Err('Login taken');}
        if(mysqli_num_rows($this->Model->getUserFromEmail($_POST['Email'])) >= 1){Funcs::Err('Email taken');}

        $Token = hash('sha256', $_POST['Code']);
        $Token = str_replace('a', 'b', $Token);

        $_POST['Password'] = hash('sha256', $_POST['Password']);

        if(!$this->Model->checkToken($_POST['Login'], $_POST['Email'], $_POST['Password'], $Token)){Funcs::Err('Invalid code');}
        $this->Model->addUser($_POST['Login'], $_POST['Email'], $_POST['Password']);
    } 
} 