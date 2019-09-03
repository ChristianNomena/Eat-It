<?php
	try
	{
		 $bdd = new PDO("mysql:host=localhost;dbname=eatit;charset=utf8", 'root', '');
	}
	catch(Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}
?>