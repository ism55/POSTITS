<?php

require '../connect.php';


$id=$_GET['id'];

$borrar=" DELETE FROM `notes1` WHERE `notes1`.`id` =$id";
echo $borrar;
$mysqli->query($borrar);

//echo $mysqli->affected_rows; 

?>