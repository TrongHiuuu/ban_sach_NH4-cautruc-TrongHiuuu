<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1acf2d22a5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/homePageCSS.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <title>Vinabook</title>
</head>
    <body>
        <div class="website">
            <!-- phần header có navbar -->
            <header class="header">
                <nav class="header-navbar">
                    <!-- các elements trên navbar -->
                    <ul class="header-navbar-list">
                        <li class="header-navbar-items">
                            <a href=""><img src="../img/vinabookLogo.png" alt="Vinabook-Logo"></a>
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
                                    <a id="signin" href="#"><div class="header-navbar-items-SignIn">Đăng nhập</div></a>
                                    <div class="header-navbar-items-separate"></div>
                                    <a id="signup" href="#"><div class="header-navbar-items-SignUp">Đăng ký</div></a>
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