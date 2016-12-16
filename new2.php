<!DOCTYPE html>
<html> 
<head> 
<meta charset = "utf-8" > 
<title>Главная</title> 
<link rel="stylesheet" type="text/css" href="styles.css"> 
</head> 
<body bgcolor=#D0D2FF>
	<div class ="main"> 
		<div>
			<?php include ("header.php");?>   	
			<div class = "foto">
				<div class="slideshow-container">
					<div class="mySlides fade">  
						<img src="001.jpg" width="640" height="360">  
					</div>
					<div class="mySlides fade">  
						<img src="002.jpg" width="640" height="360">  
					</div>
					<div class="mySlides fade">  
						<img src="003.jpg" width="640" height="360">	
					</div>
					<div class="mySlides fade">  
						<img src="004.jpg" width="640" height="360">  
					</div>
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				<br>
				<div style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span>
					<span class="dot" onclick="currentSlide(2)"></span>
					<span class="dot" onclick="currentSlide(3)"></span>
					<span class="dot" onclick="currentSlide(4)"></span>
				</div>
			</div>
			<div> 
				<div class = "content"> </div> 
				<div class = "news"><p align=center><font color=yellow><b>Блок новостей</b></font></div> 
			</div> 
		</div>
		<?php include('footer.php');?>
		</div> 
	
	</div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  //slideIndex++;
  
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
 // setTimeout(showSlides(slideIndex ++), 2000);
}
</script>
</body > 
</html> 



