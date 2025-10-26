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
        <form action="changePassCheck.php" method="post" onsubmit="return validateForm()">
        <p id="error" style="padding:20px 0 0;">
                <?php
                    if(!empty($_GET['error'])){
                        echo ($_GET['error']);
                    }
                ?>
            </p>
            <label for="nationalCode" style="padding-top: 50px;">کد ملی:</label>
            <input type="text" id="nationalCode" name="nationalCode" placeholder="کد ملی خود را وارد کنید." maxlength="10" minlength="10" required>
            <label for="newPass">رمز عبور جدید:</label>
            <input type="password"  id="newPass" name="newPass" placeholder="حداقل به طول 8 و شامل حروف انگلیسی و اعداد باشد"minlength="8" required>
            <label for="newPass2">تکرار رمز عبور جدید:</label>
            <input type="password"  id="newPass2" name="newPass2" placeholder="رمز عبور را برای اطمینان تکرار کنید."minlength="8" required>
            <input type="submit" value="تغییر رمز عبور" >
            <p style="padding-bottom: 50px;">بازگشت به <a href="login.php"> صفحه ورود</a></p>
        </form>
    </div>

    <script>
        function validateForm() {
            var password1 = document.getElementById("newPass").value;
            var password2 = document.getElementById("newPass2").value;
            var nationalCode = document.getElementById("nationalCode").value;
        
            var nationalCodePattern =/^\d{10}$/;
            if (!nationalCode.match(nationalCodePattern)) {
                alert("کد ملی را به درستی وارد کنید.");
                return false;
            }
            var passwordPattern = /^(?=.*[a-zA-Z])(?=.*[0-9]).{6,}$/;
            if (!password1.match(passwordPattern)) {
                alert("رمز عبور باید حداقل 8 کاراکتر و شامل حروف و اعداد انگلیسی باشد");
                return false; 
            }
            if ( password1 != password2){
                alert("گذرواژه ها با هم تطابق ندارند.");
                return false;  
            }
    
            return true;
        }
    </script>
</body>
</html>