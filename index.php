<?php
require_once("controller/handler.php");

get_header_section();
switch($_SERVER["REQUEST_METHOD"]){
    case "GET":
        if(isset($_GET["id"])) {
            get_post_page();
        }else{
            get_category_page();
        }
        break;
    default:
        die("<p>Erreur 404  <a href='/'> Retourner &rightarrow;</a></p>");
}
get_footer_section();