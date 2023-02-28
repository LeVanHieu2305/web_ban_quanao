<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zanhiu</title>
    <script src="view/slide.js"></script>
    <!-- favicon -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest"> -->
    <!-- favicon -->
    <link rel="icon" href="view/image/logo_icon1.png">
    <link rel="stylesheet" href="view/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="view/fontawesome-free-6.2.1/css/all.min.css">
    <link rel="stylesheet" href="view/css/style.css">
</head>

<body>
    <div class="container">
        <!-- <div class="free">
            <span>
                <i class="fa-solid fa-truck-ramp-box"></i>
                MIỄN PHÍ đổi hàng 30 ngày
            </span>

            <span>
                <i class="fa-solid fa-truck-fast"></i>
                FREESHIP giao hàng đơn từ 300K
            </span>
        </div> -->

        <div class="hea">
            <div class="hea_2">
                <div class="menu">
                    <ul class="menu_c1">
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="#">Danh mục</a>
                            <ul>

                                <?php
                                    $dsdm = getall_dm();
                                    foreach($dsdm as $dm){
                                        echo '<li>
                                        <a href="index.php?act=product&id='.$dm['id_danhmuc'].'">'.$dm['ten_danhmuc'].'</a>
                                        </li>';
                                    }
                                ?>
                                <!-- <li><a href="index.php?act=ao">Áo</a></li>
                                <li><a href="index.php?act=quan">Quần</a></li>
                                <li><a href="index.php?act=giay">Giày</a></li>
                                <li><a href="index.php?act=kinh">Kính</a></li>
                                <li><a href="index.php?act=mu_baotay">Mũ & Bao tay</a></li>
                                <li><a href="index.php?act=balo">Balo & Túi đeo chéo</a></li> -->
                            </ul>
                        </li>

                        <!-- <li><a href="index.html">Áo</a>
                            <ul>
                                <li><a href="aothun.html">Áo Thun</a></li>
                                <li><a href="aopolo.html">Áo Polo</a></li>
                                <li><a href="aosomi.html">Áo Sơ Mi</a></li>
                                <li><a href="aokhoac.html">Áo Khoác</a></li>
                                <li><a href="aolen.html">Áo Len</a></li>
                                <li><a href="aokhoacTD.html">Áo Khoác Thu/Đông</a></li>
                                <li><a href="aovest.html">Áo Vest</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Quần</a>
                            <ul>
                                <li><a href="quantay.html">Quần Tây Âu</a></li>
                                <li><a href="quanjean.html">Quần Jean</a></li>
                                <li><a href="quanshort.html">Quần Short</a></li>
                                <li><a href="dolot.html">Đồ lốt</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Phụ kiện</a>
                            <ul>
                                <li><a href="giay.html">Giày</a></li>
                                <li><a href="mu_baotay.html">Mũ & Bao tay</a></li>
                                <li><a href="vi.html">Ví</a></li>
                                <li><a href="vo.html">Vớ</a></li>
                                <li><a href="cavat_no.html">Cà vạt & Nơ</a></li>
                                <li><a href="kinh.html">Kính đeo</a></li>
                                <li><a href="thatlung.html">Thắt lưng</a></li>
                                <li><a href="balo.html">Balo & Túi đeo chéo</a></li>
                            </ul>
                        </li> -->
                        <li><a href="index.php?act=bophoi">Bộ phối</a>
                            <!-- <ul>
                                <li><a href="aothun.html">Áo thun</a></li>
                                <li><a href="aokhoac.html">Áo khoác</a></li>
                                <li><a href="aopolo.html">Áo polo</a></li>
                                <li><a href="aosomi.html">Áo sơ mi</a></li>
                                <li><a href="quantay.html">Quần tây âu</a></li>
                                <li><a href="quanjean.html">Quần jean</a></li>
                                <li><a href="quanshort.html">Quần short</a></li>
                                <li><a href="dobo.html">Đồ bộ</a></li>
                            </ul> -->
                        </li>
                        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="logo">
                    <a href="index.php">Zanhiu</a>
                </div>
                <div class="icon">
                    <span>
                        <a href="#" id="search"><i class="ti-search"></i></a>
                        <!-- <input type="text" id="search_input" placeholder="Tìm kiếm sản phẩm"> -->
                    </span>

                    <span>
                        <a href="#"><i class="ti-bell"></i></a>
                    </span>

                    <?php
                    if(isset($_SESSION['ten_user']) && ($_SESSION['ten_user']!="")){
                        echo '<a href="index.php?act=userinfo">'.$_SESSION['ten_user'].' </a>';
                        echo '<a href="index.php?act=thoat"> Thoát</a>';
                    }else{
                    ?>
                    <span>
                        <a href="index.php?act=login"><i class="ti-user"></i></a>
                    </span>
                    
                <?php }?>

                <?php
                    if(isset($_SESSION['ten_user']) && ($_SESSION['ten_user']!="")){
                        echo '<a href="index.php?act=userinfo">'.$_SESSION['ten_user'].' </a>';
                        echo '<a href="index.php?act=thoat"> Thoát</a>';
                    }else{
                ?>
                <!-- <a href="index.php?act=dangnhap"> <i class="fa-solid fa-user"></i></a> -->
                <?php }?>

                    <!-- <a href=""><i class="fa-regular fa-heart"></i></a> -->
                    <span>
                        <a href="index.php?act=cart"><i class="ti-shopping-cart-full"></i></a>
                    </span>

                </div>
            </div>
        </div>
    </div>