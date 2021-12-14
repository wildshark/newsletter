<?php

$_SESSION['auth'] = true;
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60); //session for 30min

function MailBox($data){
    
}

function SmsBox($string){

    file_get_contents();

}

function shell_stream($data){

    $xml = file_get_contents("config/shell.xml");
    $xml = json_encode(simplexml_load_string($xml));
    $url = json_decode($xml,TRUE);
    
    //echo http_build_query($data);
    //exit();
    $options = array(
        'http'=> array(
        'method'=> "POST",
        'header'=>
            "Accept-language: en\r\n".
            "Content-type: application/x-www-form-urlencoded\r\n",
            'content'=>http_build_query($data)
        )
    );
          
    $context = stream_context_create($options);
          
    $fp = fopen($url['live'],'rb',false,$context);
    $response = stream_get_contents($fp);
    $result = json_decode($response,true);
    return $result;    
}

function shell_encrypt($data){

    $xml = file_get_contents("config/shell.xml");
    $xml = json_encode(simplexml_load_string($xml));
    $url = json_decode($xml,TRUE);

    // Store the cipher method
    $ciphering = "AES-128-CTR";
  
    // Use OpenSSl Encryption method
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
  
    // Non-NULL Initialization Vector for encryption
    $encryption_iv = '1234567891011121';
  
    // Store the encryption key
    $encryption_key = "GeeksforGeeks";
  
    // Use openssl_encrypt() function to encrypt the data
    $data = json_encode($data);
    $encryption = openssl_encrypt($data, $ciphering, $encryption_key, $options, $encryption_iv);
   
    $postdata = [
        'user_type' => "admin",
        'data' => $encryption
    ];

    $opts = [
        'http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => json_encode($postdata)
        ]
    ];

    $context = stream_context_create($opts);
    $response = file_get_contents($url['stage'],false, $context);
    //var_dump($response);
    //exit;
    return json_decode($response,true);

}
?>