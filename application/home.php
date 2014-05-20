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
			echo "<p>Bienvenue $login</p><p>Vous etes maintenant connect&eacute;</p>";	
					if ( isset($_GET["page"]) )
					{	$page = $_GET["page"];
						if ( strcmp($page, "add") == 0 )
							include "leftCol.php";
						if ( strcmp($page, "restau") == 0 )
							include "Restau.php";							
						elseif ( strcmp($page, "login") == 0 )
							include "login.htm";
						elseif ( strcmp($page, "consultas") == 0 )
							include "buscar.Form.php";
						elseif ( strcmp($page, "entrees") == 0 )
							include "buscar.Form.php";
						elseif ( strcmp($page, "category") == 0 )
							include "category.Form.php";
						elseif ( strcmp($page, "plats") == 0 )
							include "buscar.Form.php";
						elseif ( strcmp($page, "menus") == 0 )
							include "buscar.Form.php";
						elseif ( strcmp($page, "desserts") == 0 )
							include "buscar.Form.php";
						elseif ( strcmp($page, "boissons") == 0 )
							include "buscar.Form.php";
						elseif ( strcmp($page, "addcategory") == 0 )
							include "addcategory.Form.php";
						elseif ( strcmp($page, "addentree") == 0 )
							include "addProduct.Form.php";
						elseif ( strcmp($page, "addplat") == 0 )
							include "addProduct.Form.php";
						elseif ( strcmp($page, "addmenu") == 0 )
							include "addProduct.Form.php";
						elseif ( strcmp($page, "adddessert") == 0 )
							include "addProduct.Form.php";
						elseif ( strcmp($page, "addboisson") == 0 )
							include "addProduct.Form.php";				
						elseif ( strcmp($page, "display") == 0 )
							include "buscar.leftCol.php";	
						elseif ( strcmp($page, "deconnexion") == 0 )
							include "deconnexion.php";	
						/* Adicione aqui uma entrada para novas abas */
					}
				?>
			</div>
			<div id="footer">
			</div>
		</div>
	</body>
</html>