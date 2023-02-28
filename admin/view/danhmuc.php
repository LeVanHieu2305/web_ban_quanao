<link rel="stylesheet" href="view/css/danhmuc.css">
<div class="main">
    <h2>Danh Mục</h2>
    <form action="index.php?act=adddm" method="post">
        <div class="row_two">
            <div class="row_form">
                <label for="">Mã danh mục</label> <br>
                <input type="text" name="ma_danhmuc" id="">
            </div>
            
            <div class="row_form">
                <label for="">Tên danh mục</label> <br>
                <input type="text" name="ten_danhmuc" id="">
            </div>
        </div>
        <div class="row_form1">
            <input type="reset" value="Nhập lại">
            <input type="submit" value="Thêm mới" name="themmoi">
            <a href="index.php?act=dsdm">
                <input type="button" value="Danh sách">
            </a>
        </div>

    </form>

    
</div>