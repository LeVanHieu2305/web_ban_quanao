<?php
    function deldm($id){
        $conn=connetdb();
        $sql = "DELETE FROM danhmuc WHERE id_danhmuc=".$id;
        // use exec() because no results are returned
        $conn->exec($sql);
    }

    function updatedm($id,$ma_danhmuc,$ten_danhmuc){
        $conn=connetdb();
        $sql = "UPDATE danhmuc SET ma_danhmuc ='".$ma_danhmuc."' ,ten_danhmuc ='".$ten_danhmuc."' WHERE id_danhmuc=".$id;
        // Prepare statement
        $stmt = $conn->prepare($sql);
        // execute the query
        $stmt->execute();
    }

    function getonedm($id){
        $conn=connetdb();
        $stmt = $conn->prepare("SELECT * FROM danhmuc WHERE id_danhmuc = ".$id);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }

    function getall_dm(){
        $conn=connetdb();
        $stmt = $conn->prepare("SELECT * FROM danhmuc");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq=$stmt->fetchAll();
        return $kq;
    }
    function themdm($ma_danhmuc,$ten_danhmuc){
        $conn=connetdb();
        $sql = "INSERT INTO danhmuc (ma_danhmuc,ten_danhmuc) VALUES ('".$ma_danhmuc."','".$ten_danhmuc."')";
        // use exec() because no results are returned
        $conn->exec($sql);
    }
?>