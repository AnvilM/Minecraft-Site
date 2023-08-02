<?php


namespace src\controllers;

use mysqli;
use src\core\Controller;
use src\core\Model;
use src\lib\Funcs;
use src\lib\SxGeo;
use src\lib\UserInfo;

Class AuthController extends Controller{

    private $SxGeo;

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

        //send MAil this
        file_put_contents($GLOBALS['ROOT'].'public/code.txt', $code);
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
        if(mysqli_num_rows($this->Model->getUserFromLogin($_POST['Login'])) >= 1){Funcs::Err('Login taken');}
        if(mysqli_num_rows($this->Model->getUserFromEmail($_POST['Email'])) >= 1){Funcs::Err('Email taken');}

        $Token = hash('sha256', $_POST['Code']);
        $Token = str_replace('a', 'b', $Token);

        $_POST['Password'] = hash('sha256', $_POST['Password']);

        if(!$this->Model->checkToken($_POST['Login'], $_POST['Email'], $_POST['Password'], $Token)){Funcs::Err('Invalid code');}
        $this->Model->addUser($_POST['Login'], $_POST['Email'], $_POST['Password']);

    } 

    public function LoginAction(){
        if(!isset($_POST['Login']) || $_POST['Login'] === ''){Funcs::Err('Login not specified');}
        if(!isset($_POST['Password']) || $_POST['Password'] === ''){Funcs::Err('Password not specified');}

        $_POST['Password'] = hash('sha256', $_POST['Password']);
        if(mysqli_num_rows($this->Model->checkAuth($_POST['Login'], $_POST['Password'])) < 1){Funcs::Err('Invalid login or password');}

        $uuid = Funcs::gen_uuid();
        $OS = UserInfo::getOS();
        $browser = UserInfo::getBrowser();
        $ip = UserInfo::getIP();

        $_SESSION['Login'] = [
            'Session_id' => $uuid,
            'Login' => $_POST['Login']
        ];

        $this->SxGeo = new SxGeo($GLOBALS['ROOT'].'src/config/SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY);
        $location = $this->SxGeo->getCityFull($ip);
        $location = $location['country']['name_ru'].', '.$location['city']['name_ru'];
        
        $this->Model->addAuth($_POST['Login'], $uuid, time(), $location, $OS, $browser);
        exit();
    }
} 