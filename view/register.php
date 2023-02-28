<link rel="stylesheet" href="view/css/register.css">
<div class="content">
        <div class="top_title">
            <p><a href="index.php?act=login">Đăng nhập</a></p>
            <p class="register"><a href="index.php?act=register">Đăng ký</a></p>
        </div>
        <div class="line_ke"></div>

        <div class="bao_form">
            <form action="index.php?act=register" method="post">
                <div class="form-group">
                    <input type="text" name="ten_user" id="name" placeholder="Họ và tên" required> <br>
                </div>
                <div class="form-group">
                    <input type="number" name="sdt_user" id="sdt" placeholder="Số điện thoại" required> <br>
                </div>
                <div class="form-group">
                    <input type="email" name="email_user" id="email" placeholder="Email" required> <br>
                </div>
                <div class="form-group">
                    <input type="password" name="matkhau" id="password" placeholder="Mật khẩu" required> <br>
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Xác nhận lại mật khẩu" required> <br>
                </div>
                <div class="form-group2">
                    <input type="submit" value="Đồng ý" name="dangky">
                </div>
            </form>
            <h2 class="loi">
                <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
            </h2>
        </div>
    </div>