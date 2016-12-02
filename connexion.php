<!doctype html>
<html>
	<?php include_once "head.php"?>
	
	<body class="navbar-fixed-top">
	<?php include_once "header.php"?>
		<section id="connexion" >
			<form action="verif_connexion.php" method="post" autocomplete="off">
				<div>
					<fieldset>
						<legend>Connexion</legend>
						<p>
							<label for="login">E-Mail</label>
							<input type="text" name="login" id="login">
						</p>
						<p>
							<label for="password">Mot de passe</label>
							<input type="password" name="password" id="password">
						</p>

						
					</fieldset>
					
					<input type="submit" name="m_sub" value="Soumettre">
					
					<?php
						if(isset($_GET['err']))
						{
					?>
					<center><font color="#F00">Erreur d'authentification, reconnectez vous</font></center>
					<?php
						}
						?>
				</div>
				
			</form>
			
        </section>
		
	<?php include_once "footer.php"?>	
	</body>

	
</html>
