<!DOCTYPE html>
<html> 


<head> 
<meta charset = "utf-8" > 
<title>Новости науки</title> 
<link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
	<body bgcolor=#D0D2FF>
	<div class ="main"> 
		<div>
			<?php include ("header.php");?>   	
			<?php include ("menu.php");?>   	
			<div class = "registration">
			
					<TABLE border="0" width="80%" align=center>
					<?php
					error_reporting(0);
						$sdd_db_host='localhost';
						$sdd_db_name='test';
						@mysql_connect($sdd_db_host);
						@mysql_select_db($sdd_db_name);
						$result=mysql_query('SELECT categorij,foto,new FROM news WHERE categorij = "Science" ORDER BY id DESC LIMIT 1');
						
						
						
	
						while ($row=mysql_fetch_array($result))
							
						{ // выводим данные
							echo "<tr>\n\t<td width=30%  align=middle><img src=".$row["foto"]." align=middle width=100% height=140 >"."</td>"."\n\t"."<td align=center>".$row["new"].""."</td>"."\n"."</tr>"."\n";
							
						}
						//mysql_close();
					?>

					
					</TABLE >

				 
			</div> 
		</div>
		<?php include('footer.php');?>
		
	
	</div>

</body > 
</html> 