<?php

require '../connect.php';


$id=$_GET['id'];

$borrar=" DELETE FROM `notes5` WHERE `notes5`.`id` =$id";
echo $borrar;
$mysqli->query($borrar);

//echo $mysqli->affected_rows; 

?>