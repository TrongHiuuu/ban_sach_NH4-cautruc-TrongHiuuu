<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1acf2d22a5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../asset/css/homePageCSS.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <link rel="icon" href="../asset/img/vnbLogo.jpg">
    <title>Vinabook.com</title>
</head>
    <body>
        <div class="website">
            <!-- phần header có navbar -->
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
            <section class="container">
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
                <section class="container-bottom">
                    <div class="container-bottom-content1">
                        <div class="container-bottom-content1-banner">
                            <div class="container-bottom-content1-banner-listImage">
                                <img class="nature" src="../asset/img/book312.jpg" alt="">
                                <img class="nature" src="../asset/img/book31.jpg" alt="">
                                <img class="nature" src="../asset/img/book22.jpg" alt="">
                                <img class="nature" src="../asset/img/book543.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="container-bottom-content2 space">
                        <div class="container-bottom-content2-title">
                            <strong>Sách Bán Chạy</strong>
                        </div>
                        <div class="container-bottom-content-productList">
                            <div class="container-bottom-right-content-bottom-product">
                                <img src="../asset/img/book5.jpg" alt="">
                                <div class="container-bottom-right-content-bottom-product-text1">
                                    Cây Chuối Non Đi Giày Xanh
                                </div>
                                <div class="container-bottom-right-content-bottom-product-text2">
                                    Nguyễn Nhật Ánh
                                </div>
                                <div class="container-bottom-right-content-bottom-product-price">
                                    77.000đ
                                </div>
                                <div class="container-bottom-right-content-bottom-product-price">
                                    77.000đ
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-bottom-content2-seeMore">
                        <span class="seeMoreTxt"> <a href="../html/searchingPage.html"> Xem thêm &gt;&gt;</a></span>
                    </div>
                </section>
            </section>
        </div>
        <script>
            w3.slideshow(".nature", 1000);
        </script>
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
                            Địa chỉ: Tiểu Vương Quốc Bình Chánh <br>
                            MST: 0303615027 do Sở Kế Hoạch Và Đầu Tư Tp.HCM cấp ngày 10/03/2011 <br>
                            Tel: 028.73008182 - Fax: 028.39733234 - Email: <a style="text-decoration: none; color: #0066C0" href="">hotro@vinabook.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
        
    </script>
</html>