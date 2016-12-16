<!DOCTYPE html>
<html> 
<head> 
<meta charset = "utf-8" > 
<title>Пользователи</title> 
<link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
	<body bgcolor=#D0D2FF>
	<div class ="main"> 
		<div>
			<?php include ("header.php");?>   	
			<?php include ("menuAdmin.php");?>   		
		</div>
		<table border="3" width="70%" align="center" ALIGN="center" BORDERCOLORLIGHT="Lime" 
BORDERCOLORLIGHT="#FFFFFF" BORDERCOLORDARK="#DCDCDC" BGCOLOR="#FFF68F"
>

<tr BGCOLOR="#1E90FF" >
<td width='25%' align=center>id</td>
<td width="25%" align=center>login</td>
<td width="25%" align=center>first_name</td>
<td width="25%" align=center>last_name</td>
</tr>
<?php
$sdd_db_host='localhost';
$sdd_db_name='test';
@mysql_connect($sdd_db_host);
@mysql_select_db($sdd_db_name);
$result=mysql_query('SELECT * FROM users');
while ($row=mysql_fetch_array($result))
{ // выводим данные
echo "<tr>\n\t<td align=center>".$row["id"]."</td>"."\n\t"."<td align=center>"."".$row["login"]."</td>"."\n\t"."<td align=center>"."".$row["first_name"]."</td>"."\n\t"."<td align=center>"."".$row["last_name"]."</td>"."\n"."</tr>"."\n";
}
//mysql_close();
?>

</table>
<div class = "login"> 
					<button id="myBtn1">Добавить пользователя</button>
					
					<div id="myModal1" class="modal">
					  <div class="modal-content">
						<span class="close">x</span>
						<p>
						<form action="Users.php" method="post" name="forma" align=center>
						<fieldset >
						<br >
							<p align=center>Имя: <input type="text" name="first_name" required/></p>
							<p align=center>Фамилия: <input "text" name="last_name" required/></p>	
							<p align=center>Логин: <input type="text" name="login" required/></p>
							<p align=center>Пароль: <input type="password" name="pwd" required/></p>	
							
						<br />
						<br >
				
							<p align=center><input name="regis" type="submit" value="Зарегистрировать" /></p>	
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
						 </p>
					  </div>

					</div>

					<script>
					var modal = document.getElementById('myModal1');
					var btn = document.getElementById("myBtn1");
					var span = document.getElementsByClassName("close")[0];
					btn.onclick = function() {
						modal.style.display = "block";
					}
					span.onclick = function() {
						modal.style.display = "none";
					}
					window.onclick = function(event) {
						if (event.target == modal) {
							modal.style.display = "none";
						}
					}
					</script>
				</div> 
		<?php include('footer.php');?>
		 
	
	</div>

</body > 
</html> 

















