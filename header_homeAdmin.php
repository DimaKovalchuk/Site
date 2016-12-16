<div class = "header">
				<div class = "login"> 
						<?php
							session_start();
						?>

						<?php
							if($_SESSION["login"]) {
						?>
						Welcome <?php echo $_SESSION["login"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
						<?php
						}
						?>

				</div>

					
				
				<div class = "title"><b>Новости науки и техники</b></div> 
			</div> 