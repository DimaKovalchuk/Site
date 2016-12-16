<!DOCTYPE html>
<html> 
<head> 
<meta charset = "utf-8" > 
<title>Добавление новости</title> 
<link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
	<body bgcolor=#D0D2FF>
	<div class ="main"> 
		<div>
			<?php include ("header.php");?>   	
			<?php include ("menuAdmin.php");?>     	
			<div class = "new">
				<h1><p align=center>Добавление новости</p></h1>
				<br >
					<form align=center >
						<fieldset >
							<br >
								<p align=center>Название категории: <input type="text" name="categorij" required/></p>
							</br>
							<fieldset ><legend>Содержание новости</legend>
								<textarea name="new" cols="100" rows="20"></textarea></p>
								</br>
								<input type="reset" value="Очистить"></p>
								</br>
							</fieldset>
							<br>
								<p align=center>Название картинки: <input type="text" name="foto" required/></p>								
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
						$new = trim($_REQUEST['new']);
						$foto = trim($_REQUEST['foto']);
						$insert_sql = "INSERT INTO news (categorij, foto,new)" .
"VALUES('{$categorij}', '{$foto}','{$new}');";
mysql_query($insert_sql);
echo "<p>Новая запись вставлена в базу!</p>";
?>	
							
							
							
						
				
				
				
				
				
				
			</div>
			
		</div>
		<div class = "footer">
		<div class = "year"><b>2016</b></div>
		</div> 
	
	</div>

</body > 
</html> 