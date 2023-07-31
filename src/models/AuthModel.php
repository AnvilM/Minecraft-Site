<?php

namespace src\models;

use mysqli;
use src\core\Model;

class AuthModel extends Model{

    public function getUserFromLoginOrEmail($Login, $Email){
        return $this->db->query("SELECT * FROM `users` WHERE `Login` = '$Login' OR `Email` = '$Email'");

    }

    public function addSignup($Login, $Email, $Password, $Token){

        if(mysqli_num_rows($this->db->query("SELECT * FROM `signup` WHERE `Login` = '$Login'")) >= 1){
            $this->db->query("UPDATE `signup` SET `Token` = '$Token' WHERE `Login` = '$Login'");
        }
        else{
            $this->db->query("INSERT INTO `signup` (`Login`, `Email`, `Password`, `Token`) VALUES ('$Login', '$Email', '$Password', '$Token')");
        }
        
    }

    public function checktoken($Login, $Password, $Email, $Token){
        if(mysqli_num_rows($this->db->query("SELECT * FROM `signup` WHERE `Token` = '$Token' AND `Login` = '$Login' AND `Password` = '$Password' AND `Email` = '$Email'")) >= 1){return true;}
    }

    public function addUser($Login, $Password, $Email){
        $this->db->query("INSERT INTO `users` (`Login`, `Email`, `Password`) VALUES ('$Login', '$Email', '$Password')");

    }
    

}
