<?php
namespace core\lib\log\driver;


use core\lib\conf;

class file
{
    private $filePath;
    private $fileType;
    public function __construct()
    {
        $this->filePath = conf::get('php_log_name','config');
        $this->fileType = conf::get('log_file_type','config');
    }

    public function log($info,$fileName='general_log'){

        $path = LOG.'\\'.$this->filePath;;
        $fileName = $fileName.$this->fileType;

        if(! is_dir($path)){
            $cc = mkdir($path,true);
            \core\lib\log::log('file not existed make a new folder');
        }

        $data = date('Y-m-d:H:i:s').' '.$info.PHP_EOL;
        return file_put_contents($path.'\\'.$fileName,$data,FILE_APPEND);

    }
}