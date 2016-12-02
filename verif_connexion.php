<?php
	session_start();
?>

<?php

	$db = new PDO('mysql:localhost;port=3306;dbname=bd_msf','root','iut');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->query('SET NAMES UTF8');	//canal de discussion en UTF-8
	$connect_success=false;
	$stmt = $db->query('select email,motdepasse,nom,prenom from refugie');
	while ($r= $stmt->fetch(PDO::FETCH_NUM))
	{ 
	if(($_POST[login]==$r[0])&&($_POST[password]==$r[1]))
		{
			$connect_success=true;
			$sess=$r[0];
		}
	}
	
	$stmt = $db->query('select email,motdepasse,nom,prenom from benevole');
	while ($r= $stmt->fetch(PDO::FETCH_NUM))
	{ 
		if(($_POST[login]==$r[0])&&($_POST[password]==$r[1]))
		{
			$connect_success=true;
			$sess=$r[0];
		}	
	}

	if($connect_success)
	{
		$_SESSION['login']=$sess;
		header('location:index.php');		
	}
	else
	{
		header('location:connexion.php?err');
	}
?>