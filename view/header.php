<?php $dsdm=loadall_danhmuc();
?>
<!doctype html>
<html class="no-js" lang="">

    
<!-- Mirrored from www.radiustheme.com/demo/html/newsedge/newsedge/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Feb 2020 08:41:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>CHAO MUNG BAN DEN SU KIEN VIEC</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="Public/client/img/favicon.png">
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="Public/client/css/normalize.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="Public/client/css/main.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="Public/client/css/bootstrap.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="Public/client/css/animate.min.css">
        <!-- Font-awesome CSS-->
        <link rel="stylesheet" href="Public/client/css/font-awesome.min.css">
        <!-- Owl Caousel CSS -->
        <link rel="stylesheet" href="Public/client/vendor/OwlCarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="Public/client/vendor/OwlCarousel/owl.theme.default.min.css">
        <!-- Main Menu CSS -->
        <link rel="stylesheet" href="Public/client/css/meanmenu.min.css">
        <!-- Magnific CSS -->
        <link rel="stylesheet" type="text/css" href="Public/client/css/magnific-popup.css">
        <!-- Switch Style CSS -->
        <link rel="stylesheet" href="Public/client/css/hover-min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="Public/client/style.css">
        <!-- For IE -->
        <link rel="stylesheet" type="text/css" href="Public/client/css/ie-only.css" />
        <!-- Modernizr Js -->
        <script src="Public/client/js/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <!-- Preloader End Here -->
        <div id="wrapper" class="wrapper">
            <!-- Header Area Start Here -->
            <header>
                <div id="header-layout1" class="header-style1">
                    <div class="main-menu-area bg-primarytextcolor header-menu-fixed" id="sticker">
                        <div class="container">
                            <div class="row no-gutters d-flex align-items-center">
                                <div class="col-lg-2 d-none d-lg-block">
                                    <div class="logo-area">
                                        <a href="index.html">
                                            <img src="Public/client/img/ctu3.png" alt="logo" class="img-fluid">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-6 position-static min-height-none">
                                    <div class="ne-main-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li class="">
                                                    <a href="index.php">Trang chủ</a>
                                                  
                                                </li>
                                                <li>
                                                    <a href="baiviet.php">Tuyen dung</a>
                                                    <ul class="ne-dropdown-menu">
                                                        <li>
                                                        <ul class="ne-dropdown-menu">
                                                        <?php 
                                                        foreach ($dsdm as $dm) {
                                                            echo '<li><a href="index.php?act=baiviet&id='.$dm['id'].'">'.$dm['name'].'</a></li>';
                                                        }
                                                        ?>
                                                    </ul>
                
                                                    </ul>
                                                </li>
                                                <li>
                                                     <a  href="index.php?act=giaidap">FAQ</a>
                                                    <ul class="ne-dropdown-menu">
                                                        <li>
                                                        </li>
                                                    </ul>
                                                </li>
                                               
                                                <li>
                                                    
                                                    <a href="index.php?act=lienhe">Liên Hệ</a>
                                                </li>
                                            
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-12 text-right position-static">
                                    <div class="header-action-item">
                                        <ul>
                                            <li>
                                                <form id="top-search-form" class="header-search-light">
                                                    <input type="text" class="search-input" placeholder="Search...." required="" style="display: none;">
                                                    <button class="search-button">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </li>
                                         
                                         <?php
             if(isset($_SESSION['username'])&&($_SESSION['username']!="")){
                echo '<li><a href="index.php?act=userinfo">'.$_SESSION['username'].'</a></li>';
                echo '<li><a href="index.php?act=thoat">Thoat</a></li>';
            }else{
               ?>
            <li><button type="button" class="login-btn" data-toggle="modal" data-target="#signup">
                
                <i class="fa fa-user" aria-hidden="true"></i><a href="index.php?act=dangky">Dang ky</a></li></button>
            <li><button type="button" class="login-btn" data-toggle="modal" data-target="#myModal">
                <i class="fa fa-user" aria-hidden="true"></i><a href="index.php?act=dangnhap">Dang nhap</a></li></button>
            <?php }?>
          
                                           
                                            <li>
                                               
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header Area End Here -->
            <!-- News Feed Area Start Here -->
            <section class="bg-accent border-bottom add-top-margin">
                <div class="container">
                    <div class="row no-gutters d-flex align-items-center">
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="topic-box topic-box-margin">Thông báo</div>
                        </div>
                        <div class="col-lg-10 col-md-9 col-sm-8 col-6">
                            <div class="feeding-text-dark">
                                <ol id="sample" class="ticker">
                                    <li>
                                        <a href="#">Ngày hội việc làm Sinh viên lần thứ 6 năm 2022 được tổ chức vào</a>
                                    </li>
                                    <li>
                                        <a href="#"> ngày 29 tháng 7 năm 2022 tại</a>
                                    </li>
                                    <li>
                                        <a href="#">Trường đại học Cần Thơ</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- News Feed Area End Here -->
            <!-- News Info List Area Start Here -->
            <section class="bg-body">
                <div class="container">
                    <ul class="news-info-list text-center--md">
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>Việt Nam</li>
                        <li>                                
                            <i class="fa fa-calendar" aria-hidden="true"></i><span id="current_date"></span></li>
                        <li>
                            <i class="fa fa-clock-o" aria-hidden="true"></i>Last Update 11.30 am</li>
                        <li>
                            <i class="fa fa-cloud" aria-hidden="true"></i>29&#8451; Cần Thơ, Việt Nam</li>
                    </ul>
                </div>
              
            </section>
                                            