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

            
        }
        else{
            print_r($_POST);
        }
   
    }   
} 