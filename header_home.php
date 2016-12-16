<div class = "header">
				<div class = "login"> 
					<button id="myBtn">Вход</button>
					<div id="myModal" class="modal">
					  <div class="modal-content">
						<span class="close">x</span>
						<p>
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
						 </p>
					  </div>

					</div>

					<script>
					var modal = document.getElementById('myModal');
					var btn = document.getElementById("myBtn");
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
				<div class = "title"><b>Новости науки и техники</b></div> 
			</div> 