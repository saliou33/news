<?php
require_once("model/dao/CategoryDao.php");
require_once("model/dao/PostDao.php");

function get_header_section(){
    $categories = CategoryDao::get_all();
    require_once("view/header.php");
} 

function get_footer_section(){
    require_once("view/footer.php");
}

function get_category_page(){
    $is_categorized = isset($_GET["cat"]);
    $cat = $is_categorized ? $_GET["cat"] : "ALL";
    $posts = $is_categorized? PostDao::get_post_by_cat($cat) : 
                              PostDao::get_all();
    require_once("view/all.php");
}

function get_post_page(){
    $post = PostDao::get_post($_GET["id"]);
    require_once("view/post.php");
}