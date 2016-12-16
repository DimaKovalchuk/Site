<!DOCTYPE html>
<html> 
<head> 
<meta charset = "utf-8" > 
<title>Главная</title> 
<link rel="stylesheet" type="text/css" href="styles.css"> 
</head>


<style> 
iframe{
	margin-left: 5%;
}
</style>


<body bgcolor=#D0D2FF>
	<div class ="main"> 
		<div>
			<div class = "header">
				<div class = "login"> 
					<?php
							session_start();
						?>

						<?php
							if($_SESSION["login"]) {
						?>
						Welcome <?php echo $_SESSION["login"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.</a>
						<?php
						}
						?>
				</div> 
				<div class = "title"><b>Новости науки и техники</b></div> 
			</div>   	
			<?php include ("menuAdmin.php");?>   	
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
				<div class = "content">
					<p>
						<br>
							<iframe width="710" height="400" src="https://www.youtube.com/embed/PAynoysICd4" frameborder="10"  marginheight="10" marginwidth="10"  allowfullscreen></iframe>
						<br/>	
					</p>
					<p>
					<br>
						<p align=justify> <font size=4>«Новости науки и техника» - сайт широкопрофильный. Здесь можно найти интереснейшую информацию о развитии авиации, кораблестроения, бронетехники, средств связи, космонавтики, точных, естественных и социальных наук. Наши читатели - неравнодушные  люди, интересующиеся научно-техническим прогрессом.</font></p>
					
					<br/>	
</p>					
					
				
						 
					 
					 
				</div> 
				<div class = "news"><p align=center><font color=yellow><b>Блок новостей</b></font>
					<TABLE border="0" width="100%" align=center>
					<?php
						$sdd_db_host='localhost';
						$sdd_db_name='test';
						@mysql_connect($sdd_db_host);
						@mysql_select_db($sdd_db_name);
						$result=mysql_query('SELECT * FROM news ORDER BY id DESC LIMIT 3');
						
						
						
						
						while ($row=mysql_fetch_array($result))
						{ // выводим данные
							echo 
							"<TR>\n\t
								<TD width=30% rowspan=2 align=middle ><img src=".$row["foto"]." align=middle width=100% height=100 >".
							"</TD >"."\n".
							"<TD width=70% align=Center>"."".$row["categorij"].
							"</TD>"
							."\n".
						"</TR>"."\n".
						"<TR>\n
							<TD width=70%>"
							.$row["new"].
								
							"</TD >"."\n".
							"</TR >"."\n";
						}
						//mysql_close();
					?>

					
					</TABLE >

				</div> 
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


