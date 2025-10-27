<?php
require_once '../app/session_config.php';
?>
<!DOCTYPE html>
<html lang="fa-ir">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="icon" href="../image/favIcon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style/base.css">
    <link rel="stylesheet" href="../style/login.css">
</head>
<body dir="rtl">
    <div class="divForm">
        <form action="register.php" method="post" onsubmit="return validateForm()">
            <p id="error" style="padding:20px 0 0;">
                <?php
                    isset($_SESSION['error']) ? $_SESSION['error'] : "";
                    unset($_SESSION['error']);
                ?>
            </p>
            <label for="name" style="padding-top: 50px;">نام<span style="color: red;">*</span>:</label>
            <input type="text" id="name" name="name" placeholder=" نام خود را وارد کنید." minlength="3" required>
            <label for="phone">تلفن همراه<span style="color: red;">*</span>:</label>
            <input type="text" id="phone" name="phone" placeholder="09xx-xxx-xxxx" maxlength="11" minlength="11" required>
            <label for="password">رمز عبور<span style="color: red;">*</span>:</label>
            <input type="password" name="password" id="password" minlength="8" placeholder="حداقل به طول 8 , شامل اعداد و حروف انگلیسی" required>
            <button type="submit" name="action" value="signUn">ثبت نام</button>
            <p style="padding-bottom: 50px;">عضو باشگاه هستید؟ <a href="login.php">وارد شوید.</a></p>
        </form>
    </div>


    <script>
        function validateForm() {

            var password = document.getElementById("password").value;
            var phone = document.getElementById("mobilePhone").value;

            var passwordPattern = /^(?=.*[a-zA-Z])(?=.*[0-9]).{8,}$/;
            if (!password.match(passwordPattern)) {
                alert("رمز عبور باید شامل حروف انگلیسی و اعداد باشد");
                return false; 
            }
            var phonePattern = /^[0-9]{10,15}$/;
            if (!phonePattern.match(phone)) {
                alert("شماره تلفن را به درستی وارد کنید.\nمثال: 09123456789");
                return false;
            }
    
            return true;
        }
    </script>
</body>
</html>