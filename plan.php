<!Doctype HTML>
<html>
<?php 
    include_once("head.php");
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Plan du camps</title>
</head>

<body class="navbar-fixed-top">
<?php include_once("header.php"); ?>
<div id="image" >       
   
    </div>

</div>

    <div id="page">
		
        <div id="header">
            <ul>
           	   	<li><a href="#">lieux</a></li>
               	<li><a href="#">objectif</a></li>
                <li><a href="#">conseillé</a></li>
                <li><a href="#">profil</a></li>
                <li><a href="#">retour</a></li>
            </ul>
            <h1>Plan du camps</h1>
        </div>
  <div class="dotted_line"></div>
        <div id="main">
        
        	<div class="main_left">
			<h1>Acomplissez vos tâches avant de circuler librement dans le camps.</h1>
                <h3>Chaque tâche corespond à 1 point.</h3>
				
				
				<div id="map" style="width:900px;height:930px"></div>
				
				<div class="main_right">
                <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Missions :</h2>
                
                <p>
				<table>
				<tr>
					<td>
					1
					<?php
					$rts1=1;
					
					if ( $rts1==1 )
					{
						echo(" Rendez vous à l'accueil du camps pour récupérer des affaires. ");
						?></br><form align='center' methode="post" action="plan.php">
									<div>
									<?php $rts1=1; ?>
										<input type="submit" class="button" value="Valider" />
									</div>
								</form><?php
						
					}
					else
					{
						echo("Mission accomplie");
					}
					?>
					</td>
					</tr>
					<tr>
					<td>
					2
					<?php
					$rts2=1;
					if ( $rts2==1 )
					{
						echo(" déposez vos affaires dans votre logement. ");
						?></br><form align='center' methode="post" action="plan.php">
									<div>
									<?php $rts2=1; ?>
										<input type="submit" class="button" value="Valider" />
									</div>
								</form><?php
						
					}
					else
					{
						echo("Mission accomplie");
					}
					?>
					</td>
					</tr>
					<tr>
					<td>
					3	
					<?php
					$rts3=1;
					
					if ( $rts3==1 )
					{
						echo(" Prenez une douche. ");
						?></br><form align='center' methode="post" action="plan.php">
									<div>
									<?php $rts3=1; ?>
										<input type="submit" class="button" value="Valider" />
									</div>
								</form><?php
						
					}
					else
					{
						echo("Mission accomplie");
					}
					?>
					</td>
					</tr>
					<tr>
					<td>
					4	
					<?php
					$rts4=1;
					
					if ( $rts4==1 )
					{
						echo(" Passer vos tests à l'infirmerie. ");
						?></br><form align='center' methode="post" action="plan.php">
									<div>
									<?php $rts4=1; ?>
										<input type="submit" class="button" value="Valider" />
									</div>
								</form><?php
						
					}
					else
					{
						echo("Mission accomplie");
					}
					?>
					</td>
					</tr>
					<tr>
					<td>
					5	
					<?php
					$rts5=1;
					
					if ( $rts5==1 )
					{
						echo(" Allez vous restaurer. ");
						?></br><form align='center' methode="post" action="plan.php">
									<div>
									<?php $rts5=1; ?>
										<input type="submit" class="button" value="Valider" />
									</div>
								</form><?php
						
					}
					else
					{
						echo("Mission accomplie");
					}
					?>
					</td>
					</tr>
					<tr>
					<td>
					6	
					<?php
					$rts6=1;
					
					if ( $rts6==1 )
					{
						echo(" Aménagez votre logement. ");
						?></br><form align='center' methode="post" action="plan.php">
									<div>
									<?php $rts6=1; ?>
										<input type="submit" class="button" value="Valider" />
									</div>
								</form><?php
						
					}
					else
					{
						echo("Mission accomplie");
					}
					?>
					</td>
					</tr>
					<tr>
					<td>
				
					</td>
					</tr>
				</table>
				</p>

            </div>
				
            	
                
            </div>
            
           	
            
           	<div class="main_bottom"></div>
            
        </div>
        
        
        <div class="dotted_line"></div>
        <div id="footer">
      </div>
        
        </div>
        <?php include_once("footer.php") ?>
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="plan.js"></script>
</body>
</html>
