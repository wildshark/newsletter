<?php

switch($_REQUEST['_admin']){

    case"dashboard";
        $data = article::fetch($conn);
        require("template/admin/dashbaord.php");
    break;

    case"article";
        require("template/admin/article.php");
    break;
}

?>