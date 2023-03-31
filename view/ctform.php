
 <div class="container">
   
<?php   
//var_dump($pro);
if($pro==0){
    echo"sp k tt";
}else{
    echo'  <h1 class="text-center text-danger"> '.$pro['name'].'</h2>
    <div class="row">
    <div class="col-4">
    <img src="./upload/'.$pro['img'].'"  class="width-100 mb-50">
 </div>
 <div class="col-8">
    <p> '.$pro['detail'].'</p> </div>';
    
}
  
?></div></div>