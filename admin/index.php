<?php
    session_start();
    ob_start();
    if(isset($_SESSION['role']) && ($_SESSION['role']) == 1){
    include "../model/connetdb.php";
    connetdb();
    include "../model/danhmuc.php";
    include "../model/sanpham.php";

    include "view/header.php";
    if(isset($_GET['act'])){

        switch ($_GET['act']) {
            case 'login':
                include "view/login.php";
                break;
            case 'dssp':
                $kq=getall_sanpham();
                include "view/dssp.php";
                break;

            case 'sanpham':
                    //lấy ds danh mục
                    $dsdm = getall_dm();
                    //load sản phẩm
                    $kq = getall_sanpham();
                    include "view/sanpham.php";
                    break;

            case 'addsp':             
                if((isset($_POST['themmoi']))&&($_POST['themmoi'])){
                    $id_danhmuc=$_POST['id_danhmuc'];
                    $masp=$_POST['masp'];
                    $tensp=$_POST['tensp'];
                    // $size=$_POST['size']; 
                    $soluong=$_POST['sl']; 
                    $gia_goc=$_POST['gia_goc']; 
                    $giam_gia=$_POST['giam_gia']; 
                    
                    
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    $img=$target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // if($_FILES['hinh']['name']!="") $img=$_FILES['hinh']['name']; else $img="";
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "webp"
                    && $imageFileType != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG, WEBP & GIF files are allowed.";
                    $uploadOk = 0;
                    }
                    if($uploadOk==1){
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                        insert_sanpham($id_danhmuc,$masp,$tensp,$img,$soluong,$gia_goc,$giam_gia);
                    }
                    
                }
                //lấy ds danh mục
                $dsdm=getall_dm();
                //load sản phẩm
                $kq=getall_sanpham();
                
                include "view/sanpham.php";
                break;  

            case 'delsp':
                // include 'view/deldm.php';
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    delsp($id);
                }
                $kq = getall_sanpham();
                include 'view/dssp.php';
                break;

            case 'updatespform':
                //lấy ds danh mục
                $dsdm = getall_dm();
                //sp chi tiết theo getid
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $spct=getonesp($_GET['id']);
                }
                //load sản phẩm
                $kq=getall_sanpham();
                include "view/updatespform.php";
                break;

            case 'sanpham_add':
                //lấy ds danh mục
                $dsdm = getall_dm();
                //sp chi tiết theo getid
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $id = $_POST['id_sanpham'];
                        $masp = $_POST['masp'];
                        $tensp = $_POST['tensp'];
                        $soluong = $_POST['sl'];
                        $giam_gia = $_POST['giam_gia'];
                        $gia_goc = $_POST['gia_goc'];
                        $id_danhmuc = $_POST['id_danhmuc'];

                    if($_FILES["img"]["name"]!=""){
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        $img=$target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                        // if($_FILES['img']['name']!="") $img=$_FILES['img']['name']; else $img="";
                        // Allow certain file formats
                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "webp"
                        && $imageFileType != "gif" ) {
                        echo "Sorry, only JPG, JPEG, PNG, WEBP & GIF files are allowed.";
                        $uploadOk = 0;
                        }
                        if($uploadOk==1){
                            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                        }
                    }else{
                        $img="";
                    }
                    updatesp($id,$masp,$tensp,$img,$soluong,$giam_gia,$gia_goc,$id_danhmuc);
                }
                //load sản phẩm
                $kq=getall_sanpham();
                include "view/dssp.php";
                break;


            case 'danhmuc':
                include "view/danhmuc.php";
                break;

            case 'dsdm':
                $kq=getall_dm();
                include "view/dsdm.php";
                break;

            case 'adddm':
                // include 'view/deldm.php';
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $madm = $_POST['ma_danhmuc'];
                    $tendm = $_POST['ten_danhmuc'];
                    themdm($madm,$tendm);
                }
                $kq = getall_dm();
                include 'view/danhmuc.php';
                break;

            case 'deldm':
                // include 'view/deldm.php';
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    deldm($id);
                }
                $kq = getall_dm();
                include 'view/dsdm.php';
                break;

            case 'updatedmform':
                //lấy thông tin 1 record đúng với id truyền vào
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $kqone=getonedm($id);
                    // cần dsdm
                    $kq = getall_dm();
                    include 'view/updatedmform.php';
                }
                if(isset($_POST['id'])){
                    $id = $_POST['id'];
                    $madm = $_POST['ma_danhmuc'];
                    $tendm = $_POST['ten_danhmuc'];
                    updatedm($id,$madm,$tendm);
                    // cần dsdm
                    $kq = getall_dm();
                    include 'view/dsdm.php';
                    }
                    break;

                    case 'thoat':
                        if(isset($_SESSION['role']))  unset($_SESSION['role']);
                          header('location: login.php');
                          break;

            default:
                # code...
                break;
        }
    }
    include "view/home.php";

    include "view/footer.php";
}else{
    header('location:login.php');
}
?>