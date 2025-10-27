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
    <link rel="icon" href="../image/favIcon.ico" type="image/x-icon">

    <link rel="stylesheet" href="../style/base.css">
    <link rel="stylesheet" href="../style/schedule.css">
</head>
<body>
<?php
require_once "includes/menu.php";

?>
    <h2>کلاس های ورزشی بانوان:</h2>
    <div class="content">
        <div class="divTable">
            <table>
                <caption>کلاس های ورزشی روزهای فرد</caption>
                <tr>
                    <th>ردیف</th>
                    <th>رشته</th>
                    <th>ساعت</th>
                    <th>شهریه</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>فیتنس</td>
                    <td>16-17</td>
                    <td>750,000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>TRX</td>
                    <td>18-19</td>
                    <td>750,000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>بدنسازی</td>
                    <td>8-16</td>
                    <td>1,000,000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>ژیمناستیک مبتدی</td>
                    <td>14-15</td>
                    <td>850,000</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>والیبال</td>
                    <td>14:30-16</td>
                    <td>850,000</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>فوتسال</td>
                    <td>16-18:30</td>
                    <td>850,000</td>
                </tr>
            </table>
        </div>
        <div class="divTable">
            <table>
                <caption>کلاس های ورزشی روزهای زوج</caption>
                <tr>
                    <th>ردیف</th>
                    <th>رشته</th>
                    <th>ساعت</th>
                    <th>شهریه</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>فیتنس</td>
                    <td>16-17</td>
                    <td>750,000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>TRX</td>
                    <td>18-19</td>
                    <td>750,000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>بدنسازی</td>
                    <td>8-16</td>
                    <td>1,000,000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>ژیمناستیک پیشرفته</td>
                    <td>14-15</td>
                    <td>900,000</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>هندبال</td>
                    <td>14:30-16</td>
                    <td>850,000</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>بسکتبال</td>
                    <td>18-19:30</td>
                    <td>850,000</td>
                </tr>
            </table>
        </div>
    </div>
    <h2>کلاس های ورزشی آقایان:</h2>
    <div class="content">
        <div class="divTable">
            <table>
                <caption>کلاس های ورزشی روزهای فرد</caption>
                <tr>
                    <th>ردیف</th>
                    <th>رشته</th>
                    <th>ساعت</th>
                    <th>شهریه</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>TRX</td>
                    <td>19-20</td>
                    <td>750,000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>بدنسازی</td>
                    <td>16-23</td>
                    <td>1,000,000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>والیبال</td>
                    <td>10:30-12</td>
                    <td>850,000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>فوتسال</td>
                    <td>17:30-19</td>
                    <td>850,000</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>ژیمناستیک مبتدی</td>
                    <td>17-18</td>
                    <td>850,000</td>
                </tr>
            </table>
        </div>
        <div class="divTable">
            <table>
                <caption>کلاس های ورزشی روزهای زوج</caption>
                <tr>
                    <th>ردیف</th>
                    <th>رشته</th>
                    <th>ساعت</th>
                    <th>شهریه</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>TRX</td>
                    <td>19-20</td>
                    <td>750,000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>بدنسازی</td>
                    <td>16-23</td>
                    <td>1,000,000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>هندبال</td>
                    <td>10:30-12</td>
                    <td>850,000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>بسکتبال</td>
                    <td>17:30-19</td>
                    <td>850,000</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>ژیمناستیک پیشرفته</td>
                    <td>17-18</td>
                    <td>850,000</td>
                </tr>
            </table>
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