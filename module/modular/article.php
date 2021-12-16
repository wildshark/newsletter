<?php

class article{

    public static function add($conn,$request){

        $sql ="INSERT INTO 'main'.'news'('clock', 'title', 'news', 'dept', 'status') VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);
    }

    public static function update($conn,$request){

        $sql ="UPDATE 'main'.'news' SET 'title' =?, 'news' =?, 'dept' =?, 'status' = ? WHERE rowid = ?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);

    }

    public static function fetch($conn){

        $sql ="SELECT *,rowid 'NAVICAT_ROWID' FROM 'main'.'news' LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();

    }

    public static function view($conn,$request){

        $sql ="SELECT news.* FROM  news WHERE news.news_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute($request);

        return $stmt->fetch();
    }

    public static function delete($conn,$request){

        $sql ="DELETE FROM 'main'.'news' WHERE rowid = ?";
        $stmt = $conn->prepare($sql);
        return $stmt->execute($request);

    }
}

?>