<?php 

namespace App;

class App{

    const DB_Name ='Blog';
    const DB_USER = 'root';
    const DB_PASS ='1234root';
    const DB_HOST= 'localhost';
    const DB_PORT= '3306';

private static $database;
private static $title = 'Mon super site';

public static function getDb(){

if (self::$database === null){
    
    self::$database = new Database(self::DB_Name, self::DB_USER,self::DB_PASS,self::DB_HOST,self::DB_PORT);
}
    return self::$database;
}

public static function notFound(){

header("HTTP/1.0 404 NOT FOUND");
header('location:index.php?p=404');
}

public static function setTitle($title){

    return self::$title = $title | self::$title;
}

public static function getTitle(){

    return self::$title ;
}
}

?>