<link rel="stylesheet" href="view/css/danhmuc.css">
<link rel="stylesheet" href="view/css/dsdm.css">
<div class="main">
    <h2>Cập Nhật Danh Mục</h2>
    <?php
        // echo var_dump($kqone);
    ?>
    <form action="index.php?act=updatedmform" method="post" enctype="multipart/form-data">
        <div class="row_two">
            <div class="row_form">
                <label for="">Mã danh mục</label> <br>
                <input type="number" name="ma_danhmuc" id="" value="<?=$kqone[0]['ma_danhmuc']?>">
                <input type="hidden" name="id" value="<?=$kqone[0]['id_danhmuc']?>">
            </div>
            
            <div class="row_form">
                <label for="">Tên danh mục</label> <br>
                <input type="text" name="ten_danhmuc" id="" value="<?=$kqone[0]['ten_danhmuc']?>">
                <input type="hidden" name="id" value="<?=$kqone[0]['id_danhmuc']?>">
            </div>
        </div>
        <div class="row_form1">
            <input type="reset" value="Nhập lại">
            <input type="submit" value="Cập nhật" name="capnhat">
            <a href="index.php?act=dsdm">
                <input type="button" value="Danh sách">
            </a>
        </div>
    </form>
    <br>

    <table>
        <tr>
            <th></th>
            <th>Mã danh mục</th>
            <th>Tên danh mục</th>
            <th>Độ ưu tiên</th>
            <th>Hành động</th>
        </tr>
        <?php
        // var_dump($kq);
        ?>

        <?php 
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