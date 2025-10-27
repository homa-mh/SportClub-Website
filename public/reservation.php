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
    <link rel="stylesheet" href="../style/reservation.css">

    <link rel="icon" href="../image/favIcon.ico" type="image/x-icon">

</head>
<body>
<?php
require_once "includes/menu.php";

?>

    <div class="main">
        <br>
        <p id="error" style="padding:20px 0 0; text-align:center; color: red;">
                <?php
                    isset($_SESSION['error']) ? $_SESSION['error'] : "";
                    unset($_SESSION['error']);
                ?>
            </p>
        <br>
        <p style="padding:0 10px 0 0; text-align:center;">* هزینه رزرو سالن برای هر سانس (2 ساعت) برابر 900.000 تومان می باشد</p>
        <div style="overflow-x: auto;">
            <table>
                <tr>
                    <th>روز</th>
                    <th colspan="6">ساعت</th>
                </tr>
                <?php
                    $connection = mysqli_connect("localhost", "root", "", "sport_club2");
                    if (!$connection){
                        header("Location: index.php");
                        exit();
                    }
                    for($i = 0; $i < 7; $i++){
                        $query = "SELECT * FROM times where
                        times.date = DATE_ADD(CURRENT_DATE(), INTERVAL $i DAY)
                        order by times.time;";
                        $result = mysqli_query($connection, $query);
                        $now = date_create();
                        date_add($now,date_interval_create_from_date_string("$i days"));
                        $date = date_format($now,"m-d");
                        if ($result && mysqli_num_rows($result) > 0) {
                            echo("<tr><td>".$date."</td>");
                            foreach(mysqli_fetch_all($result, MYSQLI_ASSOC) as $row){
                                if($row['is_available'] == 1){
                                    echo("<td><a href='confirm.php?date=".$row['date']."&time=".$row['time']."'>".
                                    '<button type="button">'.$row['time'].'</button></a></td>');
                                }
                                else{
                                    echo("<td><a href='confirm.php?date=".$row['date']."&time=".$row['time']."'>".
                                    '<button disabled type="button" style="text-decoration: line-through;">'.$row['time'].'</button></a></td>');
                                }
                            }
                            echo("</tr>");
                        }else{
                            echo("<tr><td>$date</td><td colspan='6'  style ='background-color: #dfd8d8;;'>سالن پر است.</td></tr>");
                        }
                    }
                    echo("</table>");

                ?>
        </div>
        <ul>
            قوانین مجموعه:
            <li>سقف تعداد نفرات 30 نفر است.</li>
            <li>ورود بانوان و آقایان فقط به صورت جدا در این مجموعه امکان پذیر است.</li>
            <li>بازی والیبال، فوتسال و هندبال امکان پذیر است. </li>
            <li>امکان بازی بسکتبال در این مجموعه وجود ندارد .</li>
            <li>رزرو توپ در این مجموعه امکان پذیر است.</li>
        </ul>
    </div>



    <div class="footer">
        <div class="footerRight">
            <p>برای دریافت اطلاعات بیشتر یا ثبت‌نام، با ما تماس بگیرید:</p>
            <i class="fa-solid fa-phone"></i>
            <span><a href="tel:02133112233">021-33xxxx18</a></span>
            <br>
            <i class="fa-solid fa-map-location-dot"></i>
            <span><a href="https://maps.app.goo.gl/R9tv3nK4LbYBEAy86" target="_blank">ایران،<h2 style="font-size: medium; display: inline;">تهران،</h2>  روبه روی فلان</a></span>
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