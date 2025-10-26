<?php
session_start();
if(!isset($_SESSION['admin']) || $_SESSION['admin'] == 0){
    header("Location: reservation.php");
    exit();
}
$connection = mysqli_connect("localhost", "root", "", "sport_club2");
if (!$connection){
    $errorMessage = urldecode("متاسفیم. ارتباط برقرار نشد");
    header("Location: reservation.php?error=$errorMessage");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fa-ir">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت سالن و رزرو ها</title>
    <link rel="icon" href="image/favIcon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/base.css">
    <link rel="stylesheet" href="style/login.css">
</head>
<body dir="rtl">
    
    <div class="divForm">
        <form action="manageReserveCheck.php" method="post">
            <p id="error" style="padding:20px 0 0;">
                <?php
                    if(!empty($_GET['error'])){
                        echo ($_GET['error']);
                    }
                ?>
            </p>
            <label for="date" style="padding-top: 50px;">تاریخ:</label>
            <input type="date" id="date" name="date" required>
            <label for="time">ساعت:</label>
            <select name="time" id="time" style="width:60%; margin: auto; display:block;
            height: 2.5em; background-color:white; border-radius:5px;">
                <option value="8-10">8-10</option>
                <option value="10-12">10-12</option>
                <option value="12-14">12-14</option>
                <option value="14-16">14-16</option>
                <option value="16-18">16-18</option>
                <option value="18-20">18-20</option>
                <option value="20-22">20-22</option>
            </select>
            <div style="display:block; width:60%; margin: 20px auto;">
                <input type="checkbox" id="available" name="available"  value="1">
                <label for="available" style="display: inline; padding: 10px; ">قابل رزرو </label>
            </div>

            <button type="submit" name="action" value="insert" >افزودن</button>
            <button type="submit" name="action" value="update" >به روز رسانی</button>
            <a href="index.php" style="padding-right:30px;">بازگشت به صفحه اصلی</a><br><br>
        </form>
    </div>

</body>
</html>