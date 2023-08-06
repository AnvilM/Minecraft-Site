<?php

namespace src\models;

use src\core\Model;
use src\lib\Funcs;

class APIModel extends Model{

    public function get_skin(){
        $skin = imagecreatefrompng(file_exists($GLOBALS['ROOT'].'public/assets/Users/Skins/'.$_GET['uuid'].'.png') ? $GLOBALS['ROOT'].'public/assets/Users/Skins/'.$_GET['uuid'].'.png' : $GLOBALS['ROOT'].'public/assets/Users/Default/Skin.png');
        imagesavealpha($skin, true);
        return $skin;
    }

    public function get_avatar(){

        $skin = imagecreatefrompng('http://'.$_SERVER['SERVER_NAME'].'/API/get.skin?uuid='.$_GET['uuid']);
        imagesavealpha($skin, true);
        $rect = [
            'x' => 8, 
            'y' => 8, 
            'width' => 8, 
            'height' => 8
        ];
        $avatar = imagecrop($skin, $rect);
        return $avatar;
    }
    

}
