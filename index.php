<!doctype html>
<html>
    <?php include_once("head.php"); ?>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <?php include_once("header.php"); ?>
        
        
        <div id="maposition"></div>

<!-- Un élément HTML pour recueillir la carte -->
<div id="map" style="width:640px;height:480px"></div>
<div id="ville"></div>
<div id="hg"></div>
<div id="bd"></div>

<input type="button" onclick="document.location.href='plan.php'" value="I am already in a camp">
<panel id="panel1"></panel>
<?php include_once("footer.php"); ?>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="IA.js"></script>
    </body>
</html>