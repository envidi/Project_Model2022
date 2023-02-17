<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./css/editAccount.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/productDetail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Project Model</title>
</head>

<body>
    <div class="container">
        <header>
            <div class="navBar d-f jf-b al-c">
                <div class="logo d-f al-c">
                    <a href="#" class="d-f al-c">
                        <img src="./img/[removal.ai]_tmp-63a149830b78b.png" alt="">
                    </a>
                </div>

                <div class="nav_menu">
                    <ul class="d-f">
                        <li>
                            <a href="index.php?header=sign_in">
                                Trang chủ
                            </a>
                        </li>
                        <li>
                            <a href="index.php?act=introduce">
                                Giới thiệu
                            </a>
                        </li>
                        <li>
                            <a href="index.php?act=contact">
                                Liên hệ
                            </a>
                        </li>
                        <li>
                            <a href="index.php?act=support">
                                Gợi ý
                            </a>
                        </li>
                        <li>
                            <a href="index.php?act=QA">
                                Hỏi đáp
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="button_show_menu">
                    <button class="btn_show_menu">
                        <i class="fa-solid fa-bars menu"></i>
                        <i class="fa-solid fa-xmark close"></i>
                    </button>
                    <div class="show_menu">
                        <div class="logo2 d-f al-c">
                            <a href="#" class="d-f al-c">
                                <img src="./img/[removal.ai]_tmp-63a149830b78b.png" alt="">
                            </a>
                        </div>
                        <ul>
                            <li><a href="">Trang chủ</a></li>
                            <li><a href="">Giới thiệu</a></li>
                            <li><a href="">Liên hệ</a></li>
                            <li><a href="">Gợi ý</a></li>
                            <li><a href="">Hỏi đáp</a></li>
                        </ul>
                    </div>
                </div>

                <div class="search d-f">
                    <form action="" class="d-f jf-c">

                        <button class="button_search">
                            <?php
                            if (isset($info_user) && isset($info_password)) {
                                $user = $info_user;
                                $id = $info_id;
                                $password = $info_password;
                                $email = $info_email;
                                $url_edit_account = "index.php?act=edit_account&&header=sign_in&&user=$user&&password=$password&&email=$email&&id=$id";
                                $url_forget_password = "index.php?act=forget_password&&header=sign_in";
                                $url_log_out = "index.php?act=log_out";
                                $url_admin = "admin/index.php";
                                $url_my_cart = "index.php?act=mybill&&header=sign_in";

                            ?>

                                <div style="width:320px;height:60px;" class="d-f f-d info_user ">
                                    <div style="font-weight: 600;font-size:18px;width:100%;padding:0px 80px;box-sizing:border-box" class="d-f jf-b">Hello <?= $info_user ?>
                                        <a style="text-decoration: none;color:blue" href="<?= $url_my_cart ?> " class="d-f">
                                        cart
                                           
                                        </a>
                                    </div>
                                    <div class="d-f jf-b">
                                        <div>
                                            <a href="<?= $url_forget_password ?>">
                                                Quên mật khẩu
                                            </a>
                                        </div>
                                        <div>
                                            <a href="<?= $url_edit_account ?>">
                                                Cập nhật tài khoản
                                            </a>
                                        </div>
                                        <div>
                                            <a href="<?= $url_admin ?>">
                                                <?php if ($user == "admin") {
                                                    echo " Đăng nhập admin";
                                                } else {
                                                    echo "";
                                                }
                                                ?>

                                            </a>
                                        </div>
                                        <div >
                                            <a href="<?= $url_log_out ?>">
                                                Đăng xuất
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php

                            } else {
                            ?>
                                <a style="padding:6px 10px;display:block" href="./view/account/login.php">
                                    <?php echo  "Sign in" ?>
                                </a>

                            <?php   }
                            ?>


                        </button>
                    </form>
                </div>
            </div>

        </header>
        <main class="w-100">
            <div class="wrap_banner">
                <div class="contain-banner w-100">
                    <div class="banner_back d-f al-c jf-c">
                        <i class="fa-solid fa-chevron-left"></i>
                    </div>
                    <div class="banner_next d-f al-c jf-c">
                        <i class="fa-solid fa-chevron-right"></i>
                    </div>
                    <div class="banner w-100 d-f">

                        <div class="banner_img w-100">
                            <a href="#">
                                <img src="./img/638066393334352162_F-H6_1190x300.jpg" alt="">
                            </a>
                        </div>
                        <!-- ---- -->
                        <div class="banner_img w-100">
                            <a href="#">
                                <img src="./img/638067554009640020_F-H6_1190x300.jpg" alt="">
                            </a>
                        </div>
                        <!-- ---- -->
                        <div class="banner_img w-100">
                            <a href="#">
                                <img src="./img/638066548736519019_F-H6_1190x300.jpg" alt="">
                            </a>
                        </div>
                        <!-- ---- -->
                        <div class="banner_img w-100">
                            <a href="#">
                                <img src="./img/638070858296128581_H6 - 1190x300.jpg" alt="">
                            </a>
                        </div>
                        <!-- ---- -->
                        <div class="banner_img w-100">
                            <a href="#">
                                <img src="./img/638067214883821844_F-H6_1190x300.jpg" alt="">
                            </a>
                        </div>





                    </div>
                </div>
                <div class="info_banner">
                    <ul class="d-f jf-c">
                        <li class="d-f jf-c info_product active_info">Reno8 Series lì xì <br> đến 1.25 triệu</li>
                        <li class="d-f jf-c info_product">iPhone 14 Pro Max <br> lì xì đến 6.8 triệu</li>
                        <li class="d-f jf-c info_product">Tết vivo lì xì <br> ngay đến 1 triệu</li>
                        <li class="d-f jf-c info_product">Galaxy A series chỉ<br> từ 2.290.000đ</li>
                        <li class="d-f jf-c info_product">Mua Nồi chiên lì <br> xì ngay đến 50%</li>
                    </ul>
                </div>
            </div>
            <div class="contain_product">

            </div>