<?php

switch($_REQUEST['_admin']){

    case"dashboard";
        $data = article::fetch($conn);
        require("template/admin/dashbaord.php");
    break;

    case"article";
        if(!isset($_GET['id'])){
            $page['title'] = "New Article";
            $article['title'] ="";
            $article['dept']="";
            $article['news']="";
            $btn = "article-add";
        }else{
            $q[] = $_SESSION['acticle_id'] = $_GET['id'];
            $article = article::view($conn,$q);
            if(false == $article ){
                $page['title'] = "New Article";
                $article['title'] ="";
                $article['dept']="";
                $article['news']="";
                $btn = "article-add";
            }else{
                $page['title'] = "Update Article";
                $btn = "article-update";
            }
        }
        require("template/admin/article.php");
    break;


}

?>