</section>
        </div>
        <script>
            /* function myFunction() {
                document.getElementById("dropDownList").classList.toggle("show");
            }
            
            window.onclick = function(event) {
                if (!event.target.matches('.container-top-book-catalogue-content-left')) {
                    var dropdowns = document.getElementsByClassName("container-top-dropDownList-and-banner-left-list");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            } */
             //show and hide dropdown list item on button click
            function show_hide() {
                var click = document.getElementById("dropDownList");
                if (click.style.display === "none") {
                click.style.display = "block";
                } else {
                click.style.display = "none";
                }
            }
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
                            <img src="../img/bocongthuong.png" alt="">
                        </div>
                        <div class="footer-row2-content-items-left2">
                            WEBSITE CÙNG HỆ THỐNG
                        </div>
                        <div class="footer-row2-content-items-left3"> 
                            <img class="footer-row2-content-items-left3-img1" src="../img/hotdeal.png" alt="">
                            <img class="footer-row2x-content-items-left3-img2" src="../img/yesgo.png" alt="">
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
</html>