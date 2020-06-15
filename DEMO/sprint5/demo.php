<?php

// Error reporting:
error_reporting(E_ALL^E_NOTICE);

// Including the DB connection file:
require 'connect.php';

// Removing notes5 that are older than an hour:
//mysqli_query($link,"DELETE FROM notes5 WHERE id>3 AND dt<SUBTIME(NOW(),'0 1:0:0')");

//DELETE FROM `notes5` WHERE `notes5`.`id` = $id

$sql = "SELECT * FROM notes5";
//$mysqli->query("SET NAMES 'utf8'");
//$query = mysqli_query($link,$sql);
$result=$mysqli->query($sql);
$notes5 = '';
$left='';
$top='';
$zindex='';

while($row= $result->fetch_assoc())
{
	//echo $row;
	// The xyz column holds the position and z-index in the form 200x100x10:
	//list($left,$top,$zindex) = explode($row['x'],$row['y'],$row['z']);
	

//"'.$mysqli->query($borrar).'"	

	$notes5.= '
	<div class="note '.$row['color'].'" style="left:'.$row['x'].'px;top:'.$row['y'].'px;z-index:'.$row['z'].'">
		'.htmlspecialchars($row['text']).'
		<div class="author">'.htmlspecialchars($row['name']).'<a id="cerrar" href="" onclick="borrado('.$row['id'].');"> x</a>


		</div>
		
		<span class="data">'.$row['id'].'</span>

	</div>';
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Post-Its Board: SPRINT 5</title>

<link rel="stylesheet" type="text/css" href="../estilos_page.css" />
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.2.6.css" media="screen" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.6.pack.js"></script>

<script type="text/javascript" src="script5.js"></script>

</head>

<body>

<h1>Post-Its Board: SPRINT 5</h1>



<div id="main">
	<a id="addButton" class="green-button" href="../add_page.html">Nueva nota</a>
    
	<?php echo $notes5?>
    
</div>


<p class="tutInfo">Ir a <a href="../sprint4/demo.php">PÁGINA ANTERIOR</a> Ir a la  <a href="../sprint6/demo.php">PÁGINA SIGUIENTE</a>.</p>
</body>


<script>








	function borrado(valor){

	//alert(valor);


//        $.ajax({
//                data: valor, //datos que se envian a traves de ajax
//                url:   'delete.php', //archivo que recibe la peticion
//                type:  'post' //método de envio

//        });

			$.get('ajax/delete.php',{
				  id : valor
			});

	};


</script>

-->






</html>
