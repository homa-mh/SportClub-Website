<?php
session_start();

?>
<!DOCTYPE html>
<html lang="fa-ir">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>باشگاه ورزشی</title>

    <script src="https://kit.fontawesome.com/067f2c805d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/base.css">
    <link rel="stylesheet" href="style/introduction.css">
    <script src="js/menu.js"></script>
    <link rel="icon" href="image/favIcon.ico" type="image/x-icon">

</head>
<body>
    <div class="header">
        <h2>SPORT CLUB</h2>
        <i class="fa-solid fa-bars" id="menuBtn" onclick="let sidebar =
        document.querySelector('.menu'); sidebar.classList.toggle('active');
        this.classList.toggle('fa-spin');"></i>
    </div>
    <div class="menu">
        <ul>
            <li>
                <a href="index.php">
                    <i class="fa-solid fa-house"></i>
                    <span class="menuItem">خانه</span>
                </a>
            </li>
            <?php
                if (isset($_SESSION['name'])) {
            ?>
            <li class="text-nowrap">
                <a href="#">
                <i class="fa-solid fa-address-card"></i>
                    <span class="menuItem menuLoginText">
                        <?php
                            echo($_SESSION['name']);
                        ?>
                    </span>
                </a>
            </li>
            <?php
                }
                else{
            ?>
            <li class="text-nowrap">
                <a href="login.php">
                    <i class="fa-solid fa-user"></i>
                    <span class="menuItem menuLoginText">ورود</span>
                </a>
            </li>
            <?php
                }
            ?>
            <li>
                <a href="schedule.php">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span class="menuItem">برنامه کلاس ها</span>
                </a>
            </li>
            <li>
                <a href="introduction.php">
                    <i class="fa-solid fa-question"></i>
                    <span class="menuItem">معرفی رشته ها</span>
                </a>
            </li>
            <li>
                <a href="reservation.php">
                    <i class="fa-solid fa-credit-card"></i>
                    <span class="menuItem">رزرو سالن</span>
                </a>
            </li>
            <?php
                if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1 ) {
            ?>
            <li class="text-nowrap">
                <a href="manageReserve.php">
                <i class="fa-solid fa-hammer"></i>
                    <span class="menuItem">مدیریت رزرو ها</span>
                </a>
            </li>
            <?php
                }
            ?>
            <li>
                <a href="awards.php">
                    <i class="fa-solid fa-award"></i>
                    <span class="menuItem">جوایز و افتخارات</span>
                </a>
            </li>
            <!-- This menu item will be shown after the user logs in: -->
            <?php
                if (isset($_SESSION['name'])) {
            ?>
            <li class="text-nowrap">
                <a href="logOut.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="menuItem">خروج از حساب</span>
                </a>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>


    <div class="main">
        <h1 style="text-align: center; margin-top: 120px;">رشته های ورزشی مجموعه ما:</h1>
        <hr>
        <div class="divSelectFields">
            <div class="divField" onclick="changeText('بسکتبال')">
                <p>بسکتبال</p>
            </div>
            <div class="divField" onclick="changeText('فوتسال')">
                <p>فوتسال</p>
            </div>
            <div class="divField" onclick="changeText('بدنسازی')">
                <p>بدنسازی</p>
            </div>
            <div class="divField" onclick="changeText('TRX')">
                <p>TRX</p>
            </div>
            <div class="divField" onclick="changeText('والیبال')">
                <p>والیبال</p>
            </div>
            <div class="divField" onclick="changeText('هندبال')">
                <p>هندبال</p>
            </div>
            <div class="divField" onclick="changeText('ژیمناستیک')">
                <p>ژیمناستیک</p>
            </div>
            <div class="divField" onclick="changeText('فیتنس')">
                <p>فیتنس</p>
            </div>
        </div>
        <div class="divSportInfo">
            <script src="js/sports.js"></script>
            <h3>معرفی ورزش <span id="sportName"></span></h3><br>
            <p id="sportInfo" style="padding: 10px;">لطفا از لیست بالا یکی از ورزش ها را انتخاب کنید تا مطلب مربوطه نشان داده شود. <br>
                (در این بخش میتوان توضیحات مربوط به کلاس + شهریه + ساعات کلاس + نام مربی به کاربر نشان داده شود.)
            </p>
        </div>
        


    </div>


    <div class="footer">
        <div class="footerRight">
            <p>برای دریافت اطلاعات بیشتر یا ثبت‌نام، با ما تماس بگیرید:</p>
            <i class="fa-solid fa-phone"></i>
            <span><a href="tel:02133112233">021-33xxxx18</a></span>
            <br>
            <i class="fa-solid fa-map-location-dot"></i>
            <span><a href="https://maps.app.goo.gl/R9tv3nK4LbYBEAy86" target="_blank">تهران، منطقه فلان، خیابان فلان</a></span>
        </div>
        <div class="footerLeft">
            <br>
            <i class="fa-brands fa-telegram"></i>
            <span><a href="https://t.me/" target="_blank" style="text-align: left;">telegram</a></span>
            <br>
            <i class="fa-brands fa-instagram"></i>
            <span><a href="https://instagram.com" target="_blank" style="text-align: left;">instagram</a></span>
        </div>
    </div>
</body>
</html>