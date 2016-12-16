<!DOCTYPE html>
<html> 

<head> 
<meta charset = "utf-8" > 
<title>Новости техники</title> 
<link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
	<body bgcolor=#D0D2FF>
	<div class ="main"> 
		<div>
			<?php include ("header.php");?>   	
			<?php include ("menu.php");?>   	
			<div><p align=center><font color=yellow><b>НОВОСТИ ТЕХНИКИ</b></font>
					<TABLE border="0" width="50%" align=center>
					<?php
						$sdd_db_host='localhost';
						$sdd_db_name='test';
						@mysql_connect($sdd_db_host);
						@mysql_select_db($sdd_db_name);
						$result=mysql_query('SELECT categorij,foto,new FROM news WHERE categorij = "Technology" ORDER BY id DESC LIMIT 10');
						
						
						
	
						while ($row=mysql_fetch_array($result))
						{ // выводим данные
							echo  "<tr>\n\t<td width=30%  align=middle><img src=".$row["foto"]." align=middle width=100% height=120 >"."</td>"."\n\t"."<td align=center><a href=new1.php>".$row["new"]."</a>"."</td>"."\n"."</tr>"."\n";
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