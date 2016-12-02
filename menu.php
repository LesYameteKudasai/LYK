<nav class="navbar navbar-default menufonce">
      <div class="container ">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse ">
          <ul class="nav navbar-nav">
			<li ><a href="index.php">Accueil</a></li>
			<?php 
				if(isset($_SESSION["benevole"]))
				{
					echo '<li><a href="liste_refugie.php">Liste des réfugiés</a></li>';
					echo '<li><a href="gestion_camp.php">Gestion des camps</a></li>';
					echo '<li><a href="profil_refugie.php">Profil des réfugiés</a></li>';
				}
				else
				if(isset($_SESSION["refugie"]))
				{
					echo '<li><a href="plan_camp.php">Plan du camp</a></li>';
					echo '<li><a href="forum.php">Forum</a></li>';
					
				}
				else
				{
					echo '<li><a href="rejoindre_camp.php">Rejoindre un camp</a></li>';
				}
				
			?>
			</ul>
              
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right ">
		  <?php
			if(isset($_SESSION["benevole"]))
			{
				echo '<li><a href="inscription.php?benevole">Ajouter un bénévole</a></li>';
				echo '<li><a href="profil.php">Profil</a></li>';
				
				echo '<li><a href="deconnexion.php">Déconnexion</a></li>';
			}
			else
			if(isset($_SESSION["refugie"]))
			{
				echo '<li><a href="profil.php">Profil</a></li>';
				echo '<li><a href="deconnexion.php">Déconnexion</a></li>';
			}
			else
			{
				echo '<li><a href="inscription.php">Inscription</a></li>';
				echo '<li><a href="connexion.php">Connexion</a></li>';
			}
			?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>