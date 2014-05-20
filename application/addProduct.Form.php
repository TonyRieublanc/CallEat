	<script type="text/javascript">
window.onload=function(){
document.getElementById('category').focus();
}
</script>
<?php

	include_once "../persist/SqlManager.class.php";	
	$conn = new SqlManager("connect");	
	$id_carte=$_SESSION['idc'];	
	if ( isset($_GET["page"]) )
					{	$page = $_GET["page"];			
						if ( strcmp($page, "addentree") == 0 )	{							
							$category="Cat&eacute;gorie des entr&eacute;es";
							$id_menu_type=1;}
						if ( strcmp($page, "addplat") == 0 ){
							$category="Cat&eacute;gorie des plats";
							$id_menu_type=2;}
						if ( strcmp($page, "addmenu") == 0 ){
							$category="Cat&eacute;gorie des menus";
							$id_menu_type=3;}
						if ( strcmp($page, "adddessert") == 0 ){
							$category="Cat&eacute;gorie des desserts";
							$id_menu_type=4;}
						if ( strcmp($page, "addboisson") == 0 ){
							$category="Cat&eacute;gorie des boissons";
							$id_menu_type=5;}
					}	
	
	include "leftCol.php";
	echo "<table align='center' id='tableAjout' cellpadding='0' cellspacing='5px'>";
	echo "<form action='addProduct.php?id_menu_type=$id_menu_type' method='post'>";
	echo "<tr>";	
	echo "<td align='right'><label>$category:*</label></td>";
	echo "<td align='left'>";	
	if($boolAdd){
		echo"<select id='category' name='id_category'>";	
		$query2 = "SELECT name_category,description_category,id_category FROM category  WHERE id_category=$id_category";	
		$reslit2 = $conn->ExecuteRead($query2);		
			foreach ( $reslit2 as $row2 )		    {
			$id_category = $row2['id_category'];
			$name_category=$row2['name_category'];
			$description_category=$row2['description_category'];
			echo "<option value=\"$id_category\">$name_category,$description_category</option>";
			}
		$query = "SELECT id_category, name_category,description_category
					FROM category
					WHERE id_carte =$id_carte	
					AND id_menu_type=$id_menu_type
					AND id_category <> $id_category					
					ORDER BY name_category ASC"
					;
		$reslit = $conn->ExecuteRead($query);	
			foreach ( $reslit as $row )		    {
			$id_category = $row['id_category'];
			$name_category=$row['name_category'];
			$description_category=$row['description_category'];
			echo "<option value=\"$id_category\">$name_category, $description_category</option>";
			}		
		echo"</select>
		</td>";
	}else if (!$boolAdd){	
			echo "<select id='category' name='id_category'>";				
			$query = "SELECT id_category, name_category,description_category FROM category WHERE id_carte=$id_carte and id_menu_type=$id_menu_type ORDER BY name_category ASC";
			$reslit = $conn->ExecuteRead($query);				
			$conn->closeConnection();	
				foreach ( $reslit as $row )		    {
				$id_category = $row['id_category'];
				$name_category=$row['name_category'];
				$description_category=$row['description_category'];
				echo "<option  value=\"$id_category\">$name_category,$description_category</option>";
				}				
			echo"</select>	</td>";			
		}
	echo "</tr>";	
	echo "<tr>";	
		echo "<td align='right'><label>Name:*</label></td>";
		echo "<td align='left'><input type='text' name='name' id='name'/></td>";
	echo "</tr>";
		echo "<tr>";	
		echo "<td align='right' ><label>Description:</label></td>";
		echo "<td align='left'><textarea type='text' name='description'></textarea></td>";		
	echo "</tr>";	
	echo "<tr>";	
		echo "<td align='right'><label>Price:*</label></td>";
		echo "<td align='left'><input type='text' name='price'/></td>";
	echo "</tr>";
echo"<tr>";	
	echo "<td colspan='2' align='center'><input id='submitenregistrer' type='submit' value='Enregister'/></td>";
	echo "</tr>";
	echo "</table>";
	echo "</form>";
 ?>