<!DOCTYPE html>
<html> 
<head> 
<meta charset = "utf-8"> 
<title>Контакты</title> 
<link rel="stylesheet" type="text/css" href="styles.css"> 
</head> 
<body bgcolor=#D0D2FF>
	<div class ="main"> 
		<div>
			<?php include ("header.php");?>   	
			<?php include ("menuAdmin.php");?>  	   
				<div class = "content">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d164153.5222906638!2d36.14574365104097!3d49.99450702760941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a09f63ab0f8b%3A0x2d4c18681aa4be0a!2z0KXQsNGA0YzQutC-0LIsINCl0LDRgNGM0LrQvtCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1478083267895" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div> 
				<div class = "news">
					<p align=center><font color=yellow><b>Телефон:1234567890</b></font>
					<p align=center><font color=yellow><b>Email:1234567890</b></font>
					<form >
					<fieldset ><legend>Комментарий</legend>
						<textarea name="comment" cols="65%" rows="25%"></textarea></p>
						<p><input type="submit" value="Отправить">
						<input type="reset" value="Очистить"></p>
					<br />
					</fieldset>
					</form>
				</div> 
		</div> 
		<?php include('footer.php');?> 
	</div>
</body > 
</html> 
