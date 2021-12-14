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

function datasheet($data){

    if((!isset($data))||($data == false)){
        echo"";
    }else{
        foreach($data as $r){
            $title = $r['title'];
            $content = $r[''];
            echo"
                <table border='0' cellspacing='0' cellspacing='' summary='' width='100%' align='center'>
                    <tr>
                    <td class='column sectionArticleImage' valign='top'>
                        <img src='article-img-18.jpg' width='150' alt='' />
                    </td>
                    <td class='column' valign='top'>
                        <table border='0' cellpadding='0' cellspacing='0' summary=''>
                        <tr><td class='sectionContentTitle' valign='top'>{$title}</td></tr>
                        <tr><td class='sectionContentSubTitle' valign='top'>Lorem ipsum: Sed eleifend</td></tr>
                        <tr>
                            <td class='sectionContent' valign='top'>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Vestibulum lectus leo, placerat ut odio tincidunt, mattis
                            rhoncus ligula. Morbi vitae sollicitudin ligula.
                            </td>
                        </tr>
                        <tr>
                            <td class='buttonContainer'>
                            <table border='0' cellpadding='0' cellspacing='0' summary='' width='50%'>
                                <tr><td class='button'><a href='#' title='Lorem ipsum'>Lorem ipsum</a></td></tr>
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

?>