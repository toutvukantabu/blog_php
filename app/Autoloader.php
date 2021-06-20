<?php

namespace App;

class Autoloader
{

/* 
*registering autoload on  a static function 
*/
    static function register()
    {

        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

/* 
* include the file equal at this class
* @param string  name of the class 
* __DIR__ = constant parent-folder
*/
static function autoload($class)
    {
        if (strpos($class, __NAMESPACE__ . '\\') === 0) {
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require __DIR__ .'/' . $class . '.php';
        }
    }
}
