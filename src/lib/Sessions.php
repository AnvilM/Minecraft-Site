<?php

namespace src\lib;

class Sessions{
    public $User;
    public $db;

    public function __construct(){

        $this->User = new User();
        $this->db = new Db();
    }
    
    public function sessionUpdate(){
        if($this->User->isLogined()){

            $Last_activity_date = time();
            $uuid = $_SESSION['Login']['Uuid'];
            $Session_id = $_SESSION['Login']['Session_id'];
            
            $this->db->query("UPDATE `users_sessions` SET `Last_activity_date` = '$Last_activity_date' WHERE `Uuid` = '$uuid' AND `Session_id` = '$Session_id'");
        }
    }

    public function sessionCheck(){
        if($this->User->isLogined()){
            $uuid = $_SESSION['Login']['Uuid'];
            $Session_id = $_SESSION['Login']['Session_id'];

            if(mysqli_num_rows($this->db->query("SELECT * FROM `users_sessions` WHERE `Uuid` = '$uuid' AND `Session_id` = '$Session_id'")) <= 0){
                $this->User->Logout();
            }
        }
    }

    public function sessionAdd($uuid){
        $Session_id = Funcs::gen_uuid();
        $Location = UserInfo::getLocation();
        $Location = $Location['country']['name_ru'].', '.$Location['city']['name_ru'];
        $Login_date = time();
        $OS = UserInfo::getOS();
        $App = UserInfo::getBrowser();
        $Ip = UserInfo::getIP();

        if(mysqli_num_rows($this->db->query("SELECT * FROM `users_sessions` WHERE `Uuid` = '$uuid' AND `Session_id` = '$Session_id'")) >= 1){$this->sessionAdd($uuid);}
        $this->db->query("INSERT INTO `users_sessions` (`Uuid`, `Session_id`, `Login_date`, `Last_activity_date`, `Location`, `OS`, `App`, `Ip`) VALUES ('$uuid', '$Session_id', '$Login_date', '$Login_date', '$Location', '$OS', '$App', '$Ip')");
        
        return $Session_id;
    }
}
