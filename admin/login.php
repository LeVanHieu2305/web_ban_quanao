<?php
    session_start();
    ob_start();
    include "../model/connetdb.php";
    include "../model/user.php";
    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
        $ten_user = $_POST['ten_user'];
        $matkhau = $_POST['matkhau'];
        $role=checkuser($matkhau,$ten_user);
        $_SESSION['role'] =$role;
        if($role == 1) header('location: index.php');
        else {
            $txt_erro="Username hoặc Password không tồn tại !";
        }
            // header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="./view/css/login.css">
</head>

<body>
    <div class="main">
        <div class="top_title" style="text-align: center">
            <p class="login"><a href="index.php?act=login">Đăng nhập</a></p>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="form-group">
                <input type="text" name="ten_user" id="taikhoan" placeholder="Tài khoản" required> <br>
            </div>

            <div class="form-group">
                <input type="password" name="matkhau" id="password" placeholder="Mật khẩu" required> <br>
            </div>

            <div class="form-group2">
                <input type="submit" value="Đồng ý" name="dangnhap" onclick="return vali()">
            </div>
                <?php
                    if(isset($txt_erro) && ($txt_erro !="")){
                        echo "<font color='red'>".$txt_erro."</font>";
                    }
                ?>
        </form>
    </div>
</body>
</html>
<!-- <link rel="stylesheet" href="view/css/login.css">
<div class="content">
        <div class="top_title">
            <p class="login"><a href="index.php?act=login">Đăng nhập</a></p>
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
    </div> -->