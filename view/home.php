<div class="content">
        <div class="slide">
            <div class="show">
                <img id="hinh" src="view/image/slide_show/HINH1.png" alt="">
            </div>
        </div>
        <div class="banner_left">
            <div class="baosp">
                <div class="h1">
                    <h1>Sale Items</h1>
                    <a href="#">Xem thêm</a>
                </div>
                <div class="sps">
                    <div class="sps1">
                        <div class="a1">
                            <img src="view/image/Sale_Items/sale1.webp" alt="">
                        </div>
                        <div class="ngang">
                            <div class="them_giohang">
                                <p>Áo Polo nam</p>
                                <span>đ99,000</span>
                            </div>
                            <div class="banchay">
                                <a href=""><i class="ti-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="sps1">
                        <div class="a1">
                            <img src="view/image/Sale_Items/sale2.webp" alt="">
                        </div>
                        <div class="ngang">
                            <div class="them_giohang">
                                <p>Áo Polo nam</p>
                                <span>đ 99,000</span>
                            </div>
                            <div class="banchay">
                                <a href=""><i class="ti-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="sps1">
                        <div class="a1">
                            <img src="view/image/Sale_Items/sale3.jpg" alt="">
                        </div>
                        <div class="ngang">
                            <div class="them_giohang">
                                <p>Áo Polo nam</p>
                                <span>đ 99,000</span>
                            </div>
                            <div class="banchay">
                                <a href=""><i class="ti-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="sps1">
                        <div class="a1">
                            <img src="view/image/Sale_Items/sale4.webp" alt="">
                        </div>
                        <div class="ngang">
                            <div class="them_giohang">
                                <p>Áo Polo nam</p>
                                <span>đ 99,000</span>
                            </div>
                            <div class="banchay">
                                <a href=""><i class="ti-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="sps1">
                        <div class="a1">
                            <img src="view/image/Sale_Items/sale5.webp" alt="">
                        </div>
                        <div class="ngang">
                            <div class="them_giohang">
                                <p>Áo Polo nam</p>
                                <span>đ 99,000</span>
                            </div>
                            <div class="banchay">
                                <a href=""><i class="ti-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product_sum">
            <div class="text2">
                <h1>Sản phẩm mới nhất</h1>
                <a href="">Filter <i class="fa-solid fa-filter"></i></a>
            </div>
            <div class="product_list">
                <?php
                    foreach($sphome1 as $sp){
                        echo '<div class="list">
                        <form action="index.php?act=giohang" method="post">
                                <a href="index.php?act=sp_chi_tiet">
                                    <img src="./uploads/'.$sp['img'].'" alt="">
                                    <div class="ngang2">
                                        <div class="them_giohang2">
                                            <p>'.$sp['tensp'].'</p>
                                            <span>'.$sp['gia_goc'].'</span>
                                        </div>
                                        </a>
                                        <div class="banchay2">
                                            <a href=""><i class="ti-shopping-cart"></i></a>
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
                ?>
                <!-- <div class="list">
                    <a href="index.php?act=sp_chi_tiet">
                        <img src="view/image/New product/new1.webp" alt="">
                        <div class="ngang2">
                            <div class="them_giohang2">
                                <p>Áo Polo nam</p>
                                <span>đ 99,000</span>
                            </div>
                            <div class="banchay2">
                                <a href=""><i class="ti-shopping-cart"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="list">
                    <a href="index.php?act=sp_chi_tiet">
                        <img src="view/image/New product/new2.webp" alt="">
                        <div class="ngang2">
                            <div class="them_giohang2">
                                <p>Áo Polo nam</p>
                                <span>đ 99,000</span>
                            </div>
                            <div class="banchay2">
                                <a href=""><i class="ti-shopping-cart"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="list">
                    <a href="index.php?act=sp_chi_tiet">
                        <img src="view/image/New product/new3.webp" alt="">
                        <div class="ngang2">
                            <div class="them_giohang2">
                                <p>Áo Polo nam</p>
                                <span>đ 99,000</span>
                            </div>
                            <div class="banchay2">
                                <a href=""><i class="ti-shopping-cart"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="list">
                    <a href="index.php?act=sp_chi_tiet">
                        <img src="view/image/New product/new4.webp" alt="">
                        <div class="ngang2">
                            <div class="them_giohang2">
                                <p>Áo Polo nam</p>
                                <span>đ 99,000</span>
                            </div>
                            <div class="banchay2">
                                <a href=""><i class="ti-shopping-cart"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="list">
                    <a href="index.php?act=sp_chi_tiet">
                        <img src="view/image/New product/new5.webp" alt="">
                        <div class="ngang2">
                            <div class="them_giohang2">
                                <p>Áo Polo nam</p>
                                <span>đ 99,000</span>
                            </div>
                            <div class="banchay2">
                                <a href=""><i class="ti-shopping-cart"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="list">
                    <a href="index.php?act=sp_chi_tiet">
                        <img src="view/image/New product/new6.webp" alt="">
                        <div class="ngang2">
                            <div class="them_giohang2">
                                <p>Áo Polo nam</p>
                                <span>đ 99,000</span>
                            </div>
                            <div class="banchay2">
                                <a href=""><i class="ti-shopping-cart"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="list">
                    <a href="index.php?act=sp_chi_tiet">
                        <img src="view/image/New product/new7.webp" alt="">
                        <div class="ngang2">
                            <div class="them_giohang2">
                                <p>Áo Polo nam</p>
                                <span>đ 99,000</span>
                            </div>
                            <div class="banchay2">
                                <a href=""><i class="ti-shopping-cart"></i></a>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="list">
                    <a href="index.php?act=sp_chi_tiet">
                        <img src="view/image/New product/new8.webp" alt="">
                        <div class="ngang2">
                            <div class="them_giohang2">
                                <p>Áo Polo nam</p>
                                <span>đ 99,000</span>
                            </div>
                            <div class="banchay2">
                                <a href=""><i class="ti-shopping-cart"></i></a>
                            </div>
                        </div>
                    </a>
                </div> -->


            </div>
        </div>

        <div class="banner">
            <div class="banner1">
                <img src="view/image/banner/banner1.png" alt="">
            </div>

            <div class="banner2">
                <img src="view/image/banner/banner2.png" alt="">
            </div>
        </div>

        <div class="topheart">
            <div class="baosp">
                <div class="h1">
                    Top sản phẩm yêu thích
                </div>
                <div class="sps">
                    <div class="sps1">
                        <div class="a1">
                            <img src="view/image/Product_heart/heart1.webp" alt="">
                        </div>
                        <div class="ngang">
                            <p>Áo Polo</p>
                            <i class="fa-solid fa-heart"></i>
                        </div>
                    </div>

                    <div class="sps1">
                        <div class="a1">
                            <img src="view/image/Product_heart/heart2.webp" alt="">
                        </div>
                        <div class="ngang">
                            <p>Áo Polo</p>
                            <i class="ti-heart"></i>
                        </div>
                    </div>
                    <div class="sps1">
                        <div class="a1">
                            <img src="view/image/Product_heart/heart3.webp" alt="">
                        </div>
                        <div class="ngang">
                            <p>Áo Polo</p>
                            <i class="ti-heart"></i>
                        </div>
                    </div>
                    <div class="sps1">
                        <div class="a1">
                            <img src="view/image/Product_heart/heart4.webp" alt="">
                        </div>
                        <div class="ngang">
                            <p>Áo Polo</p>
                            <i class="fa-solid fa-heart"></i>
                        </div>
                    </div>
                    <div class="sps1">
                        <div class="a1">
                            <img src="view/image/Product_heart/heart5.webp" alt="">
                        </div>
                        <div class="ngang">
                            <p>Áo Polo</p>
                            <i class="ti-heart"></i>
                        </div>
                    </div>
                    <div class="sps1">
                        <div class="a1">
                            <img src="view/image/Product_heart/heart6.webp" alt="">
                        </div>
                        <div class="ngang">
                            <p>Áo Polo</p>
                            <i class="ti-heart"></i>
                        </div>
                    </div>
                    <div class="sps1">
                        <div class="a1">
                            <img src="view/image/Product_heart/heart7.webp" alt="">
                        </div>
                        <div class="ngang">
                            <p>Áo Polo</p>
                            <i class="ti-heart"></i>
                        </div>
                    </div>
                    <div class="sps1">
                        <div class="a1">
                            <img src="view/image/Product_heart/heart8.webp" alt="">
                        </div>
                        <div class="ngang">
                            <p>Áo Polo</p>
                            <i class="fa-solid fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="phoido">
            <div class="text3">Phối đồ cùng Zanhiu</div>
            <div class="phoido1">
                <img src="view/image/Phoi_do/abc4.jpg">
                <img src="view/image/Phoi_do/phoido4.webp">
                <img src="view/image/Phoi_do/abc3.jpg">
            </div>
        </div>
    </div>

    <div class="mix">
        <div class="ggmap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d251637.95196238213!2d105.6189045!3d9.779349!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1655340223317!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="danhgiatop">
            <div class="danhgia">
                <div class="tieude3">Đăng ký để nhận các khuyến mãi <br> và thông tin sản phẩm mới</div>
                <div class="thongtin">
                    <div class="new">
                        <div class="tt">
                            <input type="text" placeholder="Nhập email của bạn" name="email" id="email">
                        </div>

                        <div class="bot">
                            <input type="submit" value="Đăng ký">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>