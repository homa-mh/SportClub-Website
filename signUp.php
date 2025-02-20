<!DOCTYPE html>
<html lang="fa-ir">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="icon" href="image/favIcon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style/base.css">
    <link rel="stylesheet" href="style/login.css">
</head>
<body dir="rtl">
    <div class="divForm">
        <form action="signUpCheck.php" method="post" onsubmit="return validateForm()">
            <p id="error" style="padding:20px 0 0;">
                <?php
                    if(!empty($_GET['error'])){
                        echo ($_GET['error']);
                    }
                ?>
            </p>
            <label for="firstName" style="padding-top: 50px;">نام<span style="color: red;">*</span>:</label>
            <input type="text" id="firstName" name="firstName" placeholder=" نام خود را وارد کنید." minlength="3" required>
            <label for="lastName">نام خانوادگی<span style="color: red;">*</span>:</label>
            <input type="text" id="lastName" name="lastName" placeholder="نام خانوادگی خود را وارد کنید." minlength="3" required>
            <label for="nationalCode">کد ملی<span style="color: red;">*</span>:</label>
            <input type="text" id="nationalCode" name="nationalCode" placeholder="کد ملی خود را وارد کنید." maxlength="10" minlength="10" required>
            <label for="password">رمز عبور<span style="color: red;">*</span>:</label>
            <input type="password" name="password" id="password" minlength="8" placeholder="حداقل به طول 8 , شامل اعداد و حروف انگلیسی" required>
            <label for="birthDate">تاریخ تولد<span style="color: red;">*</span>:</label>
            <input type="date" id="birthDate" name="birthDate" required>
            <label for="mobilePhone">تلفن همراه<span style="color: red;">*</span>:</label>
            <input type="text" id="mobilePhone" name="mobilePhone" placeholder="09xx-xxx-xxxx" maxlength="11" minlength="11" required>
            <label for="email">ایمیل:</label>
            <input type="email" id="email" name="email" placeholder="xx@email.com">
            <input type="submit" value="ثبت نام">
            <p style="padding-bottom: 50px;">عضو باشگاه هستید؟ <a href="login.php">وارد شوید.</a></p>
        </form>
    </div>


    <script>
        function validateForm() {

            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var nationalcode = document.getElementById("nationalCode").value;
            var phone = document.getElementById("mobilePhone").value;

            var nationalcodePattern =/^\d{10}$/;
            if (!nationalcode.match(nationalcodePattern)) {
                alert("کد ملی را به درستی وارد کنید.");
                return false;
            }
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
            var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (!email.match(emailPattern)  && email != "") {
                alert("لطفا ایمیل خود را به درستی وارد کنید.");
                return false;
            }
    
            return true;
        }
    </script>
</body>
</html>