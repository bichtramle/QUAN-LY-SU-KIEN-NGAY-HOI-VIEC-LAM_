

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../Public/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../Public/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../Public/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="../Public/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../Public/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../Public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../Public/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="../Public/admin/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="../Public/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
             
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="https://th.bing.com/th/id/OIP.nw4My-PLFs0CcJSR7O4JIgHaJJ?pid=ImgDet&rs=1-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
          
                        <a href="#" class="d-block"></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                         <li class="nav-item has-treeview">
                            <a href="index.php" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Trang chủ
                                </p>
                            </a>
                        </li> 
                         <li class="nav-item has-treeview">
                            <a href="index.php?act=addtt" class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Quản lý Trang chủ
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                                </li>
                        <li class="nav-item has-treeview">
                            <a href="index.php?act=adddm" class="nav-link active">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                  Quan ly danh mục
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                           
                        </li>
                      
                        <li class="nav-item has-treeview">
                            <a href="index.php?act=addbv" class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Quản lý bài viết sự kiện
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                                </li>
                            <li class="nav-item has-treeview">
                            <a href="index.php?act=addform" class="nav-link ">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Quản lý đơn đăng ký Doanh nghiệp
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                          
                            <li class="nav-item has-treeview">
                            <a href="index.php?act=adduv" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Quản lý đơn đăng kí ứng viên
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                                </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>