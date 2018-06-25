<?php
namespace app\controller;
use core\lib\conf;

use core\lib\log;
use core\lib\module;

class index extends \core\auto_load
{
    public function index(){
        /*视图显示无参数
        $this->display('index.html');*/
        /*视图显示有参数
        $data = array(
            '0' => 'About',
            '1' => 'Team',
            '2' => 'Services',
            '3' => 'Gallery',
            '4' => 'Containdexct'
        );
        $this->assign('data',$data);
        $this->display('head.html');*/


        /*模型实例化
        $module = new Module();*/


        /*增加
        $username='userTwo';
        $password="admin";
        $sql = "INSERT INTO user(username,password) VALUES('$username','$password')";
        $dht = $module->prepare($sql);
        $dht->execute();*/
        /*删除
        $sql = "delete from user where id='1'";
        $dht = $module->prepare($sql);
        $dht->execute();*/

        /*修改
        $sql = "update user set username='userOne' where id='2'";
        $dht = $module->prepare($sql);
        $dht->execute();*/
        /*查询
        $querySql = "select * from user";
        $resArr = $module->query($querySql);
        p($resArr->fetchAll());*/

        /*输出访问的控制器和方法echo 'function index of class index ';*/

    }
    #不带参数单纯展示页面
    public function disView(){
        $ads =bb   lkjasild;
        $this->display('index.html');
    }
    #带参数，传递参数到前端页面
   public function disViewWithParams(){
        $data = array(
            '0' => 'About',
            '1' => 'Team',
            '2' => 'Services',
            '3' => 'Gallery',
            '4' => 'Containdexct'
        );
        $this->assign('data',$data);
        $this->display('head.html');
    }
    public function add(){
        $module = new Module();
        $username='userTwo';
        $password="admin";
        $sql = "INSERT INTO user(username,password) VALUES('$username','$password')";
        $dht = $module->prepare($sql);
        $dht->execute();
    }
    public function del(){
        $module = new Module();
        $id = '5';
        $sql = "delete from user where id='$id'";
        $dht = $module->prepare($sql);
        $dht->execute();
    }
    public function update(){
        $module = new Module();
        $id = '8';
        $sql = "update user set username='userOne' where id='$id'";
        $dht = $module->prepare($sql);
        $dht->execute();
    }
    public function show(){
        $module = new Module();
        $querySql = "select * from user";
        $resArr = $module->query($querySql);
        p($resArr->fetchAll());
    }

}