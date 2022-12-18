<?php

class DB extends PDO
{
    private $DB_HOST = "localhost";
    private $DB_NAME = "news";
    private $DB_USR = "root";
    private $DB_PWD = "";

    private static $_instance;

    private function __construct()
    {
        parent::__construct(
            'mysql:host=' . $this->DB_HOST . ';dbname=' . $this->DB_NAME . ';',
            $this->DB_USR,
            $this->DB_PWD
        );

        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }


    public static function get_instance()
    {
        if (is_null(self::$_instance)) self::$_instance = new DB();

        return self::$_instance;
    }
}
