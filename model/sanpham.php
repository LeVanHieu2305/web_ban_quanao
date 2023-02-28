<?php
        function updatesp($id,$masp,$tensp,$img,$sl,$giam_gia,$gia_goc,$id_danhmuc){
            $conn=connetdb();
            if($img==""){
                $sql = "UPDATE sanpham SET masp ='".$masp."', tensp ='".$tensp."', soluong ='".$sl."', giam_gia ='".$giam_gia."',gia_goc ='".$gia_goc."',id_danhmuc ='".$id_danhmuc."' WHERE id_sanpham=".$id;
            }else{
                $sql = "UPDATE sanpham SET masp ='".$masp."',tensp ='".$tensp."', img ='".$img."',soluong ='".$sl."',giam_gia ='".$giam_gia."', gia_goc ='".$gia_goc."',id_danhmuc ='".$id_danhmuc."' WHERE id_sanpham=".$id;
            }
            // Prepare statement
            $stmt = $conn->prepare($sql);
            // execute the query
            $stmt->execute();
        }

        function getonesp($id){
            $conn=connetdb();
            $stmt = $conn->prepare("SELECT * FROM sanpham WHERE id_sanpham = ".$id);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $kq=$stmt->fetchAll();
            return $kq;
        }
        function delsp($id){
            $conn=connetdb();
            $sql = "DELETE FROM sanpham WHERE id_sanpham =".$id;
            // use exec() because no results are returned
            $conn->exec($sql);
        }
        function insert_sanpham($id_danhmuc,$masp,$tensp,$img,$soluong,$gia_goc,$giam_gia){
            $conn=connetdb();
            $sql = "INSERT INTO sanpham (id_danhmuc,masp,tensp,img,soluong,gia_goc,giam_gia) VALUES ('".$id_danhmuc."','".$masp."','".$tensp."','".$img."', '".$soluong."', '".$gia_goc."', '".$giam_gia."')";
            // use exec() because no results are returned
            $conn->exec($sql);
        }

    //     // function getall_sanpham($id_danhmuc=0,$kyw=""){
    //     //     $conn=connetdb();
    //     //     $sql="SELECT * FROM sanpham WHERE 1";
    //     //     if($id_danhmuc>0) $sql.=" AND id=".$id_danhmuc;
    //     //     if($kyw!="") $sql.=" AND tensp like '%".$kyw."%'";
    //     //     $sql.=" order by id DESC";
    //     //     $stmt = $conn->prepare($sql);
    //     //     $stmt->execute();
    //     //     //trả về một mảng
    //     //     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //     //     $kq=$stmt->fetchAll();
    //     //     return $kq;
    //     // }

    //     function getall_sanpham($id_danhmuc=0,$kyw=""){
    //         $conn=connetdb();
    //         $sql="SELECT * FROM sanpham WHERE 1";
    //         if($id_danhmuc>0) $sql.=" AND id_danhmuc=".$id_danhmuc;
    //         if($kyw!="") $sql.=" AND tensp like '%".$kyw."%'";
    //         $sql.=" order by id DESC";
    //         $stmt = $conn->prepare($sql);
    //         $stmt->execute();
    //         $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    //         $kq=$stmt->fetchAll();
    //         return $kq;
    // }

    function getall_sanpham($iddm=0, $kyw=""){
            $conn=connetdb();
            $sql="SELECT * FROM sanpham WHERE 1";
            if($iddm>0) $sql.=" AND id_danhmuc=".$iddm;
            if($kyw!="") $sql.=" AND tensp like '%".$kyw."%'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $kq=$stmt->fetchAll();
            return $kq;
        }
    function showpro($ds){
        foreach($ds as $sp){
            if($sp['giam_gia'] == 0){
                $giam_gia = 'Đang cập nhập';
            }else{
                if($sp['gia_goc']>0){
                    $giam_gia = '<span>$'.$sp['gia_goc'].'</span>$'.$sp['giam_gia'];
                }else{
                    $giam_gia = '$'.$sp['giam_gia'];
                }
            }
            echo '<div class="list">
                        <form action="index.php?act=giohang" method="post">
                            <a href="index.php?act=sp_chi_tiet">
                                <img src="./uploads/'.$sp['img'].'" alt="">
                                <div class="ngang2">
                                    <div class="them_giohang2">
                                        <p>'.$sp['tensp'].'</p>
                                        <span>đ '.$sp['gia_goc'].'.000</span>
                                    </div>
                            </a>
                                    <div class="banchay2">
                                        <a href="" name="addtocart"><i class="ti-shopping-cart"></i></a>
                                    </div>
                                </div>
                            <input type="submit" value=" Mua ngay" name="addtocart">
                            <input type="hidden" value="'.$sp['id_sanpham'].'" name="id_sanpham">
                            <input type="hidden" value="'.$sp['tensp'].'" name="tensp">
                            <input type="hidden" value="'.$sp['img'].'" name="hinh">
                            <input type="hidden" value="'.$sp['gia_goc'].'" name="gia_goc">
                            </form>
                        </div>';
        }
    }
    


?>