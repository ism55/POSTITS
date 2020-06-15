<?php

require '../connect.php';


$id=$_GET['id'];

$borrar=" DELETE FROM `notes2` WHERE `notes2`.`id` =$id";
echo $borrar;
$mysqli->query($borrar);

//echo $mysqli->affected_rows; 

?>