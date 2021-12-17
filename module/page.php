<?php

switch($_REQUEST['page']){
    
    case"admin";
        require("template/admin/login.php");
    break;

    case"news";
        $q[] = $_GET['id'];
        $data = article::view($conn,$q);
        require("template/page/home.php");
    break;
}

?>