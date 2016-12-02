<!Doctype HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Plan du camps</title>
</head>

<body>

<div id="image" >       
   
    <div id ="bouton">    
    <img src="info.jpg" />
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
				
				<table>
				<tr>
				<td>
				<img src="sample_image.png" alt="Transparent Blue by BryantSmith.com" />
				</td>
				<td>
				<div class="main_right">
                <h2>Mission :</h2>
                
                <p>
				<table>
				<tr>
					<td>
					1
					<?php
					$rts=1;
					
					if ( $rts==1 )
					{
						echo(" Rendez vous à l'accueil du camps pour récupérer des affaires. ");
						?></br><?php
						echo "<INPUT TYPE=SUBMIT VALUE='terminer' onclick='$rts=2'>";
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
					if ( $rts==1 )
					{
						echo(" déposez vos affaires dans votre logement. ");
						?></br><?php
						echo "<INPUT TYPE=SUBMIT VALUE='terminer' onclick='$rts=2'>";
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
					$rts=1;
					
					if ( $rts==1 )
					{
						echo(" Prenez une douche. ");
						?></br><?php
						echo "<INPUT TYPE=SUBMIT VALUE='terminer' onclick='$rts=2'>";
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
					$rts=1;
					
					if ( $rts==1 )
					{
						echo(" Passer vos tests à l'infirmerie. ");
						?></br><?php
						echo "<INPUT TYPE=SUBMIT VALUE='terminer' onclick='$rts=2'>";
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
					$rts=1;
					
					if ( $rts==1 )
					{
						echo(" Allez vous restaurer. ");
						?></br><?php
						echo "<INPUT TYPE=SUBMIT VALUE='terminer' onclick='$rts=2'>";
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
					$rts=1;
					
					if ( $rts==1 )
					{
						echo(" Aménagez votre logement. ");
						?></br><?php
						echo "<INPUT TYPE=SUBMIT VALUE='terminer' onclick='$rts=2'>";
					}
					else
					{
						echo("Mission accomplie");
					}
					?>
					</td>
					</tr>
				</table>
				</p>

            </div>
				</td>
				</tr>
				</table>
            	
                
            </div>
            
           	
            
           	<div class="main_bottom"></div>
            
        </div>
        
        
        <div class="dotted_line"></div>
        <div id="footer">
      </div>
        
        </div>
</body>
</html>
