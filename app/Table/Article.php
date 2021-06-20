<?php

namespace App\Table;

use App\App;
use App\Table\Table;

class Article extends Table
{

    protected static $table = 'articles';

    public static function find($id)
    { return self::query(
        " SELECT articles.id, articles.title, articles.content, categories.title as categorie  
        FROM articles 
        LEFT JOIN categories 
        ON articles.categorie_id = categories.id 
        WHERE articles.id = ? 
        ", [$id], true);
    }




/* 
*Get last article
 */

public static function getLast(){
    
    return self::query(" SELECT articles.id, articles.title, articles.content, categories.title as categorie  
    FROM articles 
    LEFT JOIN categories 
    ON articles.categorie_id = categories.id 
    ORDER BY articles.date DESC ");
    ;
}

/* 
return articles categorie on categorie.php
*/

public static function lastByCategorie($categorie_id)
{


    return self::query(" SELECT articles.id, articles.title, articles.content, categories.title as categorie  
    FROM articles 
    LEFT JOIN categories 
    ON articles.categorie_id = categories.id 
    WHERE categorie_id = ? 
    ORDER BY articles.date DESC
    ", [$categorie_id]);
}

    /* 
    * Return article url 
    */

    public function getUrl()
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
