<?php


namespace src\controllers;

use mysqli;
use src\core\Controller;
use src\core\Model;
use src\lib\Funcs;

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



    public function Security_SessionsAction(){
        $sessions = $this->Model->get_sessions();


        $this->View->render(['sessions' => $sessions]);
    }

    public function Security_Sessions_AboutAction(){
        if(!isset($_GET['session_id']) || $_GET['session_id'] == ''){Funcs::Redirect('/Account/Security/Sessions');}
        $session = mysqli_fetch_all($this->Model->get_session($_GET['session_id']));
        if(count($session) <= 0){Funcs::Redirect('/Account/Security/Sessions');}

        $this->View->render(['session' => $session]);
    }

    public function Security_Sessions_CloseAction(){
        if(!isset($_GET['session_id']) || $_GET['session_id'] == ''){Funcs::Redirect('/Account/Security/Sessions');}

        $this->Model->close_session($_GET['session_id']);
        Funcs::Redirect('/Account/Security/Sessions');
    }

    public function Security_Sessions_Close_AllAction(){
        $this->Model->close_all_sessions();
        Funcs::Redirect('/Account/Security');
    }


    public function Security_Password_ResetAction(){
        
        $this->View->render();
    }

    public function Security_Password_ResetPOSTAction(){
        if(!isset($_POST['Old_pass']) || $_POST['Old_pass'] == ''){Funcs::Err('Old password not specified');}
        if(!isset($_POST['New_pass']) || $_POST['New_pass'] == ''){Funcs::Err('New password not specified');}
        if(!isset($_POST['Re_new_pass']) || $_POST['Re_new_pass'] == ''){Funcs::Err('Re new password not specified');}
        if(strlen($_POST['New_pass']) < 8){Funcs::Err('Password length less than 8');}
        if($_POST['New_pass'] !== $_POST['Re_new_pass']){Funcs::Err('Password != Re_Password');}
        if(mysqli_num_rows($this->Model->check_password($_POST['Old_pass'])) < 1){Funcs::Err('Invalid old password');}

        $this->Model->reset_password($_POST['Old_pass'], $_POST['New_pass']);
    }



    public function StatsAction(){

        $this->View->render();
    }

    

    public function LogoutAction(){
        $this->Model->Logout();
    }
} 