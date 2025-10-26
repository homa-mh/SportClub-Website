<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "sport_club2");
if (!$connection){
    $errorMessage = urldecode("متاسفیم. ارتباط برقرار نشد");
    header("Location: login.php?error=$errorMessage");
    exit();
}


$userName = $_POST["userName"];
$password = $_POST["password"];

$errorMessage = '';

if (!preg_match("/^\d{10}$/", $userName)) 
    die("کد ملی به درستی وارد نشده است.");
if (!preg_match("/^(?=.*[a-zA-Z])(?=.*[0-9]).{8,}$/", $password))
    die("رمز عبور باید حداقل 8 کاراکتر و شامل حروف و اعداد باشد.");


$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$query = "SELECT * FROM users WHERE national_code = '$userName';";
$result = mysqli_query($connection, $query);


if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['pass'])){
        $_SESSION['name'] = $row['name'];
        $age = date_diff(date_create($row['birthdate']), date_create(date("Y-m-d")))->y;
        $_SESSION['age'] = $age;
        $_SESSION['admin'] = $row['isAdmin'];
        $_SESSION['national_code'] = $row['national_code'];
        $_SESSION['phone'] = $row['phone'];
        $connection->close();
        header("Location: index.php");
        exit();
    }
    else{
        $errorMessage = urldecode("گذرواژه صحیح نمی باشد!");
        header("Location: login.php?error=$errorMessage");
    }
} else {
    $connection->close();
    $errorMessage = urldecode("کاربری با کدملی وارد شده پیدا نشد!");
    header("Location: login.php?error=$errorMessage");
    exit();
}


?>
