<?php

// define('DBHOST', 'localhost');
define('DBNAME', 'onlineshop');
define('DBUSER', 'root');
define('DBPASS', 'ibrahim');


try{
	#prepare a PDO instance
$pdo = new PDO('mysql:host=localhost;dbname='.DBNAME, DBUSER, DBPASS);

#set verbose Error modes
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
 }
catch(PDOException $e)
{
	echo $e->getMessage();
}


?>

