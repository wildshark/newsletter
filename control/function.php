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

?>