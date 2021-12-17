<?php

function country_list(){
    return json_decode(file_get_contents("./config/country.json"),TRUE);
}

function call_code_list(){
    return json_decode(file_get_contents("./config/call_code.json"),TRUE);
}

function getClientCountry($ip){
    if($ip == "172.0.0.1"){
        return "localhost";
    }else{
         $country = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip={$ip}"));
        if(!isset($country->geoplugin_countryCode)){
            return "US";
        }else{
            return $country->geoplugin_countryCode;
        }
    }
}

function getClientIPDetails($ip){
    if($ip == "172.0.0.1"){
        return false;
    }else{
         $country = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip={$ip}"));
        if(!isset($country->geoplugin_countryCode)){
            return false;
        }else{
            return $country;
        }
    }
}

function FlutterwaveToken($key,$type){

    $key = $key['payment'];
    if($type == "pravite"){
        return "FLWSECK-".$key["PraviteKey"]."-X";
    }else{
        return "FLWPUBK-".$key["PublicKey"]."-X";
    }
}

function articles($data){

    if((!isset($data))||($data == false)){
        echo"";
    }else{
        foreach($data as $r){
            if(!isset($n)){
                $n = 1;
            }else{
                $n = $n + 1;
            }
            echo"
                <tr>
                    <td>{$n}</td>
                    <td>{$r['clock']}</td>
                    <td>{$r['title']}</td>
                    <td>{$r['dept']}</td>
                    <td>
                        <a href='?_admin=article&token={$_SESSION['token']}&id={$r['news_id']}' class=''>Edit</a>
                        <a href='?_submit=delete&id={$r['news_id']}' class=''>Delete</a>
                    </td>
                </tr>
            ";
        }
    }

}

function datasheet($data){

    if((!isset($data))||($data == false)){
        echo"";
    }else{
        foreach($data as $r){
            $id = $r['news_id']; 
            $title = $r['title'];
            $date = $r['clock'];
            $content = $r['news'];
            $dept = $r['dept'];

            if(!isset($r['image'])){
                $img = "article-img-01.jpg";
            }
            echo"
                <table border='0' cellspacing='0' cellspacing='' summary='' width='100%' align='center'>
                    <tr>
                    <!--td class='column sectionArticleImage' valign='top'>
                        <img src='{$img}' width='150' alt='' />
                    </td-->
                    <td class='column' valign='top'>
                        <table border='0' cellpadding='0' cellspacing='0' summary=''>
                            <tr><td class='sectionContentTitle' valign='top'>{$title}</td></tr>
                            <tr><td class='sectionContentSubTitle' valign='top'>Date: {$date} | School: {$dept}</td></tr>
                            <tr>
                                <td class='sectionContent' valign='top'>
                                    {$content}
                                </td>
                            </tr>
                            <tr>
                                <td class='buttonContainer'>
                                <table border='0' cellpadding='0' cellspacing='0' summary='' width='50%'>
                                    <tr><td class='button'><a href='?page=news&id={$id}' title='Lorem ipsum'>read more</a></td></tr>
                                </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    </tr>
                    <tr><td class='whitespace' height='20'>&nbsp;</td></tr>
                </table>
            ";

        }
    }
}
function setrow($r){
    $id = $r['news_id']; 
            $title = $r['title'];
            $date = $r['clock'];
            $content = $r['news'];
            $dept = $r['dept'];

            if(!isset($r['image'])){
                $img = "article-img-01.jpg";
            }
            echo"
                <table border='0' cellspacing='0' cellspacing='' summary='' width='100%' align='center'>
                    <tr>
                    <!--td class='column sectionArticleImage' valign='top'>
                        <img src='{$img}' width='150' alt='' />
                    </td-->
                    <td class='column' valign='top'>
                        <table border='0' cellpadding='0' cellspacing='0' summary=''>
                            <tr><td class='sectionContentTitle' valign='top'>{$title}</td></tr>
                            <tr><td class='sectionContentSubTitle' valign='top'>Date: {$date} | School: {$dept}</td></tr>
                            <tr>
                                <td class='sectionContent' valign='top'>
                                    {$content}
                                </td>
                            </tr>
                        </table>
                    </td>
                    </tr>
                    <tr><td class='whitespace' height='20'>&nbsp;</td></tr>
                </table>
            ";
}

?>