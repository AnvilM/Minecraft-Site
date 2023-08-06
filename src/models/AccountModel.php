<?php

namespace src\models;

use src\core\Model;
use src\lib\Funcs;
use src\lib\User;

class AccountModel extends Model{

    public function Logout(){
        $uuid = $_SESSION['Login']['Uuid'];
        $session_id = $_SESSION['Login']['Session_id'];

        $this->db->query("UPDATE `users_sessions` SET `Status` = 0  WHERE `Uuid` = '$uuid' AND `Session_id` = '$session_id'");

        $Useer = new User();
        $Useer->Logout();

        Funcs::Redirect('/');
    }
    

}
