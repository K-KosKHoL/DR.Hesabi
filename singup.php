<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ثبت نام</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/WP-css/singup.css">
    <link rel="stylesheet" href="../css/WP-css/log-in.css">
    <?php
    $link= mysqli_connect("localhost","root","","dr-hesabi");
    if(mysqli_connect_errno()){
        exit("خطایی به این شرخ رخ داده:".mysqli_connect_errno());
    }
   
    //$querys="INSERT INTO `student` (`stu_id`, `stu_fname`, `stu_lname`, `stu_phone`, `stu_date`, `stu_pass`) VALUES ('12345', 'علی', 'خرسند', '0915812354', '2024-01-01', '12345678');";
    
    ?>
</head>
<body class="d-flex align-items-center justify-content-center">
    <div class="log_in_form p-5 rounded-4 d-flex flex-column align-items-center">
        <h3 class="fm login_title">
            ثبت نام
            
        </h3>
        <div class="mt-2">
            <span class="fyl login_singup">قبلا ثبت نام کردی ؟</span>
            <a class="fy text-decoration-none login_singup_link" href="">ورود</a>
        </div>
        <div class="d-flex flex-column mt-4">
            <div class="mt-2 ps-2 position-relative inp_login_con rounded-3 mb-2 d-flex align-items-center">
                <input class="ps-4 pe-3 rounded-3 inp_login fyl" name="card-s" type="text" placeholder="شماره دانش آموزی">
                <i class="icon_login bi bi-person"></i>
            </div>
            <div class="info_en_c d-none justify-content-between align-items-center px-2">
                <p class="info_en_p fy m-0">شماره دانش آموزی اشتباه است!</p>
                <i class="info_en_i bi bi-ban"></i>
            </div>
            <div class="mt-2 ps-2 position-relative inp_login_con rounded-3 mb-2 d-flex align-items-center">
                <input class="ps-4 pe-3 rounded-3 inp_login fyl" name="number-s" type="text" placeholder="شماره تلفن">
                <i style="font-size: 18px;" class="icon_login bi bi-telephone"></i>
            </div>
            <div class="info_en_n d-none justify-content-between align-items-center px-2">
                <p class="info_en_p fy m-0">شماره تلفن اشتباه است!</p>
                <i class="info_en_i bi bi-ban"></i>
            </div>
            <div class="mt-2 ps-2 position-relative inp_login_con rounded-3 mb-2 d-flex align-items-center">
                <input class="ps-4 pe-3 rounded-3 inp_login fyl" name="pass-s" type="password" placeholder="کلمه عبور">
                <i class="icon_login bi bi-key"></i>
            </div>
            <div class="info_en_ps d-none justify-content-between align-items-center px-2">
                <p class="info_en_p fy m-0">کلمه عبور باید از 8 رقم بیشتر باشد!</p>
                <i class="info_en_i bi bi-ban"></i>
            </div>
            <div class="mt-2 ps-2 position-relative inp_login_con rounded-3 mb-2 d-flex align-items-center">
                <input class="ps-4 pe-3 rounded-3 inp_login fyl" name="rpass-s" type="password" placeholder="تکرار کلمه عبور">
                <i class="icon_login bi bi-key"></i>
            </div>
            <div class="info_en_rps d-none justify-content-between align-items-center px-2">
                <p class="info_en_p fy m-0">کلمه عبور تطابق ندارد!</p>
                <i class="info_en_i bi bi-ban"></i>
            </div>
            <input class="py-2 px-3 mt-3 rounded-3 inp_login_btn_s fy" type="button" value="ثبت نام" id="singup" >
        </div>
    </div>
    <div class="modal_sin d-flex justify-content-center align-items-center d-none" id="modal">
        <div class="d-flex justify-content-between align-items-center modal_con p-3 rounded-4 flex-column">
            <div class="d-flex justify-content-between align-items-center title_modal_con">
                <h5 class="ddb mb-0">
                    اطلعات ارسال شد.
                </h5>
            </div>
            <div class="mt-3">
                <p class="fyl">
                    اطلعات شما توسط هنرستان بررسی خواهد شد و فعالسازی حساب شما از طریق پیامک به شما ارسال خواهد شد.
                </p>
                <a href="#" class="ddb text-decoration-none modal_btn py-2 rounded-3 text-white" id="un_modal">
                    متوجه شدم !
                </a>
            </div>
        </div>
    </div>
    <script src="../JS/database.js"></script>
    <script src="../JS/login.js"></script>
    <script src="../JS/singup.js"></script>
</body>
</html>