<?php
    include "../lib/session.php";
    /*if(!empty($_SESSION['user']['username'])) {
        echo '<script>alert("Bạn đã đăng nhập!!!")</script>';
        header("location:index.php");
    }*/
    if (isset($_POST['sign_in'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        require "../lib/mysqli.php";
        $sql = "SELECT * FROM taikhoan WHERE email= '$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (mysqli_num_rows($result) > 0) {
            if(password_verify($password, $user['matkhau'])){
                $_SESSION['user']['username'] = $user['email'];
                $_SESSION['user']['fullname'] = $user['tenTK'];
                header("location:index.php"); 
            }  
            else {
                echo '<script>alert("Mật khẩu không đúng, vui lòng nhập lại")</script>';
            }   
        }
        else {
            echo '<script>alert("Tài khoản không tồn tại")</script>';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập vào tài khoản</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/1acf2d22a5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../asset/css/signInCSS.css">
    <link rel="icon" href="../asset/img/vnbLogo.jpg">
</head>
    <body>
        <header class="header">
            <nav class="header-navbar">
                <!-- các elements trên navbar -->
                <ul class="header-navbar-list">
                    <li class="header-navbar-items">
                        <a href="home.php"><img src="../asset/img/vinabookLogo.png" alt="Vinabook-Logo"></a>
                    </li>
                    <li class="header-navbar-items">
                        <div class="header-navbar-items-search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Tìm kiếm tựa sách, tác giả">
                            <button class="findBook-button">Tìm sách</button>
                        </div>
                    </li>
                    <li class="header-navbar-items">
                        <div class="header-navbar-items-Cart-SignIn-SignUp">
                            <div class="header-navbar-items-Cart">
                                <a class="cart" href="#">
                                    <div class="circle"></div>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </a>
                            </div>
                            <div class="header-navbar-items-SignIn-SignUp">
                                <a id="signin" href="signIn.php"><div class="header-navbar-items-SignIn">Đăng nhập</div></a>
                                <div class="header-navbar-items-separate"></div>
                                <a id="signup" href="signUp.php"><div class="header-navbar-items-SignUp">Đăng ký</div></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </header>
        <div class="container">
            <ul class="container-row">
                <div class="container-row1">
                    <li class="container-row1-items">
                        Trang chủ
                    </li>
                    <li class="container-row1-items">
                        <i class="fa-solid fa-chevron-right"></i>
                    </li>
                    <li class="container-row1-items">
                        Đăng nhập
                    </li>
                </div>
            </ul>
            <ul class="container-row">
                <div class="container-row2">
                    <li class="container-row1-items">
                        <h2>Đăng nhập vào tài khoản</h2>
                        <div class="container-row1-items-hr"></div>
                    </li>
                </div>
            </ul>
            <ul class="container-row">
                <div class="signIn-box">
                    <div class="signIn-box-row1">
                        Đăng nhập
                    </div>
                    <div class="signIn-box-row2">
                    </div>
                    <div class="signIn-box-row3">
                        <div class="signIn-box-row3-form">
                            <form action="signIn.php" method="POST">
                                <div class="signIn-box-row3-form-items">
                                    <strong>Email<span style="color: #D64830">*</span></strong><input type="text" name="email" id="email">
                                </div>
                                <div class="signIn-box-row3-form-items">
                                    <strong>Mật khẩu<span style="color: #D64830">*</span></strong><input type="password" name="password" id="email">
                                </div>
                                <div class="signIn-box-row3-form-errorMssg">
                                    Tài khoản hoặc mật khẩu không hợp lệ, vui lòng kiểm tra lại.
                                </div>
                                <div class="signIn-box-row3-form-forgotPassword">
                                    <i>Bạn đã <a href="forgotPasswordPage1.php">quên mật khẩu?</a></i>
                                </div>
                                <div class="signIn-box-row3-right-button"> <button name="sign_in"> ĐĂNG NHẬP</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="signIn-box-row5">
                        Chưa có tài khoản? <a style="text-decoration: none; color: #0066C0" href="signUp.php">Đăng ký ngay</a>
                    </div>
                </div>
            </ul>
        </div>
    </body>
    <footer class="footer">
        <div class="footer-row">
            <div class="footer-row1"></div>
        </div>
        <div class="footer-row">
            <div class="footer-row2">
                <div class="footer-row2-content">
                    <div class="footer-row2-content-items">
                        <div class="footer-row2-content-items-left1">
                            <img src="../asset/img/bocongthuong.png" alt="">
                        </div>
                        <div class="footer-row2-content-items-left2">
                            WEBSITE CÙNG HỆ THỐNG
                        </div>
                        <div class="footer-row2-content-items-left3"> 
                            <img class="footer-row2-content-items-left3-img1" src="../asset/img/hotdeal.png" alt="">
                            <img class="footer-row2-content-items-left3-img2" src="../asset/img/yesgo.png" alt="">
                        </div>
                    </div>
                    <div class="footer-row2-content-items">
                        <div class="footer-row2-content-items-right1">
                            CÔNG TY CỔ PHẦN THƯƠNG MẠI DỊCH VỤ MÊ KÔNG COM
                        </div>
                        <div class="footer-row2-content-items-right2">
                            Địa chỉ: 52/2 Thoại Ngọc Hầu, Phường Hòa Thạnh, Quận Tân Phú, Hồ Chí Minh <br>
                            MST: 0303615027 do Sở Kế Hoạch Và Đầu Tư Tp.HCM cấp ngày 10/03/2011 <br>
                            Tel: 028.73008182 - Fax: 028.39733234 - Email: <a style="text-decoration: none; color: #0066C0" href="">hotro@vinabook.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>