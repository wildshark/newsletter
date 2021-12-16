<?php

switch($_REQUEST['page']){
    
    case"admin";
        require("template/admin/login.php");
    break;
}

?>