<?php
	session_start();
	$id_carte=$_SESSION['idc'];
	?>
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
	include_once "buscar.leftCol.php";		
	include_once "../persist/SqlManager.class.php";	
	
	$id_product=$_GET['id_product'];
	$id_menu_type=$_GET['id_menu_type'];
	echo "<form  action= 'modifier.php?id_product=". $_GET['id_product']."&id_menu_type=". $_GET['id_menu_type']."' name='modifProduct' method='post'>";
	echo "<table align='center' cellpadding='0' cellspacing='5px'>";
	echo "<tr>";
	echo "</tr>";	
	echo "<tr>";
	$conn = new SqlManager("connect");		
	echo "<td align='right'><label>Category:*</label></td>";
	echo "<td align='left'>";
	$id_menu_type=$_GET['id_menu_type'];
	$id_category_select=$_GET['id_category'];	
	echo"<select name='id_category'>";	
		$query2 = "SELECT name_category,id_category FROM category  WHERE id_category=$id_category_select";	
		$reslit2 = $conn->ExecuteRead($query2);		
		foreach ( $reslit2 as $row2 )		    {
        $id_category = $row2['id_category'];
		$name_category=$row2['name_category'];
		echo "<option value=\"$id_category_select\">$name_category</option>";
		}
		$query = "SELECT id_category, name_category
					FROM category
					WHERE id_carte =$id_carte					
					AND id_category <> $id_category_select
					ORDER BY name_category ASC"
					;
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
	//$nameDecode=stripslashes(htmlspecialchars(rawurldecode ($_GET['name']), ENT_QUOTES));
	$nameDecode=htmlspecialchars(rawurldecode ($_GET['name']), ENT_QUOTES, 'ISO-8859-1');	
	echo "<td align='left'><input type='text' name='name' value='$nameDecode'/></td>";
	echo "</tr>";
	echo "<tr>";	
	echo "<td align='right'><label>Description:</label></td>";
	$descriptionDecode=stripslashes(htmlspecialchars(urldecode($_GET['description']), ENT_QUOTES, 'ISO-8859-1'));
	echo "<td align='left'><textarea type='text' name='description'>$descriptionDecode</textarea></td>";		
	//echo "<td align='left'><input type='text' value='$descriptionDecode' name='description'/></td>";
	echo "</tr>";
	echo "<tr>";
	echo "<td align='right'><label>Prix: *</label></td>";
	$priceDecode=stripslashes(htmlspecialchars(urldecode($_GET['price']), ENT_QUOTES, 'ISO-8859-1'));
	echo "<td align='left'><input type='text' value='$priceDecode' name='price'/></td>";
	echo "</tr>"; 
	echo "<tr>";
	echo "<td colspan='2' align='center'><input input id='submitenregistrer'  type='submit' value='modifier'></td>";	
	echo "</tr>";
	echo "</table>";
	echo "</form>";	
	$conn->closeConnection();
?>
</div>
			<div id="footer">
			</div>
	</div>
	</body>
</html>