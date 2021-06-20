<?php

namespace App\Table;

use App\App;

class Table
{

    protected static $table;

    public static function find($id)
    {
        return static::query(
" SELECT * 
FROM " . static::$table . " 
WHERE id = ? 
",[$id],true);
    }

    /* 
*Get all object content
 */

    public static function all()
    {


        return App::getDb()->query(
            " SELECT *
    FROM " . static::$table . "",
            get_called_class()
        );
    }

    public static function query( $statement, $attributes=null, $one=false)
    {
if($attributes){

    return App::getDb()->prepare($statement,$attributes,
  get_called_class(), $one);

}else{

    return App::getDb()->query($statement,
    get_called_class(), $one);
}

    }


    /*
 * change getUrl and GetExtrait to url and extrait
 */
    public function __get($key)
    {
        $mehtod = 'get' . ucfirst($key);
        $this->$key = $this->$mehtod();
        return $this->$key;
    }
}
