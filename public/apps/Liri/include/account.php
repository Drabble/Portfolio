<?php
include("database.php");
//CREATION COMPTE
try{
	$prep = $bdd->prepare('INSERT INTO liri_user(email, password, date) VALUES(:email, :password, NOW());');
	$prep->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
	$prep->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
	$prep->execute();
	header('Location: ../compte.php');
}
catch (Exception $e)
{
		die('Erreur : ' . $e->getMessage());
}
?>