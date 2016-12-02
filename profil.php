<?php
session_start();

$bdd = new PDO('mysql:host=94.177.233.5;dbname=bd_msf', 'root', 'iut');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM refugie WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
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