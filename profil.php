<?php
session_start();

$bdd = new PDO('mysql:host=94.177.233.5;dbname=bd_msf', 'root', 'iut');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   if(isset($_GET['benevole']))
   {
      $requser = $bdd->prepare('SELECT * FROM benevole WHERE id = ?');
      $requser->execute(array($getid));
      $userinfo = $requser->fetch();
   }
   else {
      $requser = $bdd->prepare('SELECT * FROM refugie WHERE id = ?');
      $requser->execute(array($getid));
      $userinfo = $requser->fetch();
   }

?>
<html>
   <?php include_once "head.php"; ?>
   <body class="navbar-fixed-top">
      <?php include_once "header.php";?>
      <div align="center">
         <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
         <br /><br />
         Nom = <?php echo $userinfo['nom']; ?>
         <br />
         Prénom = <?php echo $userinfo['prenom']; ?>
         <br />
         Pseudo = <?php echo $userinfo['pseudo']; ?>
         <br />
         Mail = <?php echo $userinfo['mail']; ?>
         <br />
         Nationnalité = <?php echo $userinfo['nationnalite']?>
         <br />
         ID Camp = <?php echo $userinfo['idcamp']?>


         <?php
         if(isset($_GET['refugie'])){
            echo "Date de naissance = $userinfo['date_naiss'] <br />";
            echo "Sexe = $userinfo['sexe'] <br />";
            echo "ID Etat = $userinfo['idetat'] <br />";
            echo "Date d'arrivée = $userinfo['date_arrivee'] <br />";
         }
         else
         {
            echo "Métier = $userinfo['metier'] <br />";
         }
         ?>

         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
      </div>
      <?php include_once "footer.php";?>
   </body>
</html>
<?php   
}
?>