<?php
namespace core;
use core\lib\route;

class auto_load
{
    public static $calssMap = array();
    public $viewAssign;

    static public function run(){
       \core\lib\log::init();

        $route = new route();
        $contrClass = $route->ctrl;
        $actionFun = $route->action;
        $contrFile = APP.'\controller\\'.$contrClass.'.php';
        $contrClass = MODULE.'\controller\\'.$contrClass;
        if(is_file($contrFile)){
            include $contrFile;
            $contrName = new $contrClass();
            $contrName->$actionFun();
        }else{
            p('controller not found');
        }
    }

    // autoload function to load
    static public function load($class){
             $class ='/'.str_replace("\\","/",$class);
             $file = __ROOT__.$class.'.php';
             if(is_file($file)){
                 include $file;
                 self::$calssMap[$class] = $class ;
             }else{
                 return false;
            }
    }

    //display view
    public function display($file){
        $filePath = APP.'\view\\'.$file;
        if(is_file($filePath)){
            \core\lib\log::log('access '.$filePath);
            if(isset($this->viewAssign)){
                extract($this->viewAssign);
                include $filePath;
            }else{
                include $filePath;
            }

        }
    }
    //transfer params
    public function assign($key,$value){
        \core\lib\log::log('assign data success');
        $this->viewAssign[$key] = $value;
    }
}