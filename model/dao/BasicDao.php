<?php
require_once("model/DB.php");

class BasicDao {

    public static $table;
    public static $class;

    public static function get_all(){
        $query = "SELECT * FROM ". static::$table;
        $stmt = DB::get_instance()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_CLASS, static::$class);
        $stmt->closeCursor();

        return $data;
    }
}