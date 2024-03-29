<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/WP-css/log-in.css">
    <?php
    $link= mysqli_connect("localhost","root","","dr-hesabi");
    if(mysqli_connect_errno()){
        exit("خطایی با شرح زیر رخ داده است:".mysqli_connect_errno());
    }
    //$query = "SELECT * FROM 'student' WHERE stu_id='$username' AND stu_pass='$password'";
    //$result = mysqli_query($link, $query);
    ?>
</head>
<body class="d-flex align-items-center justify-content-center">
    <div class="log_in_form p-5 rounded-4 d-flex flex-column align-items-center">
        <h3 class="fm login_title">
            ورود
        </h3>
        <div class="mt-2">
            <span class="fyl login_singup">ثبت نام نکردی ؟</span>
            <a class="fy text-decoration-none login_singup_link" href="">ثبت نام</a>
        </div>
        <div class="d-flex flex-column mt-4">
            <div class="ps-2 position-relative inp_login_con rounded-3 mb-1">
                <input class="ps-4 pe-3 rounded-3 inp_login fyl" type="text" name="card" placeholder="شماره دانش آموزی">
                <i class="icon_login bi bi-person"></i>
            </div>
            <div class="info_en_c d-none justify-content-between align-items-center px-2">
                <p class="info_en_p fy m-0">شماره دانش آموزی اشتباه است!</p>
                <i class="info_en_i bi bi-ban"></i>
            </div>
            <div class="mt-3 ps-2 position-relative inp_login_con rounded-3 mb-1">
                <input class="ps-4 pe-3 rounded-3 inp_login fyl" type="password" name="pass" placeholder="کلمه عبور">
                <i class="icon_login bi bi-key"></i>
            </div>
            <div class="info_en_ps d-none justify-content-between align-items-center px-2">
                <p class="info_en_p fy m-0">کلمه عبور اشتباه است!</p>
                <i class="info_en_i bi bi-ban"></i>
            </div>
            <input class="py-2 px-3 mt-3 rounded-3 inp_login_btn fy" type="button" value="ورود">
        </div>
    </div>
    <div class="modal_sin d-flex justify-content-center align-items-center d-none" id="modal_log">
        <div class="d-flex justify-content-between align-items-center modal_con p-3 rounded-4 flex-column">
            <div class="d-flex justify-content-between align-items-center title_modal_con">
                <h5 class="ddb mb-0">
                    مشکلی پیش اومده!
                </h5>
            </div>
            <div class="mt-3">
                <p class="fyl">
                    حساب کاربری شما هنوز توسط هنرستان تایید نشده برای تایید حساب با پشتیبانی سایت ارتباط برقرار کنید.
                </p>
                <a href="#" class="ddb text-decoration-none modal_btn py-2 rounded-3 text-white" id="un_modal_log">
                    متوجه شدم !
                </a>
            </div>
        </div>
    </div>
    <script src="../JS/login.js"></script>
    <script src="../JS//database.js"></script>
    <script src="../JS/shair.js"></script>
</body>
</html>