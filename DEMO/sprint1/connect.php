<?php


/* Database config */

$db_host		= 'localhost';
$db_user		= 'ism';
$db_pass		= 'ism';
$db_database	= 'tablas';

/* End config */


$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_database);
$link = mysqli_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');
//echo mysqli_errno($link);

//mysqli_select_db($link,$db_database);
//mysqli->query("SET names UTF8");

?>