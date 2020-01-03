<?php

namespace config;

class database
{
    private $host    = 'localhost';
    private $name    = '';
    private $user    = 'root';
    private $pass    = '';
    private static $PDOInstance;

    public function __construct($host, $name, $user, $pass)
    {
        if (!$host !== null){
            $this->host = $host;
            $this->name = $name;
            $this->user = $user;
            $this->pass = $pass;
        }
    }

    public  static  function  getPDO()
    {
        if (self::$PDOInstance === null)
        self::$PDOInstance = new PDO('mysql:host:192.0.0.1;dbname=connexion;charset=utf8', 'root', '',[
            PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        return self::$PDOInstance;
    }
}