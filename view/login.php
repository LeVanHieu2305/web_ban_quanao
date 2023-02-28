<link rel="stylesheet" href="view/css/login.css">
<div class="content">
        <div class="top_title">
            <p class="login"><a href="index.php?act=login">Đăng nhập</a></p>
            <p><a href="index.php?act=register">Đăng ký</a></p>
        </div>
        <div class="line_ke"></div>

        <div class="bao_form">
            <form action="index.php?act=login" method="post">
                <div class="form-group">
                    <input type="text" name="ten_user" id="taikhoan" placeholder="Tài khoản" required> <br>
                </div>

                <div class="form-group">
                    <input type="password" name="matkhau" id="password" placeholder="Mật khẩu" required> <br>
                </div>

                <div class="form-group2">
                    <input type="submit" value="Đồng ý" name="dangnhap" onclick="return vali()">
                </div>
            </form>
        </div>
    </div>