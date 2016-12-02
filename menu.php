<nav class="navbar navbar-default ">
  <div class="container">
	<div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	  
	</div>
	<div id="navbar" class="navbar-collapse collapse">
	  <ul class="nav navbar-nav">
		<li ><a href="#">Accueil</a></li>
		<?php 
			if(isset($_SESSION["benevole"]))
			{
				echo '<li><a href="#about">Liste des réfugiés</a></li>';
				echo '<li><a href="#contact">Gestion des camps</a></li>';
				echo '<li><a href="#about">Profil des réfugiés</a></li>';
			}
			else
			if(isset($_SESSION["refugie"]))
			{
				echo '<li><a href="#about">Plan du camp</a></li>';
				echo '<li><a href="#contact">Forum</a></li>';
				
			}
			else
			{
				echo '<li><a href="#about">Rejoindre un camp</a></li>';
			}
			
		?>
		</ul>
		  
		</li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
	  <?php
		if(isset($_SESSION["benevole"]))
		{
			echo '<li><a href="inscription.php?benevole=true">Ajouter un bénévole</a></li>';
			echo '<li><a href="#about">Profil</a></li>';
			
			echo '<li><a href="#contact">Déconnexion</a></li>';
		}
		else
		if(isset($_SESSION["refugie"]))
		{
			echo '<li><a href="#about">Profil</a></li>';
			echo '<li><a href="#contact">Déconnexion</a></li>';
		}
		else
		{
			echo '<li><a href="#about">Inscription</a></li>';
			echo '<li><a href="#contact">Connexion</a></li>';
		}
		?>
	  </ul>
	</div><!--/.nav-collapse -->
  </div>
</nav>