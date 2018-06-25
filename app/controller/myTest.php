<?php
namespace app\controller;

class myTest
{
    public $className;
    public function __construct()
    {
        $this->className = 'class named myTest';
    }
    public function index(){
        echo $this->className;
    }
}