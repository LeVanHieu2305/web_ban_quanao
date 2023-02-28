<link rel="stylesheet" href="view/css/cart.css">
<div class="content">
        <div class="sale">
            <h1>GIẢM GIÁ| <span>Lên tới 50%</span><a href="">Xem thêm</a></h1>
        </div>

        <?php
        if((isset($_SESSION['giohang'])) && (count($_SESSION['giohang'])>0)){
        echo '<div class="gio">
            <table>
                <caption>GIỎ HÀNG CỦA BẠN</caption>
                <thead>
                    <tr>

                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>';
                $i=0;
                $tong =0;
                foreach($_SESSION['giohang'] as $item){
                    $tt = $item[3] * $item[4];
                    $tong=$tong+$tt;

                echo '<tbody id="giohang">
                    <tr>
                        <td>'.($i+1).'</td>
                        <td>'.$item[1].'</td>
                        <td><img src="./uploads/'.$item[2].'"</td>
                        <td>đ '.$item[3].'.000</td>
                        <td>'.$item[4].'</td>
                        <td>đ '.$tt.'.000</td>
                        <td><a href="index.php?act=delcart&id='.$i.'">Xóa</a></td>
                    </tr>
                </tbody>';
                $i++;
                }
                echo 
                '<tr id="tongdonhang">
                    <td colspan="5">Tổng đơn hàng</td>
                    <td>đ '.$tong.'.000</td>
                    <td></td>
                </tr>';
            echo '</table>';
        }
?>
        <div class="row_tom">
            <div class="row_botton">
                <a href="index.php">
                    <input type="button" value="Tiếp tục mua hàng">
                </a>
            </div>

            <div class="row_muangay">
                <a href="index.php?act=muahang">
                    <input type="button" value="Thanh toán">
                </a>
            </div>
        </div>
    </div>
        </div>


        <div class="line_ke">

        </div>

        <div class="danhgiatop">
            <div class="danhgia">
                <div class="tieude3">Đăng ký để nhận các khuyến mãi và thông tin sản phẩm mới</div>
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