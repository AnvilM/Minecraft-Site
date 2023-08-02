<?php

namespace src\core;

use mysqli;
use src\core\View;
use src\lib\Env;
use src\lib\Sessions;
use src\lib\User;

abstract class Controller{

    public $View;
    public $Model;
    public $params;
    public $User;
    public $Env;
    public $Sessions;

    function __construct($params){
        
        $this->params = $params;

        $this->loadMiddleware();
        $this->Model = $this->loadModel($params['Controller']);

        $this->Env = new Env();
    
        $this->Sessions = new Sessions();
        
        $this->Sessions->sessionCheck();
        $this->Sessions->sessionUpdate();

        $this->View = new View($params);
        
        
    }



    public function loadModel($model_name){
        $model_path = 'src\models\\'.$model_name.'Model';
        if(class_exists($model_path)){
            return new $model_path;
        }
    }

    public function loadMiddleware(){
        if(key_exists('Middlewares', $this->params) && count($this->params['Middlewares']) > 0){
            for($i=0; $i < count($this->params['Middlewares']); $i++){
                $middlewarepath = 'src\middlewares\\'.$this->params['Middlewares'][$i].'Middleware';
                $middleware = new $middlewarepath;
            }
        }
    }




    
   

}
