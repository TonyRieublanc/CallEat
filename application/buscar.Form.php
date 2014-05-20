<?php
	include_once "../persist/SqlManager.class.php";	
	include_once "buscar.leftCol.php";
	$conn = new SqlManager("connect");	
	$id_carte=$_SESSION['idc'];
		if ( isset($_GET["page"]) )
					{	$page = $_GET["page"];
						$conn = new SqlManager("connect");	
						if ( strcmp($page, "entrees") == 0 )	{				
							$id_menu_type=1;}
						if ( strcmp($page, "plats") == 0 ){							
							$id_menu_type=2;}
						if ( strcmp($page, "menus") == 0 ){
							$id_menu_type=3;}
						if ( strcmp($page, "desserts") == 0 ){
							$id_menu_type=4;}
						if ( strcmp($page, "boissons") == 0 ){
							$id_menu_type=5;}
					}	
	$query = "SELECT * 
			FROM product p
			INNER JOIN category c ON p.id_category = c.id_category
			WHERE id_menu_type =$id_menu_type
			AND id_carte=$id_carte
			ORDER BY p.id_product";
		//	ORDER BY c.id_category";
	$reslit = $conn->ExecuteRead($query);	
	echo"<table align='center' cellpadding='0' cellspacing='5px'>";
	echo"<tr>		
				<td id='titre'>Name:</td>
				<td id='titre'>Description:</td>
				<td id='titre'>Price:</td>	
				<td id='titre'>Category:</td>
		</tr>";
	foreach ( $reslit as $row )
	{
		$id_product = $row["id_product"];
		$id_category=$row["id_category"];
		$name_category=$row["name_category"];
		$name = $row["name"];
		$price = $row["price"];
		$description = $row["description"];
		
		echo "<tr>";
		echo "<td >" . $name . "</td>";			
		echo "<td>" . $description . "</td>";			
		echo "<td>" . $price . "</td>";	
		echo "<td>" . $name_category . "</td>";	
		$priceEncode=urlencode($price);
		echo "<td>	<a href='modifier.Form.php?id_product=" . $id_product . "&id_menu_type=" . $id_menu_type . "&id_category=" . $id_category . "&name=" . rawurlencode($name) . "&description=" . urlencode($description) . "&price=" . $priceEncode . "' ><input id='submitTable' type='submit' value='modifier'></a> </td>";
		echo "<form  value='effacer' action='effacer.php?id_product=" . $id_product . "&id_menu_type=" . $id_menu_type . "' ' method='Post' onsubmit='return test()'>";
		echo "<td> <input id='submitTable' type='submit'  value='effacer'></a> </td>";
		echo "</tr>";
		echo"</form>";
	}
	echo "</table>";	
	$conn->closeConnection();
?>
<script language="Javascript">
function test(){
  return window.confirm("Voulez vous supprimer ce produit?" );
}
</script>

