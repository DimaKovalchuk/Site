<!DOCTYPE html>


<html> 
<head> 
<meta charset = "utf-8"> 
<title>Вход/регистрация</title> 
<link rel="stylesheet" type="text/css" href="styles.css"> 
</head> 
<body bgcolor=#D0D2FF>
<div class ="main"> 
		<div>
			<?php include ("header.php");?>   	
			<?php include ("menu.php");?>  	
			<div> 
				<div class = "entrance">
				<form  method="post" name="formUser" align=center>
					<fieldset >
						<legend><b>Вход</b></legend>
						<br >
							<p align=center>Логин: <input type="text" name="login" required/></p>
							<p align=center>Пароль: <input type="password" name="pwd" required/></p>	
						<br />
						<br >
							<p align=center><input name="ent" type="submit" value="Войти" /></p>	
						<br />
						<?php
					session_start();
					$message="";
					if(count($_POST)>0) {
					$conn = mysql_connect("localhost");
					mysql_select_db("test",$conn);
					$ent = mysql_query("SELECT * FROM users WHERE login='" . $_POST["login"] . "' and pwd = '". $_POST["pwd"]."'");
					$row  = mysql_fetch_array($ent);
					if(is_array($row)) {
					$_SESSION["id"] = $row[id];
					$_SESSION["login"] = $row[login];
					} else {
					$message = "Неверный логин или пароль!";
					}
					}
					if(isset($_SESSION["id"])) {
					header("Location:HomeAdmin.php");
					}
					if($message!="")
						{ echo $message; }
					?>
					</fieldset>
					
					
				</form>
				</div> 
				
				<div class = "registration">
					<form action="Login.php" method="post" name="forma" align=center>
						<fieldset ><legend><b>Регистрация</b></legend>
						<br >
							<p align=center>Имя: <input type="text" name="first_name" required/></p>
							<p align=center>Фамилия: <input "text" name="last_name" required/></p>	
							<p align=center>Логин: <input type="text" name="login" required/></p>
							<p align=center>Пароль: <input type="password" name="pwd" required/></p>	
							
						<br />
						<br >
				
							<p align=center><input name="regis" type="submit" value="Зарегистрироваться" /></p>	
						<br />
						<?php
						error_reporting(0);

						$login = $_POST['login'];
						$first_name = $_POST['first_name'];
						$last_name = $_POST['last_name'];
						$pwd = $_POST['pwd'];
     
						$db_host = "localhost"; 
						$db_table = "users"; 
     
						$db = mysql_connect($db_host) OR DIE("Не могу создать соединение ");
     
						mysql_select_db("test",$db);
     
						mysql_query("SET NAMES 'utf8'",$db);
							
						if (!empty($_POST['login'])) {
							
						$regis = mysql_query ("INSERT INTO ".$db_table." (login, first_name, last_name, pwd) VALUES ('$login','$first_name','$last_name','$pwd')");
     
						if ($regis = 'true'){
							echo "Информация занесена в базу данных";
						}else{
							echo "Информация не занесена в базу данных";
						}
						
						}
						

						?>
						</fieldset >
					</form> 
				</div> 
			</div> 
		</div>
		<?php include('footer.php');?> 	
	</div>
</body > 
</html> 








