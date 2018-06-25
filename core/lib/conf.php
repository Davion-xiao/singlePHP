<?php
namespace core\lib;

class conf
{
    static public $confArr = array();
    static public $confArr1 = array();

    static public function get($confKey, $fileName)
    {
        $filePath = __ROOT__ . '\core\config\\' . $fileName . '.php';

        if (!isset(self::$confArr[$filePath])) {
            if (is_file($filePath)) {
                $conf = include $filePath;
                if (isset($conf[$confKey])) {
                    self::$confArr[$fileName] = $conf;
                    return self::$confArr[$fileName][$confKey];
                } else {
                    throw new \Exception('have no config felid ' . $confKey);
                }
            } else {
                throw new \Exception('not found config file ' . $fileName);
            }
        } else {
            return self::$confArr[$fileName][$confKey];
        }
    }

    static public function getAll($fileName)
    {
        $filePath = __ROOT__ . '\core\config\\' . $fileName . '.php';
        if (!isset(self::$confArr1[$filePath])) {
            if (is_file($filePath)) {
                $conf = include $filePath;
                self::$confArr1[$fileName] = $conf;
                return self::$confArr1[$fileName];
            }else{
                throw new Exception('not found file'.$fileName);

            }
        } else {
            return self::$confArr1[$fileName];
        }
    }
}