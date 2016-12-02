<?php
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=bd_msf', 'root', 'iut');
    $stmt=$bdd->query("Select * from camp");
    
    
    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<a href='plancamps.php?ville="+$row['ville']+"'>";
    }
?>