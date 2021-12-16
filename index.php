<?php
/*
    * The code, text, PHP logo, and graphical elements on this website and the mirror websites (the "Site") are Copyright © 2001-2021 The PHP Group. All rights reserved.
    *
    * Except as otherwise indicated elsewhere on this Site, you are free view, download and print the documents and information available on this Site subject to the following conditions:
    *
    * You may not remove any copyright or other proprietary notices contained in the documents and information on this Site.
    * The rights granted to you constitute a license and not a transfer of title.
    * The rights specified above to view, download and print the documents and information available on this Site are not applicable to the graphical elements, design or layout of this Site. These elements of the Site are protected by trade dress and other laws and may not be copied or imitated in whole or in part.
    * You can contact the webmaster at php-webmaster@lists.php.net.

    * For more information on the PHP Group and the PHP project, please see https://php.net.
*/
session_start();
if(!file_exists("config/config.json")){
    echo"Missing congifuration file";
    exit;
}else{
    $_CONFIG = json_decode(file_get_contents("config/config.json"),TRUE);
    $SYSTEM = $_CONFIG['config'];

    /*module*/
    include("module/modular/user.php");
    include("module/modular/article.php");
    //include("module/user.php");
   
    /*function*/
    include("control/db.php");
    include("control/global.php");
    include("control/control.php");
    include("control/function.php");
    include("control/template.php");

    if(!$_SESSION['auth']) {
        header('location:index.php');
      }else{
        $currentTime = time();
        if($currentTime > $_SESSION['expire']) {
            session_unset();
            session_destroy();
            header('location:index.php');
        }else{
            /*payment gateway*/
            //$f_prakey = FlutterwaveToken($SYSTEM,"pravite");
            //$f_pubkey = FlutterwaveToken($SYSTEM,"public");
            //$get_country = getClientCountry($ip);
            if(!isset($_REQUEST['_submit'])){
                if(!isset($_REQUEST['page'])){
                    if(!isset($_REQUEST['_admin'])){
                        if(!isset($_REQUEST['_client'])){
                            session_destroy();
                            $data = article::fetch($conn);
                            require("template/page/home.php");
                            exit;
                        }else{
                            require("module/client.navigation.php");
                        }
                    }else{
                        require("module/admin.navigation.php");
                    }
                }else{
                    require("module/page.php");
                }
            }else{
                require("module/module.php");
                header("location: ?".http_build_query($url));
            }    
        }
    }
}
?>