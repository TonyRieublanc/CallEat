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

	if (empty($name_category)) {
	echo "<div class='error'>Le champ Nom de la cat&eacute;gorie ne peut &ecirc;tre vide </div>";	
	}
include "buscar.leftCol.php";
	echo "<form  action= 'modifierCategory.php?id_category=". $_GET['id_category']."' name='modifierCategory' method='post'>";
	echo "<table align='center' cellpadding='0' cellspacing='5px'>";
	echo "<tr>";
	echo "</tr>";	
	echo "<tr>";
	echo "<td align='right'><label>Type</label></td>";
	if($id_menu_type==1){
	
	echo "<td align='left'><select id='id_menu_type' name='id_menu_type'>
	<option value='1'> Entrees </option>	
	<option value='2'> Plats </option>
	<option value='3'> Menus </option>
	<option value='4'> Desserts </option>
	<option value='5'> Boissons </option>
	
	</select></td>";
	} else if($id_menu_type==2){
	
	echo "<td align='left'><select id='id_menu_type' name='id_menu_type'>
	<option value='2'> Plats </option>
	<option value='1'> Entrees </option>	
	<option value='3'> Menus </option>
	<option value='4'> Desserts </option>
	<option value='5'> Boissons </option>	
	</select></td>";
	} else if($id_menu_type==3){
	
	echo "<td align='left'><select id='id_menu_type' name='id_menu_type'>
	<option value='3'> Menus </option>	
	<option value='1'> Entrees </option>
	<option value='2'> Plats </option>	
	<option value='4'> Desserts </option>
	<option value='5'> Boissons </option>
	
	</select></td>";
	} else if($id_menu_type==4){
	
	echo "<td align='left'><select id='id_menu_type' name='id_menu_type'>
	<option value='4'> Desserts </option>
	<option value='1'> Entrees </option>	
	<option value='2'> Plats </option>
	<option value='3'> Menus </option>
	<option value='5'> Boissons </option>

	</select></td>";
	} else if($id_menu_type==5){
	
	echo "<td align='left'><select id='id_menu_type' name='id_menu_type'>
	<option value='5'> Boissons </option>
	<option value='4'> Desserts </option>
	<option value='1'> Entrees </option>	
	<option value='2'> Plats </option>
	<option value='3'> Menus </option>
	
	</select></td>";}
	echo "</tr>";
	echo "<tr>";
	echo "<td align='right'><label>Nom de la cat&eacute;gorie:</label></td>";
	echo "<td align='left'><input type='text' name='name_category'/></td>";
	echo "</tr>";	
	echo "<tr>";
	echo "<td align='right'><label>Description:</label></td>";
	echo "<td align='left'><input type='text' name='description_category' value='". $_GET['description_category']."'/></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td colspan='2' align='center'><input input id='submitenregistrer'  type='submit' value='modifier'></td>";	
	echo "</tr>";
	echo "</table>";
	echo "</form>";
?>
</div>
			<div id="footer">
			</div>
	</div>
	</body>
</html>