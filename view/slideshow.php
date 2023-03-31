 <?php  $tensl=loadall_tensl($id=0); ?>
<center>  <div class="slideshow-container">
<?php             
      foreach ($tensl as $bv){ 
  echo '     
  <div class="mySlides animate-fading ">   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<img src="./upload/'.$bv['hinh'].'" class="img-fluid "style=" width:2000px;height:400px ">
  <div class="text"> <a'.$bv['name'].'</div>
  <h1   class="text-danger">   <a href="index.php?act=ttdetail&id='.$bv['id'].'"> '.$bv['name'].'</a></h1>
  </div>

  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
';
    }
?> <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  </div> 

<!-- The dots/circles -->

</div>

</center>
<script>
var myIndex = 0;
carousel2();

function carousel2() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel2, 7000);    
}
 
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" acctive", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " acctive";
}
</script>

<style>
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {

  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0px;
  border-radius: 3px 0 0px 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 80px;
  padding: 8px 12px;
  position: absolute;
  bottom: 100px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.acctive, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
 .mySlides {display:none; width:100%} .display-container{position:relative} /*---Css Nút qua lại---*/ .button-left{left:1%; font-size:20px} .button-right{right:1%; font-size:20px } .image-button{border:none;display:inline-block;padding:10px;height:50px;vertical-align:middle;overflow:hidden; color:#fff;background:#000;position:absolute;top:calc(50% - 25px); opacity:0.5;} .image-button:hover{color:#000;background:#ccc;} /*---Css Chấm tròn---*/ .badge {text-align:center; margin-bottom:16px; font-size:20px;position:absolute;bottom:0;} .badge-white{color:#000!important;background-color:#fff!important} .image-badge {display:inline-block;border-radius:50%;height:14px;width:14px; border:1px solid #ccc;} .image-badge:hover{background:#fff;} 
.animate-fading{width:100%; animation:fading 10s infinite}
@keyframes fading{0%{opacity:0}50%{opacity:1}100%{opacity:0}}
</style>