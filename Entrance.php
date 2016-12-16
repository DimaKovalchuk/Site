<!DOCTYPE html>
<html> 
<head> 
<meta charset = "utf-8"> 
<title>Вход</title> 
<link rel="stylesheet" type="text/css" href="styles.css"> 
</head> 
<body bgcolor=#D0D2FF>
	<div class ="main"> 
		<div>
			<?php include ("header.php");?>   	
			<?php include ("menu.php");?>  	 
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
					header("Location:user_dashboard.php");
					}
					if($message!="")
						{ echo $message; }
					?>
					</fieldset>
				</form>
			</div> 		
		</div>		
		<?php include('footer.php');?> 	
	</div>
</body > 
</html> 








