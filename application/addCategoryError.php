 <html lang="en">
	<head>
		<title>Call & Eat</title>
		<link href="../css/stylesheet.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript">
		window.onload=function(){
		document.getElementById('id_menu_titre').focus();
		}
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
			if($id_menu_type==0){
			echo "<div class='error'>Vous devez choisir un type &agrave; la cat&eacute;gorie</div>";			
			}		
			if (empty($name_category)) {
			echo "<div class='error'>Le champ Nom de la cat&eacute;gorie ne peut &ecirc;tre vide </div>";			
			}
			$id_carte=$_SESSION['idc'];
			include "leftCol.php";
			echo "<form action='addcategory.php' name='addcategory' method='post'>";
			echo "<table align='center' cellpadding='0' cellspacing='5px'>";
			echo "<tr>";
				echo "<td align='right'><label>Type:*</label></td>";
				echo "<td align='left'><select id='id_menu_titre' value='id_menu_titre' name='id_menu_type'>
				<option value='0'> ----- Choisir ----- </option>
				<option value='1'> Entr&eacute;e </option>
				<option value='2'> Plat </option>
				<option value='3'> Menu </option>	
				<option value='4'> Dessert </option>
				<option value='5'> Boisson </option>		
				</select></td>";
			echo "</tr>";
			echo "<tr>";	
			echo "<td align='right'><label>Nom de la cat&eacute;gorie:*</label></td>";
			echo "<td align='left'><input type='text' value'$name_category' name='name_category'/></td>";
			echo "</tr>";	
			echo "<tr>";	
			echo "<td align='right'><label>Description de la cat&eacute;gorie:*</label></td>";
			echo "<td align='left'><input type='text' value='$description_category' name='description_category'/></td>";
			echo "</tr>";	
			echo "<tr>";
			echo "<td colspan='2' align='center'><input id='submitenregistrer' type='submit' value='Enregister'/></td>";
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