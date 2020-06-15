<?php

require '../connect.php';


$id=$_GET['id'];

$borrar=" DELETE FROM `notes6` WHERE `notes6`.`id` =$id";
echo $borrar;
$mysqli->query($borrar);

//echo $mysqli->affected_rows; 

?>