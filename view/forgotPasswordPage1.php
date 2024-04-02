<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require "vendor/autoload.php";

    include "../lib/session.php";
    $error = '';
    if (isset($_POST['submit'])) {
        require "../lib/mysqli.php";
        $email = $_POST['email'];
        $sql = "SELECT email FROM taikhoan WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            reset_password_session($email);

            //code gửi mail
            $mail = new PHPMailer(true);

            $mail->isSMTP(); 
            $mail->SMTPAuth   = true;
            $mail->setLanguage('vi','vendor/phpmailer/phpmailer/language/phpmailer.lang-vi.php');  

            $mail->Host       = 'smtp.gmail.com';                                         
            $mail->Username   = 'doannhom4.pttkhttt@gmail.com';               
            $mail->Password   = 'ewvd stdf afap kckz';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            
            $mail->Port       = 587; 

            $mail->setFrom('doannhom4.pttkhttt@gmail.com', 'Nhà Sách Vinabook');
            $mail->addAddress($_SESSION['reset_password']['username']);
            
            $mail->isHTML(true);
            $mail->Subject = "Mã xác nhận cho tài khoản Vinabook của bạn";

            $email_template = "
                <h2>Xin chào bạn</h2>
                <h3>Đây là mã xác nhận cho tài khoản Vinabook của bạn, tuyệt đối không chia sẻ cho bất kì ai: {$_SESSION['reset_password']['verify_code']}</h3>
            ";
            $mail->Body = $email_template;
            $mail->send();
            //
            header("location:forgotPasswordPage2.php"); 
        }
        else {
            $error = 'Chúng tôi không tìm thấy địa chỉ email này.';
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
    <link rel="stylesheet" href="../asset/css/forgotPasswordPage1CSS.css">
    <link rel="icon" href="../asset/img/vnbLogo.jpg">
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
            <form class="container-form" action="forgotPasswordPage1.php" method="POST">
                <div class="container-form-row1">
                    <i class="fa-solid fa-circle-exclamation"></i>
                </div>
                <div class="container-form-row2">
                    <strong>Quên Mật Khẩu</strong>
                </div>
                <div class="container-form-row3">
                    <p>Vui lòng nhập vào địa chỉ email của bạn, chúng tôi sẽ gửi mã xác nhận nhằm giúp bạn khôi phục mật khẩu.</p>
                </div>
                <div class="container-form-row4">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="text" placeholder="Nhập vào email của bạn..." name="email">
                </div>
                <div class="container-form-row5">
                    <p>Chúng tôi không tìm thấy địa chỉ email này.</p>
                </div>
                <div class="container-form-row6">
                    <input type="submit" name="submit" id="" value="Gửi Mã Xác Nhận">
                </div>
                <div class="container-form-row7">
                    <i>Trở về trang <a href="signIn.php"> đăng nhập</a></i>
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