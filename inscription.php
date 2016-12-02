<?php
$bdd = new PDO('mysql:host=94.177.233.5;dbname=bd_msf', 'root', 'iut');

if(isset($_POST['forminscription'])) {
   $nom = htmlspecialchars($_POST['nom']);
   $prenom = htmlspecialchars($_POST['prenom']);
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   $mail2 = htmlspecialchars($_POST['mail2']);
   $mdp = sha1($_POST['mdp']);
   $mdp2 = sha1($_POST['mdp2']);
   $nationnalite = htmlspecialchars($_POST['nationnalite']);
   $idcamp = $_POST['idcamp'];
   if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength <= 255) {
         if($mail == $mail2) {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM refugie WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     if(preg_match('#^[A-Za-z]{1,}$#', $nom) AND preg_match('#^[A-Za-z]{1,}$#', $prenom))
                     {
                        if(isset($_GET['benevole']))
                        {
                           $metier = $_POST['metier'];
                           $insertmbr = $bdd->prepare("INSERT INTO benevole(nom, prenom, pseudo, mail, motdepasse, nationnalite, idcamp, metier) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
                           $insertmbr->execute(array($nom, $prenom, $pseudo, $mail, $mdp, $idcamp, $metier));
                           $erreur = "Votre compte bénévole a bien été créé ! Vous pouvez maintenant vous connecter !";
                        }
                        else
                        {
                           $date_naiss = $_POST['date_naiss'];
                           $sexe = $_POST['sexe'];
                           $idetat = $_POST['idetat'];
                           $date_arrivee = $_POST['date_arrivee'];
                           $insertmbr = $bdd->prepare("INSERT INTO refugie(nom, prenom, pseudo, mail, motdepasse, nationnalite, idcamp, date_naiss, sexe, idetat, date_arrivee) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                           $insertmbr->execute(array($nom, $prenom, $pseudo, $mail, $mdp, $idcamp, $date_naiss, $sexe, $idetat, $date_arrivee));
                           $erreur = "Votre compte réfugié a bien été créé ! Vous pouvez maintenant vous connecter !";
                        }
                     }
                     else
                     {
                        $erreur = "Veuillez rentrer un nom et un prénom valide !";
                     }
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
         } else {
            $erreur = "Vos adresses mail ne correspondent pas !";
         }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

<html>
   <?php include_once "head.php"; ?>
   <body class="navbar-fixed-top">
      <?php include_once "header.php";?>
      <div align="center">
         <h2>Inscription</h2>
         <br /><br />
         <form method="POST" action="">
            <table>
               <tr>
                  <td align="right">
                     <label for="nom">Nom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre nom" id="nom" name="nom" value="<?php if(isset($nom)) { echo $nom; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="prenom">Prénom :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre prénom" id="prenom" name="prenom" value="<?php if(isset($prenom)) { echo $prenom; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="pseudo">Pseudo :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail">Mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mail2">Confirmation du mail :</label>
                  </td>
                  <td>
                     <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp">Mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="mdp2">Confirmation du mot de passe :</label>
                  </td>
                  <td>
                     <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="nationnalite">Nationnalité :</label>
                  </td>
                  <td>
                     <input type="text" placeholder="Votre Nationnalité" id="nationnalite" name="nationnalite" />
                  </td>
               </tr>
               <tr>
                  <td align="right">
                     <label for="idcamp">id camp :</label>
                  </td>
                  <td>
                     <input type="number" id="idcamp" name="idcamp" step="1" value="1" min="1" max="3" />
                  </td>
               </tr>
               <?php 
                  if(isset($_GET['benevole']))
                  {
                     echo "
                     <tr>
                        <td align='right'>
                           <label for='metier'>Métier :</label>
                        </td>
                        <td>
                           <input type='text' placeholder='Rentrez votre métier' id='metier' name='metier' />
                        </td>
                     </tr>
                     ";
                  }

                  if(isset($_GET['refugie']))
                  {
                     echo "
                     <tr>
                        <td align='right'>
                           <label for='date_naiss'>Date de naissance :</label>
                        </td>
                        <td>
                           <input type='date' id='date_naiss' name='date_naiss' />
                        </td>
                     </tr>
                     <tr>
                        <td align='right'>
                           <label for='sexe'>Sexe :</label>
                        </td>
                        <td>
                           <input type='number' id='sexe' name='sexe' step='1' value='0' min='0' max='1' />
                        </td>
                     </tr>
                     <tr>
                        <td align='right'>
                           <label for='sexe'>id état :</label>
                        </td>
                        <td>
                           <input type='number' id='idetat' name='idetat' step='1' value='1' min='1' max='6' />
                        </td>
                     </tr>
                     <tr>
                        <td align='right'>
                           <label for='date_arrivee'>Date d'arrivée :</label>
                        </td>
                        <td>
                           <input type='date' id='date_arrivee' name='date_arrivee' />
                        </td>
                     </tr>
                     ";
                  }
               ?>
               <tr>
                  <td></td>
                  <td align="center">
                     <br />
                     <input type="submit" name="forminscription" value="Je m'inscris" />
                  </td>
               </tr>
            </table>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
      <?php include_once "footer.php";?>
   </body>
</html>