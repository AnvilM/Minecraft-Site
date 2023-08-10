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



    public function StatsAction(){

        $this->View->render();
    }

    

    public function LogoutAction(){
        $this->Model->Logout();
    }
} 