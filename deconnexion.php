<<<<<<< HEAD
<?php
session_start();
$_SESSION =array();
session_destroy();
header("Location: connexion.php");
=======
<?php
session_start();
unset($_SESSION['login']);
header('location:index.php');
>>>>>>> corentin
?>