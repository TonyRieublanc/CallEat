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
		if($id_menu_type==1){
			$name_menu_type="Entr&eacute;e";
		}else if($id_menu_type==2){
			$name_menu_type="Plat";
		}else if($id_menu_type==3){
			$name_menu_type="Menu";
		}else if($id_menu_type==4){
			$name_menu_type="Dessert";
		}else if($id_menu_type==5){
			$name_menu_type="Boisson";
		}
		echo"<div class='success'>La cat&eacute;gorie de Type:$name_menu_type, Nom: $name_category, Description: $description_category a bien &eacute;t&eacute; ajout&eacute;e </div>";
		$boolAdd=true;	
		include "addcategory.Form.php";  
			
?>

			</div>
			<div id="footer">
			</div>
		</div>
	</body>
</html>