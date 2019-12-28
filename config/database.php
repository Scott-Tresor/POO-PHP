<?php

namespace config;

class database
{
    private static $PDOInstance;
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