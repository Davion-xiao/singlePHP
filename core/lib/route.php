<?php
namespace core\lib;
use core\lib\conf;
class route
{
    public $ctrl;
    public $action;
    public function __construct()
    {
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
            //index/index
            $path = $_SERVER['REQUEST_URI'];
            $pathArr = explode('/',trim($path,'/'));
            if(isset($pathArr[0])){
                \core\lib\log::log('access class '.$pathArr[0]);
                $this->ctrl = $pathArr[0];
                unset($pathArr[0]);
                if(isset($pathArr[1])){
                    \core\lib\log::log('access fuction '.$pathArr[1]);
                    $this->action = $pathArr[1];
                    unset($pathArr[1]);
                }else{
                    \core\lib\log::log('gernerate default index function');
                    $this->action = conf::get('default_function','config');
                }
            }
        }else{
            \core\lib\log::log('generate default index controller index function');
            $this->ctrl = conf::get('default_controller','config');
            $this->action = conf::get('default_function','config');
        }
    }
}