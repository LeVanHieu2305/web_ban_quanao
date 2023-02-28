<link rel="stylesheet" href="view/css/danhmuc.css">
<link rel="stylesheet" href="view/css/dsdm.css">
<link rel="stylesheet" href="view/css/sanpham.css">
<div class="main">
    <h2>Cập Nhật Sản Phẩm</h2>
    <?php
        // echo var_dump($kqone);
    ?>
    <form action="index.php?act=sanpham_add" method="post" enctype="multipart/form-data">
        <div class="row_two">

            <div class="row_form">
                <label for="">Chọn danh mục</label>
                <select name="id_danhmuc" id="">
                    <option value="0"></option>
                    <?php
                        $iddmcur=$spct[0]['id_danhmuc'];
                        if(isset($dsdm)){
                            foreach($dsdm as $dm){
                                if($dm['id_danhmuc'] == $iddmcur)
                                echo '<option value="'.$dm['id_danhmuc'].'" selected>'.$dm['ten_danhmuc'].'</option>';
                            else
                                echo '<option value="'.$dm['id_danhmuc'].'" >'.$dm['ten_danhmuc'].'</option>';
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="row_form">
                <!-- <label for="">Giá gốc</label> <br> -->
                <input type="hidden" name="id_sanpham" value="<?=$spct[0]['id_sanpham']?>">
            </div>
            <div class="row_form">
                <label for="">Mã sản phẩm</label> <br>
                <input type="number" name="masp" id="" value="<?=$spct[0]['masp']?>">
            </div>
            
            <div class="row_form">
                <label for="">Tên sản phẩm</label> <br>
                <input type="text" name="tensp" id="" value="<?=$spct[0]['tensp']?>">
            </div>

            <div class="row_form">
                <label for="">Hình ảnh</label> <br>
                <img src="<?=$spct[0]['img']?>" alt="" width="80px">
                <input type="file" name="img" id="">
                <?php
                if(isset($uploadOK)&&($uploadOK==0)){
                    echo "Yêu cầu nhập đúng file hình ảnh!";
                }
        ?>
            </div>

            <div class="row_form">
                <label for="">Số lượng</label> <br>
                <input type="number" name="sl" id="" value="<?=$spct[0]['soluong']?>">
            </div>

            <div class="row_form">
                <label for="">Giảm giá</label> <br>
                <input type="number" name="giam_gia" id="" value="<?=$spct[0]['giam_gia']?>">
            </div>

            <div class="row_form">
                <label for="">Giá gốc</label> <br>
                <input type="number" name="gia_goc" id="" value="<?=$spct[0]['gia_goc']?>">
            </div>

        </div>
        <div class="row_form1">
            <input type="reset" value="Nhập lại">
            <input type="submit" value="Cập nhật" name="capnhat">
            <a href="index.php?act=dssp">
                <input type="button" value="Danh sách">
            </a>
        </div>
    </form>
    <br>

    <table>
        <tr>
            <th></th>
            <th>Mã sản phẩm</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th>Giảm giá</th>
            <th>Giá gốc</th>
            <th>Hành động</th>
        </tr>
        <?php
        // var_dump($kq);
        ?>

        <?php 
            if(isset($kq) && (count($kq)>0)){
                $i = 1;
                foreach($kq as $sp){
                    echo '<tr>
                    <td>'.$i.'</td>
                    <td>'.$sp['masp'].'</td>
                    <td>'.$sp['tensp'].'</td>
                    <td><img src="'.$sp['img'].'" width="80px"></td>
                    <td>'.$sp['soluong'].'</td>
                    <td>'.$sp['giam_gia'].'</td>
                    <td>'.$sp['gia_goc'].'</td>
                    <td><a href="index.php?act=updatespform&id='.$sp['id_sanpham'].'">Sửa</a> | <a href="index.php?act=delsp&id='.$sp['id_sanpham'].'">Xóa</a></td>
                </tr>';
                        $i++;
                }
            }
        ?>
    </table>
</div>