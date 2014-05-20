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
			echo"<div class='success'>La cat&eacute;gorie Nom: $name_category, Description: $description_category a bien &eacute;t&eacute; ajout&eacute;e </div>";
			include "addcategory.Form.php";  
?>
			</div>
			<div id="footer">
			</div>
		</div>
	</body>
</html>