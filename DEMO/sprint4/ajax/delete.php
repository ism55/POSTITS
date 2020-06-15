<?php

require '../connect.php';


$id=$_GET['id'];

$borrar=" DELETE FROM `notes4` WHERE `notes4`.`id` =$id";
echo $borrar;
$mysqli->query($borrar);

//echo $mysqli->affected_rows; 

?>