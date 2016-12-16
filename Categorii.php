<!DOCTYPE html>
<html> 
<head> 
<meta charset = "utf-8" > 
<title>Категории</title> 
<link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
	<body bgcolor=#D0D2FF>
	<div class ="main"> 
		<div>
			<?php include ("header.php");?>   	
			<?php include ("menu.php");?>   	
			<div class = "categorii">
								
				<TABLE border="0" width="100%" align=center>
					<?php
						$sdd_db_host='localhost';
						$sdd_db_name='test';
						@mysql_connect($sdd_db_host);
						@mysql_select_db($sdd_db_name);
						$result=mysql_query('SELECT * FROM categorij');
						
						
						
						
						while ($row=mysql_fetch_array($result))
						{ // выводим данные
							echo 
							"<TR>\n\t
								<TD width=30% align=middle ><img src=".$row["foto"]." align=middle width=100% height=160 >".
							"</TD >"."\n".
							"<TD width=70% align=Center><a href=".$row["str"]."><font size=5>".$row["categorij"]."</font></a>".
							"</TD>"
							."\n".
						
							"</TR >"."\n";
						}
						//mysql_close();
					?>
				</TABLE>
				
			</div>
			
		</div>
		<?php include('footer.php');?>
		</div> 
	
	</div>

</body > 
</html> 



