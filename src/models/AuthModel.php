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
        
        $this->SkinGen($uuid);
    }

    public function Login(){
        $Login = $_POST['Login'];
        $Email = $_POST['Login'];
        $Password = hash(Env::get('HASH_ALGO'), $_POST['Password']);

        if(mysqli_num_rows($this->db->query("SELECT * FROM `users` WHERE (`Login` = '$Login' OR `Email` = '$Email') AND `Password` = '$Password'")) <= 0){Funcs::Err('Invalid login or password');}

        $this->Sessions = new Sessions();
        $uuid = mysqli_fetch_all($this->db->query("SELECT `Uuid` FROM `users` WHERE `Login` = '$Login' OR `Email` = '$Email'"))[0][0];
        $_SESSION['Login'] = [
            'Uuid' => $uuid,
            'Session_id' => $this->Sessions->sessionAdd($uuid)
        ];
    }

    public function SkinGen($uuid){
        $seed = array();
        preg_match_all("/\d+/", $uuid, $seed);
        $seed = implode($seed[0]);
        while(strlen($seed) < 32){
            $sum=0;
            $cur=0;
            $cur++;
            for($i=0; $i < strlen($seed); $i++){
                $sum += $seed[$i];
            }
            $seed = $seed.round($sum/$seed[$cur]);
        }
        $sum=0;
        $sum_1=0;
        $sum_2=0;
        $sum_3=0;
        $sum_4=0;
        for($i=0; $i < strlen($seed); $i++){
            if($i < 8){$sum_1 += $seed[$i];}
            else if($i >= 8 && $i < 16){$sum_2 += $seed[$i];}
            else if($i >= 16 && $i < 24){$sum_3 += $seed[$i];}
            else{$sum_4 += $seed[$i];}
            $sum += $seed[$i];
        }

        //Skin color
        $Skin = array();
        if($sum > 160){$Skin['Color'] = 'Fair';}
        else if($sum > 150){$Skin['Color'] = 'Dark';}
        else if($sum > 140){$Skin['Color']='Pail';}
        else{$Skin['Color']='Brown';}

        //HairColor
        if($sum_1 > 45){$Skin['HairColor'] = 'White';}
        else{$Skin['HairColor']='Black';}

        //EyeColor
        if($sum_2 > 40){$Skin['Eyes'] = 'Blue';}
        else if($sum_2 > 30){$Skin['Eyes'] = 'Black';}
        else if($sum_2 > 20){$Skin['Eyes'] = 'Green';}
        else {$Skin['Eyes'] = 'Brown';}

        //Hair
        if($sum_3 > 45){$Skin['Hair'] = '';}
        else if($sum_3 > 40){$Skin['Hair'] = 'Default';}
        else {$Skin['Hair'] = $Skin['Hair'] = 'TooHair';}

        //Beard
        if($sum_4 > 40){$Skin['Beard'] = '';}
        else if($sum_4 > 20){$Skin['Beard'] = 'Default';}
        else {$Skin['Beard'] = 'TooBeard';}

        $Base = imagecreatefrompng($GLOBALS['ROOT'].'/resources/SkinConstructor/Skin/'.$Skin['Color'].'.png'); 
        imagesavealpha($Base, true);

        $Eyes = imagecreatefrompng($GLOBALS['ROOT'].'/resources/SkinConstructor/Eyes/'.$Skin['Eyes'].'.png'); 
        imagesavealpha($Eyes, true);
        imagecopy($Base, $Eyes, 0, 0, 0, 0, 64, 64);

        if($Skin['Hair'] != ''){
            $Hair = imagecreatefrompng($GLOBALS['ROOT'].'/resources/SkinConstructor/Hair/'.$Skin['HairColor'].$Skin['Hair'].'.png');
            imagesavealpha($Hair, true);
            imagecopy($Base, $Hair, 0, 0, 0, 0, 64, 64);
        }
        
        if($Skin['Beard'] != ''){
            $Beard = imagecreatefrompng($GLOBALS['ROOT'].'/resources/SkinConstructor/Beard/'.$Skin['HairColor'].$Skin['Beard'].'.png');
            imagesavealpha($Beard, true);
            imagecopy($Base, $Beard, 0, 0, 0, 0, 64, 64);
        }

        imagepng($Base, $GLOBALS['ROOT'].'public/assets/Users/Skins/'.$uuid.'.png');
        
    }
    

}
