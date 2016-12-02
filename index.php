<?php
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=bd_msf', 'root', 'iut');
    $stmt=$bdd->query("Select * from camp");
    
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row['ville'];
    }
//remplir la div HG (haut gauche) et BD (bas droite) par les coordonnées du camp choisi


?>
<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        
        
        <div id="maposition"></div>

<!-- Un élément HTML pour recueillir la carte -->
<div id="map" style="width:640px;height:480px"></div>
<div id="ville"></div>
<div id="hg"></div>
<div id="bd"></div>

<input type="button" onclick="choixcamp();" value="I am already in a camp">
<panel id="panel1"></panel>
<!-- Chargement de l'API Google maps -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="IA.js"></script>
    </body>
</html>