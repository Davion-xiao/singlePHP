<?php
namespace core\lib;
use core\lib\conf;
use core\lib\log\driver\file;
class log
{
    static public $class;
    /*
     * setting log folder
     * set log format
     * begin to write log
     * */
    /**
     * @throws \Exception
     */
    static public function init(){
        $driver = conf::get('php_log_name','config');
        self::$class = new file();
    }

    static public function log($logName){
        self::$class->log($logName);
    }
}
