<?php
$xml = file_get_contents("config/connection.xml");
$xml = json_encode(simplexml_load_string($xml));
$xml = json_decode($xml,TRUE);

function msaccessConnection($server){
    try {
        $dbh = new PDO("odbc:DSN=MS Access Database;DBq=$database;");
    }catch(PDOException $e) {  
        echo $e->getMessage()."\n";
        exit;
    }
    # close the connection
    $dbh = null;
}

function sqliteConnection($server){

    if(!isset($server['dbname'])){
        return false;
    }else{
        $db = $server['dbname'];
        return  $db = new PDO("sqlite:data/".$db); 
    }
}

function pdoConnection($server){
    
    $servername = $server['host'];
    $user = $server['user'];
    $database = $server['dbn'];

    if(($server['pwd'] == "Null")||(is_array($server['pwd']))){
        $pwd = "";
        $port = "3066";
    }else{
        $pwd = $server['pwd']; 
        $port = $server['pwd'];
    } 

    try {
        $dsn = "mysql:dbname={$database};host={$servername}";
        return $dbh = new PDO($dsn, $user, $pwd);
    }catch(PDOException $e) {  
        echo $e->getMessage()."\n";
        exit;
    }
}

function sqlConnection($server){

    $servername = $server['host'];
    $username = $server['user'];
    $database = $server['dbn'];

    if(($server['pwd'] == "Null")||(is_array($server['pwd']))){
        $password = "";
        $port = "3066";
    }else{
        $password = $server['pwd']; 
        $port = $server['pwd'];
    } 
   
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        return $conn;
    }
}

if($SYSTEM['model'] === "online"){
    if($SYSTEM['connection'] === "sql"){
        $conn = sqlConnection($xml);
    }elseif($SYSTEM['connection'] === "pdo"){
        $conn = pdoConnection($xml);
    }
}else{
    $conn = sqliteConnection ($SYSTEM['sqlite']);
}

?>