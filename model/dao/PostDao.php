<?php
require_once("model/DB.php");
require_once("model/Post.php");

class PostDao extends BasicDao
{
    static $table = "post";
    static $class = Post::class;

    static function get_post($id){
        $query = "SELECT * FROM " . self::$table . " WHERE id={$id}";
        $stmt = DB::get_instance()->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_CLASS, self::$class)[0];

        return $data;
    }

    static function get_post_by_cat($cat){
        $query = "SELECT * FROM " . self::$table . " WHERE catname=:cname";
        $stmt = DB::get_instance()->prepare($query);
        $stmt->bindValue(':cname', $cat, PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_CLASS, self::$class);   

        return $data;
    }
}
