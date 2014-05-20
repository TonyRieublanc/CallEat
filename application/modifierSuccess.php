<html lang="en">
	<head>
		<title>Call & Eat</title>
		<link href="../css/stylesheet.css" type="text/css" rel="stylesheet" />
</script>
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
		echo"<div class='success'>Le produit de Nom: $name, Description: $description, Prix: $price a bien &eacute;t&eacute; modifi&eacutee </div>";
		include "buscar.Form.php";
?>
</div>
			<div id="footer">
			</div>
	</div>
	</body>
</html>