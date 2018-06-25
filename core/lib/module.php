<?php
namespace core\lib;
use core\lib\conf;
class module extends \PDO
{
    private $dsn;
    private $username;
    private $passwd;

   public function __construct()
    {
        $getData = conf::getAll('config');
        
        $this->dsn = $getData['dsn'];
        $this->username = $getData['username'];
        $this->passwd   = $getData['passwd'];
        $this->db_connect();
    }
    private function db_connect(){
        try{
            \core\lib\log::log('DB connect success');
            parent::__construct($this->dsn, $this->username, $this->passwd);
        }catch(\PDOException $e){
            \core\lib\log::log($e->getMessage());
            p($e->getMessage());
        }
    }
}