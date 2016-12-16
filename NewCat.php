<!DOCTYPE html>
<html> 
<head> 
<meta charset = "utf-8" > 
<title>Добавление категории</title> 
<link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
	<body bgcolor=#D0D2FF>
	<div class ="main"> 
		<div>
			<?php include ("header.php");?>   	
			<?php include ("menuAdmin.php");?>   	
			<div class = "categorii">
				<h1><p align=center>Добавление категории</p></h1>
				<br >
					<form align=center >
						<fieldset >
							<br >
								<p align=center>Название категории: <input type="text" name="categorij" required/></p>
							</br>
							<br>
								<p align=center>Название картинки: <input type="text" name="foto" required/></p>								
							</br>
							<br>
								<p align=center>Название страницы: <input type="text" name="str" required/></p>								
							</br>
							<br>
								<p align=center><input name="regis" type="submit" value="Зарегистрироваться" /></p>	
							</br>
							
						<?php
						error_reporting(0);
mysql_connect("localhost")//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>");

mysql_select_db("test")//параметр в скобках ("имя базы, с которой соединяемся")
 or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");
						$categorij = trim($_REQUEST['categorij']);
						$foto = trim($_REQUEST['foto']);
						$str = trim($_REQUEST['str']);
						$insert_sql = "INSERT INTO categorij (categorij, foto, str)" .
"VALUES('{$categorij}', '{$foto}', '{$str}');";
mysql_query($insert_sql);
echo "<p>Новая запись вставлена в базу!</p>";
?>	
							
							
							
						
						</fieldset >
						
						
						
					</form>
				</br >
				
			</div>
			
		</div>
		<?php include('footer.php');?>
	</div> 
	
	

</body > 
</html> 