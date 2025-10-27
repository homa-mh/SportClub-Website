<?php
// require_once "includes/auth_check.php";
require_once "../app/session_config.php";
?>
<!DOCTYPE html>
<html lang="fa-ir">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>باشگاه ورزشی</title>

    <script src="https://kit.fontawesome.com/067f2c805d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/base.css">
    <link rel="stylesheet" href="../style/introduction.css">
    <link rel="icon" href="../image/favIcon.ico" type="image/x-icon">

</head>
<body>
<?php
require_once "includes/menu.php";

?>

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
            <script src="../js/sports.js"></script>
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