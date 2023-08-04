<?php

namespace src\models;

use mysqli;
use src\core\Model;
use src\lib\Funcs;

class AuthModel extends Model{

    public function getUserFromLogin($Login){
        return $this->db->query("SELECT * FROM `users` WHERE `Login` = '$Login'");

    }

    public function getUserFromEmail($Email){
        return $this->db->query("SELECT * FROM `users` WHERE `Email` = '$Email'");

    }

    public function addSignup($Login, $Email, $Password, $Token){

        if(mysqli_num_rows($this->db->query("SELECT * FROM `signup` WHERE `Login` = '$Login'")) >= 1){
            $this->db->query("UPDATE `signup` SET `Token` = '$Token' WHERE `Login` = '$Login'");
        }
        else{
            $this->db->query("INSERT INTO `signup` (`Login`, `Email`, `Password`, `Token`) VALUES ('$Login', '$Email', '$Password', '$Token')");
        }
        
    }

    public function checktoken($Login, $Email, $Password, $Token){
        if(mysqli_num_rows($this->db->query("SELECT * FROM `signup` WHERE `Token` = '$Token' AND `Login` = '$Login' AND `Password` = '$Password' AND `Email` = '$Email'")) >= 1){return true;}
    }

    public function addUser($Login, $Email, $Password){
        $uuid = Funcs::gen_uuid();
        if(mysqli_num_rows($this->db->query("SELECT * FROM `users` WHERE `Uuid` = '$uuid'")) >= 1){
            $this->addUser($Login, $Email, $Password);
        }
        $this->db->query("INSERT INTO `users` (`Uuid`, `Login`, `Email`, `Password`) VALUES ('$uuid', '$Login', '$Email', '$Password')");

    }

    public function checkAuth($Login, $Password){
        return $this->db->query("SELECT * FROM `users` WHERE (`Login` = '$Login' OR `Email` = '$Login') AND `Password` = '$Password'");
    }

    public function addAuth($Login, $Login_date, $Location, $OS, $App){
        $session_id = Funcs::gen_uuid();

        $_SESSION['Login'] = [
            'Session_id' => $session_id,
            'Login' => $Login
        ];
        
        if(mysqli_num_rows($this->db->query("SELECT * FROM `users_sessions` WHERE `Login` = '$Login' AND `Session_id` = '$session_id'")) >= 1){$this->addAuth($Login, $Login_date, $Location, $OS, $App);}
        return $this->db->query("INSERT INTO `users_sessions` (`Login`, `Session_id`, `Login_date`, `Last_activity_date`, `Location`, `OS`, `App`) VALUES ('$Login', '$session_id', '$Login_date', '$Login_date', '$Location', '$OS', '$App')");
    }
    

}
