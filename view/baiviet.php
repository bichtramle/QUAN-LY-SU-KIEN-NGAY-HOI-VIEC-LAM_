
<?php $dsbv=loadall_baiviet_home($id,$kyw);
?>
<?php $dsdm=loadall_danhmuc();
?>
   
                 <section class="section-space-less30">   
               <div class="container">
            <section>
        <div class="text-right">  <form action="index.php?act=baiviet" method="post">
            
            <input type="text" name="kyw" >
            <input class="btn-danger" type="submit" name="timkiem" value="Tìm kiếm">
            </form>
</div>
</section>
               <div class="row mb-2">
               <h2> <strong class="text-center"><?=$tenbv?></strong></h2>
           
            
                   <div class="row">
                    
                   <?php 
                   
                                   foreach ($dsbv as $bv){ 
                                       echo '        
                                
                                       <div class="col-lg-4 col-md-12">
                                       <div class="hover-show-play-btn item-shadow-gray mb-30">
                                           <div class="">
                                               <img src="./upload/'.$bv['img'].'"  class="img-fluid "> 
                                         </div>
                                               <div class="text-center">
                                               <h3 class="">
                                               <a class="chu" href="index.php?act=bvdetail&id='.$bv['id'].'"> '.$bv['name'].'</a></h3> 
                                        <p> '.$bv['mota'].'</p>           
                                           </div> 
                                    </div>               
                                     
                   </div>';
          
                                   }
                                   ?>
                                    
           </section>

           
           </section>
           <style>
    .chu{
color:#aa3300;
    }
    </style>