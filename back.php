<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Вывод данных из базы в обратном порядке</title>
</head>

<body>
<?php
mysql_connect("localhost")//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>");


mysql_select_db("test")//параметр в скобках ("имя базы, с которой соединяемся")
 or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");

 
 $select_query = "SELECT id, login, first_name, last_name FROM users";
$result = mysql_query($select_query);
$row = mysql_fetch_array($result);
do{
	printf("<p><table border='1' align='center'>
	<tr>
		<td >id</td>
		<td>login</td>
		<td>first name</td>
		<td>last name</td>
		<td>action</td>
	</tr>
	</tr>
		<td>%s</td>
		<td>%s</td>
		<td>%s</td>
		<td>%s</td>
	</tr>
	</table></p>",$row['id'],$row['login'],$row['first_name'],$row['last_name']);

}
while($row = mysql_fetch_array($result));

 $resultat = mysql_query("SELECT * FROM users");
$array = mysql_fetch_array($resultat);
do
{
echo "Имя: ".$array['id']."<br>Возраст: ".$array['login']."<br>Пол: ".$array['first_name']."<br>Пол: ".$array['last_name']."<br><br>";
}
while($array = mysql_fetch_array($resultat));



?>








<table border="1" width="100%" align="center" ALIGN="center" BORDERCOLORLIGHT="Lime" 
BORDERCOLORDARK="Green" BGCOLOR="#DFFFDF"
>

<tr>
<td width='20%' align=center>ID;</td>
<td width="20%" align=center>name;</td>
<td width="20%" align=center>Nik;</td>
<td width="20%" align=center>hobby;</td>
<td>city;</td>
<td>country;</td>
<td>email;</td>
<td>data;</td>
</tr>
<?php
$sdd_db_host='localhost';
$sdd_db_name='test';
//$sdd_db_user='ПОЛЬЗОВАТЕЛЬ';
//$sdd_db_pass='ПАРОЛЬ';
@mysql_connect($sdd_db_host);
@mysql_select_db($sdd_db_name);
$result=mysql_query('SELECT * FROM users');
while ($row=mysql_fetch_array($result))
{ // выводим данные
echo "<tr>\n\t<td>".$row["id"]."</td>"."\n\t"."<td>"."".$row["first_name"]."</td>"."\n\t"."<td>"."".$row["last_name"]."</td>"."\n\t"."<td>"."".$row["login"]."</td>"."\n\t"."<td>"."".$row["login"]."</td>"."\n\t"."<td>"."".$row["login"]."</td>"."\n\t"."<td>"."".$row["login"]."</td>"."\n\t"."<td>"."".$row["login"]."</td>"."\n"."</tr>"."\n";
}
mysql_close();
?>

</table>




</body>
</html>