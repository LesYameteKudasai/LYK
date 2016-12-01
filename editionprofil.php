<?php
session_start();

$bdd = new PDO('mysql:host=94.177.233.5;dbname=bd_msf', 'root', 'iut');

if(isset($_SESSION['id'])) {
   $requser = $bdd->prepare("SELECT * FROM refugie WHERE id = ?");
   $requser->execute(array($_SESSION['id']));
   $user = $requser->fetch();
   if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $user['nom']) {
      $newnom = htmlspecialchars($_POST['newnom']);
      $insertnom = $bdd->prepare("UPDATE refugie SET nom = ? WHERE id = ?");
      $insertnom->execute(array($newnom, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != $user['prenom']) {
      $newprenom = htmlspecialchars($_POST['newprenom']);
      $insertprenom = $bdd->prepare("UPDATE refugie SET prenom = ? WHERE id = ?");
      $insertprenom->execute(array($newprenom, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }

   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $bdd->prepare("UPDATE refugie SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $bdd->prepare("UPDATE refugie SET mail = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $bdd->prepare("UPDATE refugie SET motdepasse = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: profil.php?id='.$_SESSION['id']);
      } else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
?>
<html>
   <head>
      <title>Les Yamete Kudasai</title>
      <meta charset="utf-8">
   </head>
   <body>
      <div align="center">
         <h2>Edition de mon profil</h2>
         <div align="center">
            <form method="POST" action="" enctype="multipart/form-data">
               <table>
                  <tr>
                     <td align="right">
                        <label for="newnom">Nom :</label>
                     </td>
                     <td>
                        <input type="text" id="newnom" name="newnom" placeholder="Nom" value="<?php echo $user['nom']; ?>" />
                     </td>
                  </tr>
                  <tr>
                     <td align="right">
                        <label for="newprenom">Prénom :</label>
                     </td>
                     <td>
                        <input type="text" id="newprenom" name="newprenom" placeholder="Prénom" value="<?php echo $user['prenom']; ?>" />
                     </td>
                  </tr>
                  <tr>
                     <td align="right">
                        <label for="newpseudo">Pseudo :</label>
                     </td>
                     <td>
                        <input type="text" id="newpseudo" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" />
                     </td>
                  </tr>
                  <tr>
                     <td align="right">
                        <label for="newmail">Mail :</label>
                     </td>
                     <td>
                        <input type="text" id="newmail" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>" />
                     </td>
                  </tr>
                  <tr>
                     <td align="right">
                        <label for="newmdp">Mot de passe :</label>
                     </td>
                     <td>
                        <input type="password" id="newmdp" name="newmdp1" placeholder="Mot de passe"/>
                     </td>
                  </tr>
                  <tr>
                     <td align="right">
                        <label for="newmdp2">Confirmation - mot de passe :</label>
                     </td>
                     <td>
                        <input type="password" id="newmdp2" name="newmdp2" placeholder="Confirmation du mot de passe" />
                     </td>
                  </tr>
                  <tr>
                     <td></td>
                     <td align="center">
                        <br />
                        <input type="submit" value="Mettre à jour mon profil !" />
                     </td>
                  </tr>
               </table>
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>
   </body>
</html>
<?php   
}
else {
   header("Location: connexion.php");
}
?>