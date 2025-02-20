<?php
$connection = mysqli_connect("localhost", "root", "", "sport_club2");
if (!$connection){
    $errorMessage = urldecode("متاسفیم. ارتباط برقرار نشد");
    header("Location: manageReserve.php?error=$errorMessage");
    exit();
}

function check_exists($connection, $date, $time){
    $date = mysqli_real_escape_string($connection, $date);
    $time = mysqli_real_escape_string($connection, $time);

    $query = "SELECT * FROM times WHERE times.time = '$time' AND times.date = '$date'";
    $result = mysqli_query( $connection, $query);
    if($result && mysqli_num_rows($result) > 0){
        return true;
    }
    else{
        return false;
    }
}

$action = $_POST['action'];
$date = mysqli_real_escape_string($connection, $_POST['date']);
$time = mysqli_real_escape_string($connection, $_POST['time']);
$is_available = isset($_POST['available'])? 1: 0;

if(isset($action) && $action == "insert"){
    if(!check_exists($connection, $date, $time)){
        $query = "INSERT INTO times (`date`, `time`, `is_available`) VALUES('$date', '$time', $is_available)";
        $result = mysqli_query($connection, $query);
        if($result){
            $errorMessage = urldecode("با موفقیت اضافه شد.");
            header("Location: manageReserve.php?error=$errorMessage");
            exit();
        }
        else{
            $errorMessage = urldecode("خطا در ثبت.");
            header("Location: manageReserve.php?error=$errorMessage");
            exit();
        }
    }
    else{
        $errorMessage = urldecode("این ساعت قبلا ثبت شده است.");
        header("Location: manageReserve.php?error=$errorMessage");
        exit();
    }
}
else if(isset($action) && $action == "update"){
    if(check_exists($connection, $date, $time)){
        $query = "UPDATE times SET times.is_available = $is_available WHERE times.date = '$date' AND times.time = '$time'";
        $result = mysqli_query($connection, $query);
        if($result){
            $errorMessage = urldecode("با موفقیت به روز رسانی شد.");
            header("Location: manageReserve.php?error=$errorMessage");
            exit();
        }
        else{
            $errorMessage = urldecode("خطا در ثبت.");
            header("Location: manageReserve.php?error=$errorMessage");
            exit();
        }
    }
}
else{
    header("Location: manageReserve.php");
    exit();
}


?>