<?php
    function adduser($ten_user, $sdt_user, $email_user, $matkhau){
            $conn=connetdb();
            $sql = "INSERT INTO user (ten_user, sdt_user, email_user, matkhau) VALUES ('".$ten_user."','".$sdt_user."' ,'".$email_user."' ,'".$matkhau."' )";
            // use exec() because no results are returned
            $conn->exec($sql);
        }
    
        function checkuser($matkhau,$ten_user){
            $conn=connetdb();
            $stmt = $conn->prepare("SELECT * FROM user WHERE ten_user ='".$ten_user."' AND matkhau='".$matkhau."'");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $kq=$stmt->fetchAll();
            if(count($kq)>0) return $kq[0]['role'];
            else return 0;
        }

        function getuserinfo($matkhau,$ten_user){
            $conn=connetdb();
            $stmt = $conn->prepare("SELECT * FROM user WHERE matkhau ='".$matkhau."' AND ten_user='".$ten_user."'");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $kq=$stmt->fetchAll();
            return $kq;
        }
?>