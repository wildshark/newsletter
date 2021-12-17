<?php


if(!isset($_REQUEST["_submit"])){
    $url['action'] =="missing-request";
}else{
    $submit = explode("-",$_REQUEST["_submit"]);
    $_module = $submit[0];
    $_action = $submit[1];

    switch($_module){

        case"user";
            if($_action === "login"){
                $q[] = $_REQUEST['username'];
                $q[] = $_REQUEST['password'];
                    if(false == user::login($conn,$q)){
                        header("location: ?page=login");
                        exit;
                    }else{
                        $md5 = uniqid();
                        $url['_admin'] ="dashboard";
                        $url['token'] = $_SESSION['token'] = $md5;
                    }    
                }elseif($_action === "register"){
                $q[] = $_REQUEST['username'];
                $q[] = $_REQUEST['email'];
                $q[] = $_REQUEST['password'];

            }elseif($_action === "recovery"){
                $q[] = $_REQUEST['email'];

            }
        break;
        
        case"article";
            if($_action ==="add"){
                $q[] = date("d-m-y H:i:s");
                $q[] = $_REQUEST['title'];
                $q[] = $_REQUEST['article'];
                $q[] = $_REQUEST['dept'];
                $q[] = "active";
                $response = article::add($conn,$q);
            }elseif($_action ==="update"){
                $q[] = $_REQUEST['title'];
                $q[] = $_REQUEST['article'];
                $q[] = $_REQUEST['dept'];
                $q[] = "active";
                $q[] = $_SESSION['acticle_id'];
                $response = article::update($conn,$q);
            }
            if(false === $response){
                $url['_admin'] ="dashboard";
                $url['token'] = $_SESSION['token'];
                $url['err'] = 100;
            }else{
                $url['_admin'] ="dashboard";
                $url['token'] = $_SESSION['token'];
                $url['err'] = 200;
            }
        break;
    }
}




?>