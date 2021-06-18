<?php

namespace App;

use PDO;

class Database
{

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $db_port;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass = '1234root', $db_host = 'localhost', $db_port = '3306')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;
        $this->db_port = $db_port;
    }

    private function getPdo()
    {
        if ($this->pdo === null) {

            $pdo = new PDO('mysql:dbname=Blog;host=localhost;port=3306', 'root', '1234root');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($statement, $class_name)
    {

        $req =  $this->getPdo()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_CLASS, $class_name);
        return $datas;
    }

    /* 
    * Request one or all atricles on page Single
    */

    public function prepare($statement,$attributes, $class_name, $one = false)
    {

        $req = $this->getPdo()->prepare($statement);
        $req->execute($attributes);
        $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
        if ($one) {
            $datas = $req->fetch();
        } else {

            $datas = $req->fetchAll();
        }
        return $datas;
    }
}
