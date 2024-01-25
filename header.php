
    <header class="header">
        <nav class="nav">
            <div class="container-fluid px-0" style="z-index: 11;">
                <div class="nav-container py-4">
                    <div class="row align-items-center justify-content-sm-between m-0">
                        <div class="d-xl-none col-sm-3 me-3 col-5">
                            <div class="list_res">
                                <i class="bi bi-list" id="open_head"></i>
                            </div>
                        </div>
                        <div class="me-xxl-5 col-xxl-1 col-xl-1 col-sm-4 d-flex justify-content-sm-center col-5 justify-content-end">
                            <img class="img-fluid me-xxl-5 me-xl-0" src="./images/logo-png.png" height="64" width="64" alt="">
                        </div>
                        <div class="col-xl-8 d-xl-block d-none col-xxl-7">
                            <ul class="menu d-flex p-0 m-0 list-unstyled">
                            <li class="menu_li me-5">
                                    <a href="#" class="menu_link text-decoration-none d-flex align-items-center">
                                        خانه             
                                    </a>
                                </li>
                                <li class="menu_li me-5 position-relative li_d">
                                    <a href="#" class="menu_link text-decoration-none">
                                        هنرستان
                                        <i class="bi bi-chevron-compact-down"></i>
                                    </a>
                                    <ul style="min-width:11rem;" class="dropmenu list-unstyled p-1 bg-white position-absolute rounded-4 mt-1">
                                        <li class="drop_li px-3 py-3">
                                            <a href="./S_history.php" class="drop_link text-decoration-none">تاریخچه تاسیس</a>
                                        </li>
                                        <li class="drop_li px-3 py-3">
                                            <a href="./S_majors.php" class="drop_link text-decoration-none">رشته های تحصیلی</a>
                                        </li>
                                        <li class="drop_li px-3 py-3">
                                            <a href="#" class="drop_link text-decoration-none">افتخارات هنرستان</a>
                                        </li>
                                        <li class="drop_li px-3 py-3">
                                            <a href="#" class="drop_link text-decoration-none">فارغ التحصیلان</a>
                                        </li>
                                        <li class="drop_li px-3 py-3">
                                            <a href="#" class="drop_link text-decoration-none">عوامل اداری</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu_li me-5 position-relative li_d">
                                    <a href="#" class="menu_link text-decoration-none">
                                        اطلاع رسانی
                                        <i class="bi bi-chevron-compact-down"></i>
                                    </a>
                                    <ul style="min-width:11rem;" class="dropmenu list-unstyled p-1 bg-white position-absolute rounded-4 mt-1">
                                        <li class="drop_li px-3 py-3">
                                            <a href="#" class="drop_link text-decoration-none">اخبار هنرستان</a>
                                        </li>
                                        <li class="drop_li px-3 py-3">
                                            <a href="#" class="drop_link text-decoration-none">گالری تصاویر</a>
                                        </li>
                                        <li class="drop_li px-3 py-3">
                                            <a href="#" class="drop_link text-decoration-none">هنرآموزان نمونه</a>
                                        </li>
                                        <li class="drop_li px-3 py-3">
                                            <a href="#" class="drop_link text-decoration-none">هنرجویان نمونه</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu_li me-5 position-relative li_d">
                                    <a href="#" class="menu_link text-decoration-none">
                                        فروشگاه
                                    </a>
                                </li>
                                <li class="menu_li me-5">
                                    <a href="#" class="menu_link text-decoration-none">
                                        ارتباط با ما
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xxl-2 col-xl-3 col-sm-4 d-flex justify-content-end justify-content-xxl-start d-none" id="notLogin">
                            <div class="log_in text-center position-relative">
                                <a href="./web-page/login.php" class="text-decoration-none log_in_link_1 rounded-pill text-white">ورود</a>
                                <a href="./web-page/singup.php" class="text-decoration-none log_in_link_2 rounded-pill text-white">عضویت</a>
                            </div>
                        </div>
                        <div class="col-4 col-xl-2 d-none" id="loginTrue">
                            <div class="ms-5 d-flex justify-content-end">
                                <img class="img-fluid rounded-circle img_login" height="56px" width="56px" src="./images/1c059eb44c15f8a6ddab2f7fc25f6908.png" alt="">
                            </div>
                            <div class="ms-5 position-relative d-flex justify-content-end d-none dashboard">
                                <ul class="list-unstyled ul_login bg-white pt-3 rounded-4">
                                    <a href="" class="py-2 text-decoration-none title_login d-flex justify-content-between align-items-center login_border">
                                        <div class="">
                                            <h5 class="fyb ms-5" id="stuName">

                                            </h5>
                                        </div>
                                        <div class="">
                                            <i class="title_icon_login bi bi-chevron-left"></i>
                                        </div>
                                    </a>
                                    <li class="m li_login_s">
                                        <a href="#" class="py-2 login_link_s text-decoration-none d-flex login_border">
                                            <div class="d-flex align-items-center ms-3">
                                                <i class="login_icon_s bi bi-duffle"></i>
                                            </div>
                                            <div class="d-flex align-items-center hover_link">
                                                <span>کلاس من</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="m li_login_s">
                                        <a href="#" class="py-2 login_link_s text-decoration-none d-flex login_border">
                                            <div class="d-flex align-items-center ms-3">
                                                <i class="login_icon_s bi bi-chat"></i>
                                            </div>
                                            <div class="d-flex align-items-center hover_link">
                                                <span>پیغام ها</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="m li_login_s">
                                        <a href="#" class="py-2 login_link_s text-decoration-none d-flex" id="logEx">
                                            <div class="d-flex align-items-center ms-3">
                                                <i class="login_icon_s bi bi-box-arrow-in-right"></i>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span id="logEx">خروج</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- HEADER MOBILE -->
    <div class="head_m unC" id="head_m">
        <div class="titl_head_m d-flex justify-content-between align-items-center border-bottom">
            <img class="img-fluid" width="50" height="50" src="./images/logo-png.png" alt="" srcset="">
            <i class="bi bi-x titl_head_m_icon" id="clos_head_m"></i>
        </div>
        <ul class="menu d-flex p-0 m-0 list-unstyled flex-column">
            <li class="menu_li mt-4">
                <a href="#" class="fy menu_link text-decoration-none d-flex align-items-center">
                    خانه             
                </a>
            </li>
            <li class="menu_li mt-4 position-relative li_d" id="dropmenu_mh">
                <a href="#" class="fy menu_link text-decoration-none">
                    شاخه های تحصیلی
                    <i class="bi bi-chevron-compact-down"></i>
                </a>
                <ul class="list-unstyled p-1 bg-white rounded-4 mt-1 d-none" id="dropMhUL">
                    <li class="drop_li px-4 py-3">
                        <a href="#" class="fy drop_link text-decoration-none">شبکه و نرم افزار</a>
                    </li>
                    <li class="drop_li px-4 py-3">
                        <a href="#" class="fy drop_link text-decoration-none">الکترونیک</a>
                    </li>
                    <li class="drop_li px-4 py-3">
                        <a href="#" class="fy drop_link text-decoration-none">الکتروتکنیک</a>
                    </li>
                </ul>
            </li>
            <li class="menu_li mt-4">
                <a href="#" class="fy menu_link text-decoration-none">
                    تصاویر
                </a>
            </li>
            <li class="menu_li mt-4">
                <a href="#" class="fy menu_link text-decoration-none">
                    درباره هنرستان
                </a>
            </li>
            <li class="menu_li mt-4">
                <a href="#" class="fy menu_link text-decoration-none">
                    ارتباط با ما
                </a>
            </li>
            <li class="menu_li mt-4" id="head_m_stat_li">
                <a href="#" class="fy menu_link text-decoration-none" id="head_m_stat">

                </a>
            </li>
        </ul>
    </div>
