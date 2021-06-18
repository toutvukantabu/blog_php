<?php

namespace App\Table;

use App\App;

class Article
{
/* 
*Get last article
 */

public static function getLast(){
    
    return App::getDb()->query('SELECT * FROM articles LEFT JOIN categories ON categoory_id = category.id ');
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

    /* 
    * Return article url 
    */

    public function getURL()
    {

        return 'index.php?p=article&id=' . $this->id;
    }

    /* 
    *return extrait article
    */

    public function getExtrait()
    {

        $html = '<p>' . substr($this->content, 0, 100) . ' ...</p>';
        $html .= '<p><a href="' . $this->getURL() . '"> Voir la suite </a></p>';

        return $html;
    }
}
