<?php
include("database.php");
//LOGIN
try{
	$reponse = $bdd->query("SELECT email, password date FROM liri_user WHERE email= '" . $_POST['email'] . "'"); 
	$donnees = $reponse->fetch();
	if($_POST['password'] == $donnees['password']){
		$_SESSION['log'] = 1;
		$_SESSION['password'] = $donnees['password'];
		$_SESSION['email'] = $donnees['email'];
		$_SESSION['date'] = $donnees['date'];
	}
	header('Location: ../index.php');
}
catch (Exception $e)
{
     die('Erreur : ' . $e->getMessage());
}
?>