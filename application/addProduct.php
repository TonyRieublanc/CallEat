
<?php
	session_start();
	include_once "../persist/SqlManager.class.php";	
	$name = nl2br(addslashes($_POST["name"]));
	$price = nl2br(addslashes($_POST["price"]));
	$id_category = $_POST["id_category"];	
	$id_menu_type = $_GET['id_menu_type'];
	$add=true;
	$description = nl2br(addslashes($_POST["description"]));	


	if(empty($price)){	
		$boolPriceEmpty=true;
	}else
	{$boolPriceEmpty=false;
	}
	
	if (empty($name)) 
	{	
		$add=false;
	}
	if($add==true)
	{	$conn = new SqlManager("connect");
		$query="INSERT INTO product (name,description, price,id_category) VALUES ('$name','$description', '$price', $id_category)";	
		$numLinhas = $conn->executeCommand($query);	
		$queryNameCategory="
			SELECT name_category
			FROM category
			WHERE id_category=$id_category ";				
		$reslit = $conn->ExecuteRead($queryNameCategory);	
		foreach ( $reslit as $row )		    
		{      
			$name_category=$row['name_category'];           
		}				
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
			<?php echo"
				<div class='success'>Le produit Cat&eacute;gorie: '$name_category', Nom:'$name', Description:'$description', Prix='$price' a bien &eacute;t&eacute; ajout&eacute;e </div>";				
				$boolAdd=true;				
				if($id_menu_type==1){
				$category="Cat&eacute;gorie des entr&eacute;es";
				}else 	if($id_menu_type==2){
				$category="Cat&eacute;gorie des plats";
				}else	if($id_menu_type==3){				
				$category="Cat&eacute;gorie des menus";
				}else 	if($id_menu_type==4){				
				$category="Cat&eacute;gorie des desserts";
				}else 	if($id_menu_type==5){				
				$category="Cat&eacute;gorie des boissons";
				}				
				include "addProduct.Form.php";
			?>
				</div>
			<div id="footer">
			</div>
	</div>
	</body>
</html>
<?php 
	} else
	{	include "addError.php";
	}
?>
	