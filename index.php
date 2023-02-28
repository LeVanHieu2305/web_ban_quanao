<?php
    session_start();
    ob_start();
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang'] = [];
    include "model/connetdb.php";
    connetdb();
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/user.php";

    // load dữ liệu lên trang chủ

    $sphome1 = getall_sanpham(0,"");
    $dsdm = getall_dm();
    include "view/header.php";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
        
        switch ($act) {
            case 'product':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                }
                $dssp = getall_sanpham($id,"");
                include "view/ao.php";
                break;

            case 'sp_chi_tiet':
                include "view/sp_chi_tiet.php";
                break;

            case 'cart':
                include "view/cart.php";
                break;

            case 'giohang':
                //lấy dữ liệu về form
                if(isset($_POST['addtocart']) && ($_POST['addtocart'])){
                    $id=$_POST['id'];
                    $tensp=$_POST['tensp'];
                    $img=$_POST['img'];
                    $gia_goc=$_POST['gia_goc'];
                    if(isset($_POST['sl']) && ($_POST['sl']>0)){
                        $sl = $_POST['sl'];
                    }else{
                        $sl=1;
                    }
                    $fg=0;
                    //kiểm tra sản phẩm có tồn tại trong giỏ hàng hay không?
                    //nếu có chỉ cập nhật lại số lượng
                    $i=0;
                    foreach($_SESSION['giohang'] as $item){
                        if($item[1]===$tensp) {
                            $slnew=$sl+$item[4];
                            $_SESSION['giohang'][$i][4]=$slnew;
                            $fg=1;
                            break;
                        }
                        $i++;
                    }
                    //còn ngược lại add mới sp vào giỏ hàng
                    // khởi tạo 1 mảng con trước khi đưa vào giỏ hàng
                    if($fg==0){
                    $item=array($id,$tensp,$img,$gia_goc,$sl);
                    $_SESSION['giohang'][]=$item;
                    }
                    header('location: index.php?act=cart');
                }
                // include "view/giohang.php";
                break;
                    
            case 'delcart':
                if(isset($_GET['i'])&& ($_GET['i']>0)){
                    if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0))
                        array_splice($_SESSION['giohang'],$_GET['i'],1);
                }else{
                    if(isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
                }
    
                if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
                    header('location:index.php?act=cart');
                }else{
                    header('location:index.php');
                }
                break;

            case 'login':
                if(isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    $ten_user = $_POST['ten_user'];
                    $matkhau = $_POST['matkhau'];
                    $kq=getuserinfo($matkhau,$ten_user);
                    $role=$kq[0]['role'];
                    if($role==1){
                        $_SESSION['role'] =$role;
                        header('location: admin/index.php');
                    }else{
                            $_SESSION['role'] =$role;
                            $_SESSION['id_user'] =$kq[0]['id_user'];
                            $_SESSION['user'] =$kq[0]['ten_user'];
                            header('location: index.php');
                            break;
                        }
                }
                include "view/login.php";
                break;

            case 'register':
                if(isset($_POST['dangky']) && ($_POST['dangky'])){
                    $ten_user = $_POST['ten_user'];
                    $sdt_user = $_POST['sdt_user'];
                    $email_user = $_POST['email_user'];
                    $matkhau = $_POST['matkhau'];
                    adduser($ten_user, $sdt_user, $email_user, $matkhau);
                    $thongbao ="Đăng ký tài khoản thành công. Vui lòng đăng nhập để thực hiện các chức năng";
                }
                include "view/register.php";
                break;

            case 'ao':
                include "view/ao.php";
                break;

            case 'aothun':
                include "view/aothun.php";
                break;

            case 'aopolo':
                include "view/aopolo.php";
                break;


            case 'aokhoac':
                include "view/aokhoac.php";
                break;

            case 'aokhoacTD':
                include "view/aokhoacTD.php";
                break;

            case 'aolen':
                include "view/aolen.php";
                break;
            
            case 'aosomi':
                include "view/aosomi.php";
                break;

            case 'aovest':
                include "view/aovest.php";
                break;

            case 'balo':
                include "view/balo.php";
                break;
                                
            case 'bophoi':
                include "view/bophoi.php";
                break;

            case 'cavat_no':
                include "view/cavat_no.php";
                break;

            case 'dolot':
                include "view/dolot.php";
                break;

            case 'giay':
                include "view/giay.php";
                break;

            case 'kinh':
                include "view/kinh.php";
                break;

            case 'mu_baotay':
                include "view/mu_baotay.php";
                break;

            case 'quan':
                if(isset($_GET['id']) && ($_GET['id']>0)){
                    $id = $_GET['id'];
                }
                $dssp = getall_sanpham($id,"");
                include "view/quan.php";
                break;

            case 'quanjean':
                include "view/quanjean.php";
                break;

            case 'quanshort':
                include "view/quanshort.php";
                break;

            case 'quantay':
                include "view/quantay.php";
                break;

            case 'thatlung':
                include "view/thatlung.php";
                break;

            case 'vi':
                include "view/vi.php";
                break;

            case 'vo':
                include "view/vo.php";
                break;
            
            default:
                include "view/home.php";
                break;
        }
    }else{
        include "view/home.php";
    }

    include "view/footer.php";


?>