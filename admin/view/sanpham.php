<link rel="stylesheet" href="view/css/sanpham.css">
<div class="main">
    <h2>Sản phẩm</h2>
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div class="row_two">
            <div class="row_form">
                <label for="">Chọn danh mục</label>
                <select name="id_danhmuc" id="">
                    <option value="0"></option>
                    <?php
                        if(isset($dsdm)){
                            foreach($dsdm as $dm){
                                echo '<option value="'.$dm['id_danhmuc'].'">'.$dm['ten_danhmuc'].'</option>';
                            }
                        }
                    ?>
                </select>
            </div>

            <div class="row_form">
                <label for="">Mã sản phẩm</label> <br>
                <input type="number" name="masp" id="">
            </div>

            <div class="row_form">
                <label for="">Tên sản phẩm</label> <br>
                <input type="text" name="tensp" id="">
            </div>

            <!-- <div class="row_form">
                <label for="">Size</label> <br>
                <input type="text" name="size" id="">
            </div> -->

            <div class="row_form">
                <label for="">Giảm giá</label> <br>
                <input type="number" type="text" name="giam_gia" id="">
            </div>

            <div class="row_form">
                <label for="">Giá gốc</label> <br>
                <input type="number" type="text" name="gia_goc" id="">
            </div>

            <div class="row_form">
                <label for="">Hình ảnh</label> <br>
                <input type="file" name="img" id="">
                <?php
                    if(isset($uploadOK)&&($uploadOK==0)){
                        echo "Yêu cầu nhập đúng file hình ảnh!";
                    }
                ?>
            </div>

            <div class="row_form">
                <label for="">Số lượng</label> <br>
                <input type="number" name="sl" id="">
            </div>

        </div>
        <div class="row_form1">
            <input type="reset" value="Nhập lại">
            <input type="submit" value="Thêm mới" name="themmoi">
            <a href="index.php?act=dssp">
                <input type="button" value="Danh sách">
            </a>
        </div>

    </form>

    
</div>