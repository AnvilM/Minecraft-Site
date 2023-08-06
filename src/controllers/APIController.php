<?php


namespace src\controllers;

use mysqli;
use src\core\Controller;
use src\core\Model;
use src\lib\Funcs;

Class APIController extends Controller{

    public function get_skinAction(){
        if(!isset($_GET['uuid']) || $_GET['uuid'] == ''){Funcs::Err('Uuid not specified');}

        header("Content-type: image/png");

        $skin = $this->Model->get_skin();

        imagepng($skin);
        imagedestroy($skin);
    }

    public function get_avatarAction(){
        if(!isset($_GET['uuid']) || $_GET['uuid'] == ''){Funcs::Err('Uuid not specified');}
        
        header("Content-type: image/png");

        $avatar = $this->Model->get_avatar();

        imagepng($avatar);
        imagedestroy($avatar);

    }
} 