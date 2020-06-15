<?php

require '../connect.php';


$id=$_GET['id'];

$borrar=" DELETE FROM `notes3` WHERE `notes3`.`id` =$id";
echo $borrar;
$mysqli->query($borrar);

//echo $mysqli->affected_rows; 

?>