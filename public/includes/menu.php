<div class="header">
        <h2 class="pt-4">SPORT Complex</h2>
        <i class="fa-solid fa-bars" id="menuBtn" onclick="let sidebar =
        document.querySelector('.menu'); sidebar.classList.toggle('active');
        this.classList.toggle('fa-spin');"></i>

    </div>
    <div class="menu">
        <ul>
            <li class="text-nowrap">
                <a href="index.php">
                    <i class="fa-solid fa-house"></i>
                    <span class="menuItem">خانه</span>
                </a>
            </li>
            <?php
                if (isset($_SESSION['user'])) {
            ?>
            <li class="text-nowrap">
                <a href="#">
                <i class="fa-solid fa-address-card"></i>
                    <span class="menuItem menuLoginText">
                        <?php
                            echo($_SESSION['user']["name"] ?? "");
                        ?>
                    </span>
                </a>
            </li>
            <?php
                }
                else{
            ?>
            <li class="text-nowrap">
                <a href="login.php">
                    <i class="fa-solid fa-user"></i>
                    <span class="menuItem menuLoginText">ورود</span>
                </a>
            </li>
            <?php
                }
            ?>
            <li class="text-nowrap">
                <a href="schedule.php">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span class="menuItem">برنامه کلاس ها</span>
                </a>
            </li>
            <li class="text-nowrap">
                <a href="introduction.php">
                    <i class="fa-solid fa-question"></i>
                    <span class="menuItem">معرفی رشته ها</span>
                </a>
            </li>
            <li class="text-nowrap">
                <a href="reservation.php">
                    <i class="fa-solid fa-credit-card"></i>
                    <span class="menuItem">رزرو سالن</span>
                </a>
            </li>
            <?php
                if (isset($_SESSION['user']) && $_SESSION['user']["type"] == 1 ) {
            ?>
            <li class="text-nowrap">
                <a href="manageReserve.php">
                <i class="fa-solid fa-hammer"></i>
                    <span class="menuItem">مدیریت رزرو ها</span>
                </a>
            </li>
            <?php
                }
            ?>
            <li class="text-nowrap">
                <a href="awards.php">
                    <i class="fa-solid fa-award"></i>
                    <span class="menuItem">جوایز و افتخارات</span>
                </a>
            </li>

            <?php
                if (isset($_SESSION['user'])) {
            ?>
            <li class="text-nowrap">
                <a href="logOut.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span class="menuItem">خروج از حساب</span>
                </a>
            </li>
            <?php
                }
            ?>
        </ul>
    </div>