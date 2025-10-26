<?php
// require_once "includes/auth_check.php";
require_once "../app/session_config.php";
?>
<!DOCTYPE html>
<html lang="fa-ir">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>باشگاه ورزشی</title>
    <script src="https://kit.fontawesome.com/067f2c805d.js" crossorigin="anonymous"></script>
    <link rel="icon" href="image/favIcon.ico" type="image/x-icon">
     <!-- BootStrap Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- my own css -->
    <link rel="stylesheet" href="../style/base.css">
    <link rel="stylesheet" href="../style/index.css">
</head>
<body>
    <?php
    require_once "includes/menu.php";

    ?>
    
    <div class="divPic"></div>
        <p id="error" style="padding:20px 0 0;">
            <?php
                if(!empty($_GET['error'])){
                    echo ($_GET['error']);
                }
            ?>
        </p>
        <h1 style="text-align: center; margin-top: 100px;">باشگاه ورزشی</h1>
        <hr>
        <div class="content">
            <div class="divInfo">
                <h2>درباره ما</h2>
                <p>
                    <!-- لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. -->
                    باشگاه ورزشی ما با هدف ارائه بهترین خدمات ورزشی و ایجاد فضایی الهام‌بخش برای علاقه‌مندان به ورزش و تناسب اندام تأسیس شده است. ما معتقدیم که ورزش تنها یک فعالیت روزمره نیست، بلکه راهی برای دستیابی به سلامتی، آرامش ذهنی و تقویت انگیزه در زندگی است. باشگاه ما با استفاده از تجهیزات پیشرفته، محیطی کاملاً مجهز و کلاس‌های متنوع ورزشی، نیازهای تمامی علاقه‌مندان، از مبتدی تا حرفه‌ای را پوشش می‌دهد. تیم مربیان حرفه‌ای ما با سال‌ها تجربه آماده‌اند تا با ارائه برنامه‌های تمرینی هدفمند، شما را در رسیدن به اهدافتان یاری کنند. همچنین، ما محیطی صمیمی و دوستانه فراهم کرده‌ایم تا هر عضو احساس راحتی و انرژی بیشتری در طول تمرینات خود داشته باشد.
                </p>
            </div>
            <div class="divInfo">
                <h2>چرا باشگاه ما؟</h2>
                <p>
                    <!-- لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. -->
                    باشگاه ما به دلایل زیادی می‌تواند انتخاب اول شما باشد. ما امکانات متنوعی را برای رفاه حال اعضای خود فراهم کرده‌ایم، از جمله سالن‌های تمرینی مجهز، کلاس‌های گروهی هیجان‌انگیز و فضایی آرام برای استراحت و بازیابی انرژی. مربیان ما با طراحی برنامه‌های اختصاصی متناسب با اهداف و نیازهای هر فرد، به شما کمک می‌کنند تا به نتیجه مطلوب برسید. علاوه بر این، باشگاه ما بر اساس اصول بهداشتی و استانداردهای روز طراحی شده و محیطی ایمن و سالم را برای ورزش فراهم می‌کند. انعطاف‌پذیری در رزرو سالن‌های ورزشی و دسترسی آسان به امکانات از دیگر مزایای ما است. با انتخاب باشگاه ما، شما فقط به یک محیط ورزشی نمی‌پیوندید، بلکه عضوی از یک جامعه فعال و پرانرژی خواهید شد.
                </p>
            </div>
        </div>

        <div class="divPic2"></div>

        <div class="content"  id="content2">
            <div class="divInfo">
                <h2>شرایط ثبت نام:</h2>
                <p>
                    <!-- لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. -->
                    فرآیند عضویت در باشگاه ما بسیار آسان است. شما می‌توانید با مراجعه به وب‌سایت باشگاه، اطلاعات اولیه خود را ثبت کنید و عضویت خود را فعال نمایید. پس از تکمیل عضویت اولیه، امکان استفاده از خدمات متنوع ما از جمله رزرو سالن‌های ورزشی برای شما فراهم می‌شود. در بخش رزرو آنلاین وب‌سایت، می‌توانید سالن ورزشی مورد نظر خود را بررسی کرده و زمان مناسب را انتخاب کنید. تیم پشتیبانی ما نیز همواره آماده‌اند تا در صورت نیاز به اطلاعات بیشتر یا راهنمایی، شما را همراهی کنند. با عضویت در باشگاه ما و استفاده از خدمات رزرو سالن، می‌توانید تمرینات ورزشی خود را با برنامه‌ریزی بهتر و در فضایی ایده‌آل انجام دهید. منتظر حضور شما هستیم!
                </p>
            </div>
            <div class="divInfo">
                <div class="carousel slide" data-bs-ride = "carousel" id="divCarousel">
                    <div class="carousel-indicators">
                        <button data-bs-target="#divCarousel"  data-bs-slide-to="0" class="active"></button>
                        <button data-bs-target="#divCarousel"  data-bs-slide-to="1"></button>
                        <button data-bs-target="#divCarousel"  data-bs-slide-to="2"></button>
                        <button data-bs-target="#divCarousel"  data-bs-slide-to="3"></button>
                        <button data-bs-target="#divCarousel"  data-bs-slide-to="4"></button>
                    </div>
                    <div class="carousel-inner" style="border-radius: 30px;">
                        <div class="carousel-item active">
                            <img src="../image/gym.jpg" alt="picture of our gym" class="d-block w-100 active">
                        </div>
                        <div class="carousel-item">
                            <img src="../image/volleyball.jpg" alt="picture of our gym" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="../image/trx.jpg" alt="picture of our gym" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="../image/court.jpg" alt="picture of our gym" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="../image/futsal.jpg" alt="picture of our gym" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" data-bs-target="#divCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" data-bs-target="#divCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        </div>

    <div class="footer">
        <div class="footerRight">
                <p>برای دریافت اطلاعات بیشتر یا ثبت‌نام، با ما تماس بگیرید:</p>
                <i class="fa-solid fa-phone"></i>
                <span><a href="tel:02133112233">021-33xxxx18</a></span>
                <br>
                <i class="fa-solid fa-map-location-dot"></i>
                <span><a href="https://maps.app.goo.gl/R9tv3nK4LbYBEAy86" target="_blank">تهران، منطقه فلان، خیابان فلان</a></span>
            </div>
        <div class="footerLeft">
            <br>
            <i class="fa-brands fa-telegram"></i>
            <span><a href="https://t.me/" target="_blank" style="text-align: left;">telegram</a></span>
            <br>
            <i class="fa-brands fa-instagram"></i>
            <span><a href="https://instagram.com" target="_blank" style="text-align: left;">instagram</a></span>
        </div>
    </div>
</body>
</html>