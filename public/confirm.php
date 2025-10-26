<?php
session_start();
if(!isset($_SESSION['name'])){
    $errorMessage = urldecode("شما باید قبل از رزرو سالن وارد حساب کاربری خود شوید");
    header("Location: login.php?error=$errorMessage");
    exit();
}
if(isset($_SESSION['age']) && $_SESSION['age'] < 18){
    $errorMessage = urldecode("متاسفم. شما زیر 18 سال دارید. اگر قصد رزرو سالن مجموعه را دارید با یک اکانت دیگر وارد شوید.");
    header("Location: login.php?error=$errorMessage");
    exit();
}

?>
<!DOCTYPE html>
<html lang="fa-ir">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تائید و پرداخت</title>
    <link rel="icon" href="image/favIcon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/base.css">
    <link rel="stylesheet" href="style/reservation.css">
</head>
<body dir="rtl">
    <div class="body">
        <br><br><br><br>
        <div class="divConfirm">
            <p>کاربر گرامی پس از تایید اطلاعات خود، وارد صفحه پرداخت شوید و رزرو خود را تکمیل کنید.</p>
            <?php
                echo("<p>نام: <span id='name'>".$_SESSION['name']."</span></p>");
                echo("<p>کدملی: <span id='name'>".$_SESSION['national_code']."</span></p>");
                echo("<P>روز: <span id='date'>".$_GET['date']."</span></P>");
                echo("<P>ساعت: <span id='time'>".$_GET['time']."</span></P>");
                echo("<a href='paymentCheck.php?date=".$_GET['date']."&time=".$_GET['time']."'>".
                '<button id="btnPay" type="button">رفتن به صفحه پرداخت</button></a></td>');
            ?>
            
        </div>
    </div>

</body>
</html>