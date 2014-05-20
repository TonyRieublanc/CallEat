<html lang="en">
	<head>
		<title>Call & Eat</title>
		<link href="../css/stylesheet.css" type="text/css" rel="stylesheet" />
	</head>
	<body>	
<?php
	include_once "../persist/SqlManager.class.php";	
	$conn = new SqlManager("connect");	
	$id_product=$_GET['id_product'];
	$id_menu_type=$_GET['id_menu_type'];
	$query ="DELETE FROM product WHERE id_product=$id_product";
	$numLinhas = $conn->executeCommand($query);	
	$conn->closeConnection();	
	
?>
<?php
	session_start();
	include_once "../persist/SqlManager.class.php";	
	$conn = new SqlManager("connect");			
	$id_product=$_GET['id_product'];
	$id_menu_type=$_GET['id_menu_type'];
	$query ="DELETE FROM product WHERE id_product=$id_product";
	$numLinhas = $conn->executeCommand($query);	
	$conn->closeConnection();		
?>
 <html lang="en">
	<head>
		<title>Call & Eat</title>
		<link href="../css/stylesheet.css" type="text/css" rel="stylesheet" />
	</head>
	<body>	
		<div id="wrap">
			<div id="menu">
				<ul>								
					<li><a href="index.php?page=add">Ajouter un produit</a></li>
					<li><a href="index.php?page=display">Afficher la Carte</a></li>                  
					<li><a href="index.php?page=deconnexion">Deconnexion</a></li>							
				</ul>
			</div>		
			<div id="content"> 
<?php
			echo"<div class='success'>Le produit a bien &eacute;t&eacute; effac&eacute;</div>";
			include "buscar.Form.php";  
?>
			</div>
			<div id="footer">
			</div>
		</div>
	</body>
</html>