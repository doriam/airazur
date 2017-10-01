<?php
require ('config.php');
function connect ()
{
	try
	{
	// Connexion
	$connect = new PDO ('mysql:host='.HOST.'; dbname='.DBNAME, USER, PW, array(PDO:: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
        return $connect;

}
catch (PDOException $e)
{
	echo "Problème de connexion". $e.  getMessage();
	return false;
}
}

