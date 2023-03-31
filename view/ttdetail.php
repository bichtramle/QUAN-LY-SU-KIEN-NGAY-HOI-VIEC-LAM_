<div class="container">
   
<?php   
//var_dump($pro);
if($pro==0){
    echo"sp k tt";
}else{
 
  echo'  <h1 class="text-center text-danger"> '.$pro['name'].'</h2>
    <div class="row">
    <div class="col-12"> <img src="./upload/'.$pro['hinh'].'"  class="img-fluid width-100px mb-50">
   
 </div>
 <div class="row">
 <div class="col-12">
  <h2> '.$pro['mota'].'</h2> </div><br>
    <p> '.$pro['detail'].'</p> </div>';
    
   
}
  
?></div></div>