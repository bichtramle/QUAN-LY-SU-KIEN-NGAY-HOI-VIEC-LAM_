
<?php 
$mn=loadall_baivietmoi("",$id=0)
 
?>
<?php 
$HOT=loadall_baiviethot("",$id=0)

?>
<?php 
$tb=loadall_baiviettb("",$id)

?>
<?php $dsdm=loadall_danhmuc();
?>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>NewsEdge | Home </title>
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
     <?php include "view/slideshow.php";
     ?>
    <body><div class="container">
       <h2 class="text-danger"> <a href="index.php?act=dsdn">Danh sách doanh nghiệp tham gia</h2>
          <h2 >Doanh nghiệp Xem hướng dẫn đăng ký tham gia <a class="text-danger " href="index.php?act=hddk"> tại đây</a></h2>
         
         <h2 >Uứng viên Xem hướng dẫn đăng ký tham gia <a class="text-danger " href="index.php?act=hduv"> tại đây</a></h2>
        </div>
            <!-- News Slider Area End Here -->
            <!-- Feature News Area Start Here -->
            
          
                      </div>    
                             <div class="container">
                                
                       <div class="container">
                <section class="section-space-less30">
                  <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="mb-30-r ne-isotope">
                                <div class="topic-border color-azure-radiance mb-30">
                                    <div class="topic-box-lg color-azure-radiance">Tin tức mới nhất</div>
                                   
                                    
                                    </div> </div> </div> </div>        <div class="row">
     <?php 
                   
                   foreach ($HOT as $bv){ 
                       echo '        

                  
                      <div class="col-lg-6 col-md-12">
                       <div class=" mb-30">
                           <div class="">
                               <img src="./upload/'.$bv['img'].'"  class="width-100 mb-10"> 
                         </div>
                               <div class="text-center ">
                               <h3 ">
                               <a class="chu" href="index.php?act=bvdetail&id='.$bv['id'].'"> '.$bv['name'].'</a></h3>    
                        <p> '.$bv['mota'].'</p>        
                           </div> 
                    </div>               
                                      
 </div>';
 
                   }
                   ?>
                  
                                         <?php 
                   
                   foreach ($tb as $bv){ 
                       echo '        

                       <div class="col-lg-6 col-md-12">
                       <div class=" mb-30">
                           <div class="">
                               <img src="./upload/'.$bv['img'].'"  class="width-100 mb-10"> 
                         </div>
                               <div class="text-center ">
                               <h3 ">
                               <a class="chu" href="index.php?act=bvdetail&id='.$bv['id'].'"> '.$bv['name'].'</a></h3>    
                        <p> '.$bv['mota'].'</p>        
                           </div> 
                    </div>               
                                      
 </div>';
 
                   }
                   ?>
                                    </div> </div> </div> </div> 
                <div class="container">
                <section class="section-space-less30">
                  <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="mb-30-r ne-isotope">
                                <div class="topic-border color-azure-radiance mb-30">
                                    <div class="topic-box-lg color-azure-radiance">Tuyển dụng  mới nhất</div>
                                   
                                    
                                    </div> </div> </div> </div> 
                               
           
                    <div class="row"> 
                        
                        <?php 
                   
                   foreach ($mn as $bv){ 
                       echo '        

                       <div class="col-lg-6 col-md-12">
                       <div class=" mb-30">
                           <div class="">
                               <img src="./upload/'.$bv['img'].'"  class="width-100 mb-10"> 
                         </div>
                               <div class="text-center ">
                               <h3 ">
                               <a class="chu" href="index.php?act=bvdetail&id='.$bv['id'].'"> '.$bv['name'].'</a></h3>    
                        <p> '.$bv['mota'].'</p>        
                           </div> 
                    </div>               
                                      
 </div>';
 
                   }
                   ?>
                                </div></div></div></div> </div></div></div></div></div> </div>
            </section>
            <!-- Feature News Area End Here -->
            <!-- Latest Articles Area Start Here -->
       

<!-- Mirrored from www.radiustheme.com/demo/html/newsedge/newsedge/index6.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Feb 2020 08:43:28 GMT -->
<style>
    .chu{
color:#aa3300;
    }
    </style>