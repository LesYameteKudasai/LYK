<<<<<<< HEAD
<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=bd_msf', 'root', 'iut');

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
  
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM refugie WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         $_SESSION['refugie'] = true;
         header("Location: profil.php?id=".$_SESSION['id']);
      } else {
            $requser = $bdd->prepare("SELECT * FROM benevole WHERE mail = ? AND motdepasse = ?");
            $requser->execute(array($mailconnect, $mdpconnect));
            $userexist = $requser->rowCount();
            if($userexist == 1) {
               $userinfo = $requser->fetch();
               $_SESSION['id'] = $userinfo['id'];
               $_SESSION['pseudo'] = $userinfo['pseudo'];
               $_SESSION['mail'] = $userinfo['mail'];
               $_SESSION['benevole'] = true;
               header("Location: profil.php?id=".$_SESSION['id']);
            } else { 
               $erreur = "Erreur d'authentification";
               header("Location: connexion.php?err");
            }
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<html>
   <?php include_once "head.php";?>
   <body class="navbar-fixed-top">
      <?php include_once "header.php";?>
      <div align="center">
         <h2>Connexion</h2>
         <br /><br />
         <form method="POST" action="">
            <input type="email" name="mailconnect" placeholder="Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
      <?php include_once "footer.php";?>
   </body>
</html>
=======
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
>>>>>>> corentin
