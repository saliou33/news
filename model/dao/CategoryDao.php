<?php

require_once("model/DB.php");
require_once("model/dao/BasicDao.php");
require_once("model/Category.php");


class CategoryDao extends BasicDao
{   
    static $table = "category";
    static $class = Category::class;

}
