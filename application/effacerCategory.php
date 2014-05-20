<?php
	session_start();
	include_once "../persist/SqlManager.class.php";	
	$conn = new SqlManager("connect");	
	$id_category=$_GET['id_category'];
	
	$query ="DELETE FROM category WHERE id_category=$id_category";
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
			echo"<div class='success'>La cat&eacute;gory a bien &eacute;t&eacute; effac&eacute;e</div>";
			include "category.Form.php";  
?>
			</div>
			<div id="footer">
			</div>
		</div>
	</body>
</html>