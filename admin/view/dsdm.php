<link rel="stylesheet" href="view/css/dsdm.css">
<div class="main">
    <h2>Danh sách danh mục</h2>
    <div class="row_table">
        <table>
            <tr>
                <th></th>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Độ ưu tiên</th>
                <th>Hành động</th>
            </tr>
            <?php
                // echo var_dump($kq);
                if(isset($kq) && (count($kq)>0)){
                    $i = 1;
                    foreach($kq as $dm){
                        echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$dm['ma_danhmuc'].'</td>
                                <td>'.$dm['ten_danhmuc'].'</td>
                                <td>'.$dm['do_uutien'].'</td>
                                <td><a href="index.php?act=updatedmform&id='.$dm['id_danhmuc'].'">Sửa</a> | <a href="index.php?act=deldm&id='.$dm['id_danhmuc'].'">Xóa</a></td>
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
        <a href="index.php?act=danhmuc">
            <input type="button" value="Nhập thêm">
        </a>
    </div>
</div>