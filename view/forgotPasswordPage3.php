<?php
    include "../lib/session.php";
    include "../lib/functions.php";
    if (isset($_POST['submit'])) {
        $password = $_POST['password'];
        $r_password = $_POST['r_password'];
        var_dump($_SESSION);
        if (check_password_is_correct($password, $r_password)) {
            require_once "../lib/mysqli.php";
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "UPDATE taikhoan SET matkhau='".$password_hash."'WHERE email='".$_SESSION['reset_password']['username']."' LIMIT 1";
            $result = mysqli_query($conn, $sql);

            if($result) {
                unset($_SESSION['reset_password']);
                header("location:index.php");
            }
            else {
                echo "Có lỗi xảy ra, vui lòng thử lại sau...";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên Mật Khẩu</title>
    <script src="https://kit.fontawesome.com/1acf2d22a5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../asset/css/forgotPasswordPage2CSS.css">
    <link rel="icon" href="../asset/img/vnbLogo.jpg">
</head>
    <body>
        <header class="header">
            <nav class="header-navbar">
                <!-- các elements trên navbar -->
                <ul class="header-navbar-list">
                    <li class="header-navbar-items">
                        <a href=""><img src="../asset/img/vinabookLogo.png" alt="Vinabook-Logo"></a>
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
        <section class="container-top">
            <div class="container-top-book-catalogue">
                <div class="container-top-book-catalogue-content">
                    <div class="container-top-book-catalogue-content-left-dropdown">
                        <input type="checkbox" id="dropcheck" class="dropcheck">
                        <label for="dropcheck" class="dropbtn"><i class="fa-solid fa-bars"></i> Danh Mục Sách</label>
                        <div class="dropdown-content">
                            <ul class="container-top-dropDownList-and-banner-left-list">
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        <a href="../html/searchingPageBestSeller.html">Sách Bán Chạy</a>
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        <a href="../html/searchingPageVH.html">Sách Văn Học</a>
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        <a href="../html/searchingPageTTDS.html">Sách Thường Thức - Đời sống</a>
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        <a href="../html/searchingPageTHNN.html">Sách Tin Học - Ngoại Ngữ</a>
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        <a href="../html/searchingPageTT.html">Tiểu Thuyết</a>
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        <a href="../html/searchingPageGKGT.html">Sách Giáo Khoa - Giáo Trình</a>
                                    </div>
                                </li>
                                <li class="container-top-dropDownList-and-banner-left-list-items">
                                    <div class="container-top-dropDownList-and-banner-left-list-items-text">
                                        <a href="../html/searchingPageCN.html">Sách Chuyên Ngành</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="container-top-book-catalogue-content-right">
                        <i class="fa-solid fa-phone"></i>
                        <p>Hotline: 1900 704421</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <form class="container-form" action="forgotPasswordPage3.php" method="POST">
                <div class="container-form-row1">
                    <strong>Khôi Phục Lại Mật Khẩu</strong>
                </div>
                <div class="container-form-row2-newPassword">
                    <span>Nhập mật khẩu mới</span>
                    <div class="container-form-row2-newPassword-ds">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="password" id="">
                    </div>
                </div>
                <div class="container-form-row3-confirmPassword">
                    <span>Nhập lại mật khẩu mới</span>
                    <div class="container-form-row3-confirmPassword-ds">
                        <i class="fa-solid fa-key"></i>
                        <input type="password" name="r_password" id="">
                    </div>
                    <div class="container-form-row3-confirmPassword-notMatch">
                        <p>Mật khẩu bạn vừa nhập không khớp với mật khẩu mới.</p>
                    </div>
                </div>
                <div class="container-form-row4">
                    <input type="submit" name="submit" id="" value="Khôi Phục Mật Khẩu">
                </div>
            </form>
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