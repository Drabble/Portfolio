<?php
//LOG OFF
try{
	session_destroy();
	header('Location: index.php');
}
catch (Exception $e)
{
     die('Erreur : ' . $e->getMessage());
}
?>