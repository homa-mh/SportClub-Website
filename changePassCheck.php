<?php
session_start();

$connection = mysqli_connect("localhost", "root", "", "sport_club2");
if (!$connection){
    $errorMessage = urldecode("متاسفیم! ارتباط برقرار نشد!");
    header("Location: changePass.php?error=$errorMessage");
    exit();
}


$nationalCode = $_POST["nationalCode"];
$newPass = $_POST["newPass"];
$newPass2 = $_POST["newPass2"];

$errorMessage = '';

if (!preg_match("/^\d{10}$/", $nationalCode)) {
    $errorMessage = urldecode("کد ملی به درستی وارد نشده است.");
    header("Location: changePass.php?error=$errorMessage");
}
if (!preg_match("/^(?=.*[a-zA-Z])(?=.*[0-9]).{8,}$/", $password)){
    $errorMessage = urldecode("گذرواژه باید حدقل به طول 8 کاراکتر و شامل حروف و ارقام انگلیسی باشد!");
    header("Location: changePass.php?error=$errorMessage");
}

$hashedPassword = password_hash($newPass, PASSWORD_DEFAULT);

$query = "SELECT * FROM users WHERE national_code = '$nationalCode';";
$result = mysqli_query($connection, $query);

if ($result && mysqli_num_rows($result) > 0) {baseObject: 
    $update = "UPDATE users SET pass = '$hashedPassword' WHERE national_code = '$nationalCode';";
    $updateresult = mysqli_query($connection, $update);    
    if ($updateresult) {
        $connection->close();
        $errorMessage = urldecode("گذرواژه با موفقیت تغییر کرد. حالا میتوانید وارد شوید.");
        header("Location: login.php?error=$errorMessage");
        exit();
    } else {
        $errorMessage = urldecode("خطا! لطفا مطمئن شوید فیلد ها را به درستی پر میکنید.");
        $connection->close();
        header("Location: changePass.php?error=$errorMessage");
        exit();
    
    }
}
else {
    $connection->close();
    $errorMessage = urldecode("کاربری با کدملی وارد شده پیدا نشد!");
    header("Location: changePass.php?error=$errorMessage");
    exit();
}


?>
