<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "sport_club2");
if (!$connection){
    $errorMessage = urldecode("متاسفیم! ارتباط برقرار نشد!");
    header("Location: signUp.php?error=$errorMessage");
    exit();
}


$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$nationalCode = $_POST["nationalCode"];
$password = $_POST["password"];
$birthDate = $_POST["birthDate"];
$mobilePhone = $_POST["mobilePhone"];
$email = $_POST["email"];

$errorMessage = '';

if (!preg_match("/^\d{10}$/", $nationalCode)) {
    $errorMessage = urldecode("کد ملی به درستی وارد نشده است.");
    header("Location: signUp.php?error=$errorMessage");
}
if (!preg_match("/^(?=.*[a-zA-Z])(?=.*[0-9]).{8,}$/", $password)){
    $errorMessage = urldecode("گذرواژه باید حدقل به طول 8 کاراکتر و شامل حروف و ارقام انگلیسی باشد!");
    header("Location: signUp.php?error=$errorMessage");
}
if (empty($birthDate) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $birthDate)) {
    $errorMessage = urldecode("تاریخ تولد وارد نشده است.");
    header("Location: signUp.php?error=$errorMessage");
}
if (!preg_match("/^[0-9]{10,15}$/", $mobilePhone)){
    $errorMessage = urldecode("شماره تلفن راه به درستی وارد نشده است");
    header("Location: signUp.php?error=$errorMessage");
}
if (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $email) && $email != ""){
    $errorMessage = urldecode("ایمیل به درستی وارد نشده است.");
    header("Location: signUp.php?error=$errorMessage");
}

// قبل از اضافه کردن کاربر جدید ابتدا مطمئن میشویم کاربری با این کد ملی موجود نباشد.
$select = "SELECT * FROM users WHERE national_code = '$nationalCode';";
$check = mysqli_query($connection, $select);
if ($check && mysqli_num_rows($check) > 0) {
    $errorMessage = urldecode("کاربری با این کدملی قبلا ثبت شده است.");
    $connection->close();
    header("Location: signUp.php?error=$errorMessage");
    exit();
}

//حالا کاربر را اضافه میکنیم
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
$query = "INSERT INTO users (name, national_code, pass, birthdate, email, phone) 
            VALUES(CONCAT('$firstName', ' ', '$lastName'), '$nationalCode', 
                '$hashedPassword', '$birthDate', '$email', '$mobilePhone');";
$result = mysqli_query($connection, $query);

if ($result) {
    $_SESSION['name'] = $firstName . ' ' . $lastName;
    $age = date_diff(date_create($birthDate), date_create(date("Y-m-d")))->y;
    $_SESSION['age'] = $age;
    $_SESSION['phone'] = $mobilePhone;
    $_SESSION['admin'] = 0;
    $_SESSION['national_code'] = $nationalCode;
    $connection->close();
    header("Location: index.php");
    exit();
} else {
    $errorMessage = urldecode("ثبت نام انجام نشد! اگر قبلا ثبت نام کرده اید به صفحه ورود بروید.");
    $connection->close();
    header("Location: signUp.php?error=$errorMessage");
    exit();

}


?>
