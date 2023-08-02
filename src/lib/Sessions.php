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
            $Login = $_SESSION['Login']['Login'];
            $Session_id = $_SESSION['Login']['Session_id'];
            
            $this->db->query("UPDATE `users_sessions` SET `Last_activity_date` = '$Last_activity_date' WHERE `Login` = '$Login' AND `Session_id` = '$Session_id'");
        }
    }

    public function sessionCheck(){
        if($this->User->isLogined()){
            $Login = $_SESSION['Login']['Login'];
            $Session_id = $_SESSION['Login']['Session_id'];

            if(mysqli_num_rows($this->db->query("SELECT * FROM `users_sessions` WHERE `Login` = '$Login' AND `Session_id` = '$Session_id'")) < 1){
                $this->db->query("DELETE FROM `users_sessions` WHERE `Login` = '$Login' AND `Session_id` = '$Session_id'");
                $this->User->Logout();
            }
        }
    }
}
