<!DOCTYPE html>
<html lang="fa-ir">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="icon" href="image/favIcon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/base.css">
    <link rel="stylesheet" href="../style/login.css">
</head>
<body dir="rtl">
    <div class="divForm">
        <form action="loginCheck.php" method="post" onsubmit="return validateForm()">
            <p id="error" style="padding:20px 0 0;">
                <?php
                    if(!empty($_GET['error'])){
                        echo ($_GET['error']);
                    }
                ?>
            </p>
            <label for="userName" style="padding-top: 50px;">کد ملی:</label>
            <input type="text" id="userName" name="userName" placeholder="کد ملی خود را وارد کنید." maxlength="10" minlength="10" required>
            <label for="password">رمز عبور :</label>
            <input type="password"  id="password" name="password" placeholder="رمز عبور خود را وارد کنید." minlength="8" required>
            <input type="submit" value="ورود" >
            <p>عضو باشگاه نیستید؟ <a href="signUp.php">ثبت نام کنید</a></p>
            <p style="padding-bottom: 50px;">رمز عبور خود را فراموش کرده اید؟<br><a href="changePass.php">تغییر رمز عبور</a></p>
        </form>
    </div>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var nationalcode = document.getElementById("userName").value;
        
            var nationalcodePattern =/^\d{10}$/;
            if (!nationalcode.match(nationalcodePattern)) {
                alert("کد ملی را به درستی وارد کنید.");
                return false;
            }
            var passwordPattern = /^(?=.*[a-zA-Z])(?=.*[0-9]).{6,}$/;
            if (!password.match(passwordPattern)) {
                alert("رمز عبور باید شامل حروف انگلیسی و اعداد باشد");
                return false; 
            }
    
            return true;
        }
    </script>
</body>
</html>