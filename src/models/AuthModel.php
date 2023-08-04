<?php

namespace src\models;

use mysqli;
use src\core\Model;
use src\lib\Env;
use src\lib\Funcs;
use src\lib\Sessions;
use src\lib\UserInfo;
use src\lib\SxGeo;

class AuthModel extends Model{

    private $Sessions;

    public function addSignup(){
        $Login = $_POST['Login'];
        $Email = $_POST['Email'];
        $Password = hash(Env::get('HASH_ALGO'), $_POST['Password']);

        $Code = '';
        for($i=0; $i<4; $i++){
            $Code = $Code.rand(0,9);
        }
        $Token = hash(Env::get('HASH_ALGO'), $Code);
        $Token = str_replace('a', 'b', $Token);

        if(mysqli_num_rows($this->db->query("SELECT * FROM `signup` WHERE `Login` = '$Login' AND `Email` = '$Email'")) >= 1){$this->db->query("UPDATE `signup` SET `Token` = '$Token' WHERE `Login` = '$Login' AND `Email` = '$Email'");}
        else{$this->db->query("INSERT INTO `signup` (`Login`, `Email`, `Password`, `Token`) VALUES ('$Login', '$Email', '$Password', '$Token')");}

        //send MAil this
        file_put_contents($GLOBALS['ROOT'].'public/code.txt', $Code);
    }

    public function addUser(){
        $Login = $_POST['Login'];
        $Email = $_POST['Email'];
        $Password = hash(Env::get('HASH_ALGO'), $_POST['Password']);
        $Signup_date = time();
        $Token = hash(Env::get('HASH_ALGO'), $_POST['Code']);

        $Token = str_replace('a', 'b', $Token);

        if(mysqli_num_rows($this->db->query("SELECT * FROM `signup` WHERE `Token` = '$Token' AND `Login` = '$Login' AND `Password` = '$Password' AND `Email` = '$Email'")) <= 0){Funcs::Err('Invalid code');}

        $uuid = Funcs::gen_uuid();
        
        if(mysqli_num_rows($this->db->query("SELECT * FROM `users` WHERE `Uuid` = '$uuid'")) >= 1){$this->addUser();}
        $this->db->query("INSERT INTO `users` (`Uuid`, `Login`, `Password`, `Email`, `Signup_date`) VALUES ('$uuid', '$Login', '$Password', '$Email', '$Signup_date')");
    }

    public function Login(){
        $Login = $_POST['Login'];
        $Email = $_POST['Login'];
        $Password = hash(Env::get('HASH_ALGO'), $_POST['Password']);

        if(mysqli_num_rows($this->db->query("SELECT * FROM `users` WHERE (`Login` = '$Login' OR `Email` = '$Email') AND `Password` = '$Password'")) <= 0){Funcs::Err('Invalid login or password');}

        $this->Sessions = new Sessions();
    
        $_SESSION['Login'] = [
            'Uuid' => mysqli_fetch_all($this->db->query("SELECT `Uuid` FROM `users` WHERE `Login` = '$Login'"))[0][0],
            'Session_id' => $this->Sessions->sessionAdd(mysqli_fetch_all($this->db->query("SELECT `Uuid` FROM `users` WHERE `Login` = '$Login'"))[0][0])
        ];
        
    }
    

}
