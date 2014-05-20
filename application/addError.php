
<?php
include_once "../persist/SqlManager.class.php";	
	$conn = new SqlManager("connect");	
	$id_carte=$_SESSION['idc'];	
	?>
<html lang="en">
	<head>
		<title>Call & Eat</title>
		<link href="../css/stylesheet.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript">
window.onload=function(){
document.getElementById('category').focus();
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
			if (empty($name)) {						
						echo "<div class='error'>Le champ Name ne peut &ecirc;tre vide </div>";							
						}
			if($boolPriceEmpty){						
						echo "<div class='error'>Le champ Prix ne ne peut &ecirc;tre vide </div>";							
						}
						
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
	$query = "SELECT id_category, name_category FROM category WHERE id_carte=$id_carte and id_menu_type=$id_menu_type";
	include "leftCol.php";
	echo "<table align='center' id='tableAjout' cellpadding='0' cellspacing='5px'>";
	echo "<form action='addProduct.php?id_menu_type=$id_menu_type' method='post'>";
	echo "<tr>";	
	echo "<td align='right'><label>$category:*</label></td>";
	echo "<td align='left'>";	
	echo "<select id='category' value='$id_category' name='id_category'>";	
		$reslit = $conn->ExecuteRead($query);	
		$conn->closeConnection();
		foreach ( $reslit as $row )		    {
        $id_category = $row['id_category'];
		$name_category=$row['name_category'];
        echo "<option  value=\"$id_category\">$name_category</option>";
    }				
	echo"</select>
		</td>";
	echo "</tr>";	
	echo "<tr>";	
		echo "<td align='right'><label>Name:*</label></td>";
		echo "<td align='left'><input type='text' value='$name' name='name' id='name'/></td>";
	echo "</tr>";
		echo "<tr>";	
		echo "<td align='right' ><label>Description:</label></td>";
		echo "<td align='left'><textarea type='text' name='description'>$description</textarea></td>";		
	echo "</tr>";	
	echo "<tr>";	
		echo "<td align='right'><label>Price:*</label></td>";
		echo "<td align='left'><input type='text' value='$price' name='price'/></td>";
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
