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
			if (empty($name)) {
			echo "<div class='error'>Le champ Nom de la cat&eacute;gorie ne peut &ecirc;tre vide </div>";	
			}
			if(is_numeric($price)){					
			}else{			
				 		
				 echo "<div class='error'>Le champ Prix ne doit contenir que des numéros</div>";
				}
				
	echo "<form  action= 'modifier.php?price=$price&description=$description,&name=$name&id_product=". $_GET['id_product']."&id_menu_type=". $_GET['id_menu_type']."' name='modifProduct' method='post'>";
	echo "<table align='center' cellpadding='0' cellspacing='5px'>";
	echo "<tr>";
	echo "</tr>";	
	echo "<tr>";
	$conn = new SqlManager("connect");		
	echo "<td align='right'><label>Category:*</label></td>";
	echo "<td align='left'>";
	
	echo"		<select name='id_category'>";	
    $query = "SELECT id_category, name_category FROM category WHERE id_carte=$id_carte";
		$reslit = $conn->ExecuteRead($query);	
		foreach ( $reslit as $row )		    {
        $id_category = $row['id_category'];
		$name_category=$row['name_category'];
        echo "<option value=\"$id_category\">$name_category</option>";
    }				
	echo"</select>
		</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align='right'><label>Name: *</label></td>";
	echo "<td align='left'><input type='text' name='name' value='$name'/></td>";
	echo "</tr>";		
	echo "<td align='right'><label>Description:</label></td>";
	echo "<td align='left'><input type='text' value='$description' name='description'/></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align='right'><label>Prix: *</label></td>";
	echo "<td align='left'><input type='text' value='$price' name='price'/></td>";
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