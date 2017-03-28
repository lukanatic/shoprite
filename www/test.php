<?php

// define('DBHOST', 'localhost');
define('DBNAME', 'onlineshop');
define('DBUSER', 'root');
define('DBPASS', 'ibrahim');


try{
$pdo = new PDO('mysql:host=localhost;dbname='.DBNAME, DBUSER, DBPASS);
 }
catch(PDOException $e)
{
	echo $e->getMessage();
}

?>

