<?php

namespace src\models;

use mysqli;
use src\core\Model;
use src\lib\Env;
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

    public function get_sessions(){
        $uuid = $_SESSION['Login']['Uuid'];
        $session_id = $_SESSION['Login']['Session_id'];

        return [
            'c_session' => mysqli_fetch_all($this->db->query("SELECT * FROM `users_sessions` WHERE `Uuid` = '$uuid' AND `Session_id` = '$session_id'")),
            'o_sessions' => mysqli_fetch_all($this->db->query("SELECT * FROM `users_sessions` WHERE `Uuid` = '$uuid' AND `Session_id` != '$session_id' ORDER BY `Status` DESC, `Last_activity_date` DESC"))
        ];
        
    }

    public function get_session($session_id){
        $uuid = $_SESSION['Login']['Uuid'];
        return $this->db->query("SELECT * FROM `users_sessions` WHERE `Uuid` = '$uuid' AND `Session_id` = '$session_id'");
    }

    public function close_session($session_id){
        $uuid = $_SESSION['Login']['Uuid'];
        $this->db->query("UPDATE `users_sessions` SET `Status` = 0  WHERE `Uuid` = '$uuid' AND `Session_id` = '$session_id'");
    }

    public function close_all_sessions(){
        $uuid = $_SESSION['Login']['Uuid'];
        $session_id = $_SESSION['Login']['Session_id'];
        $this->db->query("UPDATE `users_sessions` SET `Status` = 0  WHERE `Uuid` = '$uuid' AND `Session_id` != '$session_id'");
    }

    public function check_password($password){
        $password = hash(Env::get('HASH_ALGO'), $password);
        $uuid = $_SESSION['Login']['Uuid'];
        return $this->db->query("SELECT * FROM `users` WHERE `Uuid` = '$uuid' AND `Password` = '$password'");
    }


    public function reset_password($old_password, $new_password){
        $old_password = hash(Env::get('HASH_ALGO'), $old_password);
        $new_password = hash(Env::get('HASH_ALGO'), $new_password);

        $uuid = $_SESSION['Login']['Uuid'];

        return $this->db->query("UPDATE `users` SET `Password` = '$new_password' WHERE `Uuid` = '$uuid' AND `Password` = '$old_password'");
    }
    

}
