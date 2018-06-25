<?php
#define 全局变量常量 __ROOT__ 框架根目录路径 CORE 核心文件路径 APP网站应用路径 LOG 错误日志路径  DE_BUG 报错机制是否开启
define('__ROOT__',realpath('D:/wamp64/www/SinglePHP/'),true);
define('CORE',__ROOT__.'\core',true);
define('APP',__ROOT__.'\app',true);

define('LOG',__ROOT__.'\core\error_log',true);
define('MODULE','\app');

#开启关闭报错功能
define('DE_BUG',true);
#引入第三方库
include __ROOT__.'//'.'vendor/autoload.php';



if(! DE_BUG){
    ini_set('display_errors','Off');
}else{
    #实例化报错框架whoops
    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();
    ini_set('display_errors','On');
}

#引入function.php助手函数 auto_load.php 自动加载类的实现
include CORE.'\common\function.php';
include CORE.'\auto_load.php';
#引入自动加载类
spl_autoload_register('\core\auto_load::load');

\core\auto_load::run();

