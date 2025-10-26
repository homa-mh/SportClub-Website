<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "sport_club2");
if (!$connection){
    $errorMessage = urldecode("متاسفیم. ارتباط برقرار نشد");
    header("Location: reservation.php?error=$errorMessage");
    exit();
}
if (!isset($_GET['date']) || !isset($_GET['time']) || !isset($_SESSION['national_code'])) {
    $errorMessage = urlencode("ورودی نامعتبر است.");
    header("Location: reservation.php?error=$errorMessage");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>وضعیت رزرو</title>
    <link rel="stylesheet" href="style/reservation.css">
</head>
<body>
    
</body>
</html>

<?php
$date = mysqli_real_escape_string($connection, $_GET['date']);
$time = mysqli_real_escape_string($connection, $_GET['time']);
$national_code = mysqli_real_escape_string($connection, $_SESSION['national_code']);


$queryTimeID = "SELECT * FROM times WHERE times.date = '$date' and times.time = '$time' and times.is_available = 1";
$resultTimeID = mysqli_query($connection, $queryTimeID);
$queryUserID = "SELECT * FROM users WHERE users.national_code = '$national_code'";
$resultUserID = mysqli_query($connection, $queryUserID);
if ($resultTimeID && $resultUserID && mysqli_num_rows($resultTimeID) > 0 && mysqli_num_rows($resultUserID) > 0) {
    $rowTime = mysqli_fetch_assoc($resultTimeID);
    $time_id = $rowTime['id'];
    $rowUser = mysqli_fetch_assoc($resultUserID);
    $user_id = $rowUser['id'];
    $tracking_number = rand(100000, 999999);
    $insert = "INSERT INTO reservations (`user_id`,`time_id`,`has_payed`,`tracking_number`)
            VALUES('$user_id', '$time_id', 1, '$tracking_number');";
    $update = "UPDATE times SET times.is_available = 0 where times.id = $time_id ";
    $resultInsert = mysqli_query($connection, $insert);
    $resultUpdate = mysqli_query($connection, $update);
    if($resultInsert && $resultUpdate){
        mysqli_close($connection);
        echo("<br><br><p style='padding:0 10px 0 0; text-align:center;'>رزرو شما کامل شد.</p>");
        echo("<p style='padding:0 10px 0 0; text-align:center;'>کد پیگیری: $tracking_number</p>");
        echo("<a href='index.php'>".
        '<button id="btnPay" type="button">بازگشت به صفحه اصلی</button></a></td>');
    }
}
else{
    $errorMessage = urldecode("متاسفیم. زمان مد نظر شما در دسترس نمی باشد.");
    header("Location: reservation.php?error=$errorMessage");
    exit();
}

?>