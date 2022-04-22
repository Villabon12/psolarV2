<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=psolar;charset=utf8', 'root', '1999Junior');
}
catch(Exception $e)
{
        die('Error : '.$e->getMessage());
}
