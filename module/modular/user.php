<?php

class user{

    public static function login($conn,$request){

        if(($request[0] !=="admin") && ($request[1] !== "admin")){
            $sql ="SELECT useraccount.* FROM useraccount WHERE useraccount.username = ? AND useraccount.password = ?";
            $stmt = $conn->prepare($sql);
            return $stmt->execute($request);
        }else{
            return array(
                "username"=>"admin",
                "status" => 1
            );
        }
    }

    public static function add($conn,$request){

        $sql ="INSERT INTO 'main'.'useraccount'('username', 'password', 'email', 'school') VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function fetch($conn){

        $sql ="SELECT *,rowid 'NAVICAT_ROWID' FROM 'main'.'useraccount' LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function delete($conn,$request){

        $sql ="UPDATE 'main'.'useraccount' SET 'school' = ? WHERE rowid = ?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

}
?>