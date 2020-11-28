<?php
session_start();
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$bdd = new PDO('mysql:host=sql101.byethost17.com;dbname=b17_12509246_drabble', 'b17_12509246', 'flyflyfl', $pdo_options);
?>