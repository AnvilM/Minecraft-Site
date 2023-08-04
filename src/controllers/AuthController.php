<?php


namespace src\controllers;

use mysqli;
use src\core\Controller;
use src\core\Model;
use src\lib\Funcs;


Class AuthController extends Controller{


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
        $Login = $_POST['Login'];
        $Email = $_POST['Email'];
        if(mysqli_num_rows($this->Model->db->query("SELECT * FROM `users` WHERE `Login` = '$Login'")) >= 1){Funcs::Err('Login taken');}
        if(mysqli_num_rows($this->Model->db->query("SELECT * FROM `users` WHERE `Email` = '$Email'")) >= 1){Funcs::Err('Email taken');}
        
        $this->Model->addSignup();
    }   

    public function CheckTokenAction(){
        if(!isset($_POST['Code'])){Funcs::Err('Code not specified');}
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
        $Login = $_POST['Login'];
        $Email = $_POST['Email'];
        if(mysqli_num_rows($this->Model->db->query("SELECT * FROM `users` WHERE `Login` = '$Login'")) >= 1){Funcs::Err('Login taken');}
        if(mysqli_num_rows($this->Model->db->query("SELECT * FROM `users` WHERE `Email` = '$Email'")) >= 1){Funcs::Err('Email taken');}

        $this->Model->addUser();

    } 

    public function LoginAction(){
        if(!isset($_POST['Login']) || $_POST['Login'] === ''){Funcs::Err('Login not specified');}
        if(!isset($_POST['Password']) || $_POST['Password'] === ''){Funcs::Err('Password not specified');}
        
        $this->Model->Login();
    }
} 