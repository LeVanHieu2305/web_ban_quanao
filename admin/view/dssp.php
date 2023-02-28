<link rel="stylesheet" href="view/css/dsdm.css">
<div class="main">
    <h2>Danh sách sản phẩm</h2>
    <div class="row_table">
        <table>
            <tr>
                <th></th>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Giá gốc/Sản phẩm</th>
                <th>Giảm giá</th>
                <th>Hành động</th>
            </tr>
            <?php
                // echo var_dump($kq);
                if(isset($kq) && (count($kq)>0)){
                    $i = 1;
                    foreach($kq as $sp){
                        echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$sp['masp'].'</td>
                                <td>'.$sp['tensp'].'</td>
                                <td><img src="'.$sp['img'].'" width="80px"></td>
                                <td>'.$sp['soluong'].'</td>
                                <td>'.$sp['gia_goc'].'</td>
                                <td>'.$sp['giam_gia'].'</td>
                                <td><a href="index.php?act=updatespform&id='.$sp['id_sanpham'].'">Sửa</a> | <a href="index.php?act=delsp&id='.$sp['id_sanpham'].'">Xóa</a></td>
                            </tr>';
                            $i++;
                    }
                }
            ?>
        </table>
    </div>

    <div class="row_botton">
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=sanpham">
            <input type="button" value="Nhập thêm">
        </a>
    </div>
</div>